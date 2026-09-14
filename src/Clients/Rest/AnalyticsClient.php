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

namespace EBay\AnalyticsAndReporting\Clients\Rest;

use EBay\AnalyticsAndReporting\Configuration\KiotaAuthProvider;
use EBay\AnalyticsAndReporting\Configuration\AnalyticsAndReportingConfiguration;
use EBay\AnalyticsAndReporting\Configuration\RequestOptions;
use EBay\AnalyticsAndReporting\Generated\Analytics\AnalyticsApiClient;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\FindSellerStandardsProfilesResponse;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\GetCustomerServiceMetricResponse;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\Report;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\StandardsProfile;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class AnalyticsClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly AnalyticsAndReportingConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function getCustomerServiceMetric(
        string $customerServiceMetricType,
        string $evaluationType,
        ?string $evaluationMarketplaceId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?GetCustomerServiceMetricResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->customer_service_metric()->byCustomer_service_metric_type($customerServiceMetricType)->byEvaluation_type($evaluationType)->get(
                new \EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item\WithEvaluation_typeItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item\WithEvaluation_typeItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        evaluation_marketplace_id: $evaluationMarketplaceId,
                    ),
                )
            )->wait()
        );
    }

    public function findSellerStandardsProfiles(?string $accessToken = null, ?RequestOptions $requestOptions = null): ?FindSellerStandardsProfilesResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->seller_standards_profile()->get(
                new \EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Seller_standards_profileRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getSellerStandardsProfile(
        string $cycle,
        string $program,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?StandardsProfile
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->seller_standards_profile()->byProgram($program)->byCycle($cycle)->get(
                new \EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Item\Item\WithCycleItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getTrafficReport(
        ?string $dimension = null,
        ?string $filter = null,
        ?string $metric = null,
        ?string $sort = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Report
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->traffic_report()->get(
                new \EBay\AnalyticsAndReporting\Generated\Analytics\Traffic_report\Traffic_reportRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\AnalyticsAndReporting\Generated\Analytics\Traffic_report\Traffic_reportRequestBuilderGetRequestConfiguration::createQueryParameters(
                        dimension: $dimension,
                        filter: $filter,
                        metric: $metric,
                        sort: $sort,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set AnalyticsAndReportingConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): AnalyticsApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->analyticsBaseUrl);
        return new AnalyticsApiClient($adapter);
    }
}
