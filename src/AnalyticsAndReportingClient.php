<?php

namespace EBay\AnalyticsAndReporting;

use EBay\AnalyticsAndReporting\Clients\Rest\AnalyticsClient;
use EBay\AnalyticsAndReporting\Configuration\AnalyticsAndReportingConfiguration;
use EBay\AnalyticsAndReporting\Configuration\KiotaAuthProvider;
use EBay\AnalyticsAndReporting\Generated\Analytics\AnalyticsApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AnalyticsAndReportingClient
{
    public readonly AnalyticsClient $analytics;

    public function __construct(AnalyticsAndReportingConfiguration $config, ?GuzzleClient $guzzle = null)
    {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $analyticsAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $analyticsAdapter->setBaseUrl($config->analyticsBaseUrl);
        $this->analytics = new AnalyticsClient(new AnalyticsApiClient($analyticsAdapter));
    }
}
