<?php

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
