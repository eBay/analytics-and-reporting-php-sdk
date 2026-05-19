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

namespace EBay\AnalyticsAndReporting\Configuration;

final class AnalyticsAndReportingConfiguration
{
    public string $analyticsBaseUrl = 'https://api.ebay.com/sell/analytics/v1';

    /** Static fallback token; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [$this->analyticsBaseUrl]
        ));
    }
}
