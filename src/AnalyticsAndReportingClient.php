<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\AnalyticsAndReporting;

use EBay\AnalyticsAndReporting\Clients\Rest\AnalyticsClient;
use EBay\AnalyticsAndReporting\Configuration\AnalyticsAndReportingConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;

final class AnalyticsAndReportingClient
{
    public readonly AnalyticsClient $analytics;

    public function __construct(AnalyticsAndReportingConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= self::buildGuzzle($config);

        $this->analytics = new AnalyticsClient($guzzle, $config);
    }

    private static function buildGuzzle(AnalyticsAndReportingConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(function (callable $handler) {
                return function ($request, array $options) use ($handler) {
                    return $handler($request, $options)->then(function ($response) use ($request) {
                        if ($response->getStatusCode() >= 400) {
                            fwrite(STDERR, sprintf(
                                "[REST %d] %s %s\n",
                                $response->getStatusCode(),
                                $request->getMethod(),
                                str_replace(["\r", "\n"], ' ', (string) $request->getUri()),
                            ));
                            $body = (string) $response->getBody();
                            fwrite(STDERR, "[REST body] $body\n");
                            $response->getBody()->rewind();
                        }
                        return $response;
                    });
                };
            });
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
