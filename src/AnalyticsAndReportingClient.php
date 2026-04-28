<?php

namespace EBay\AnalyticsAndReporting;

use EBay\AnalyticsAndReporting\Clients\Rest\AnalyticsClient;
use EBay\AnalyticsAndReporting\Configuration\AnalyticsAndReportingConfiguration;
use EBay\AnalyticsAndReporting\Configuration\KiotaAuthProvider;
use EBay\AnalyticsAndReporting\Generated\Analytics\AnalyticsApiClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AnalyticsAndReportingClient
{
    public readonly AnalyticsClient $analytics;

    public function __construct(AnalyticsAndReportingConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= self::buildGuzzle($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $analyticsAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $analyticsAdapter->setBaseUrl($config->analyticsBaseUrl);
        $this->analytics = new AnalyticsClient(new AnalyticsApiClient($analyticsAdapter), $config);
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
                                $request->getUri(),
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
