<?php

namespace EBay\AnalyticsAndReporting\Clients\Rest;

use EBay\AnalyticsAndReporting\Configuration\TokenContext;
use EBay\AnalyticsAndReporting\Generated\Analytics\AnalyticsApiClient;
use EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item\WithEvaluation_typeItemRequestBuilderGetRequestConfiguration;
use EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item\WithEvaluation_typeItemRequestBuilderGetQueryParameters;
use EBay\AnalyticsAndReporting\Generated\Analytics\Traffic_report\Traffic_reportRequestBuilderGetRequestConfiguration;
use EBay\AnalyticsAndReporting\Generated\Analytics\Traffic_report\Traffic_reportRequestBuilderGetQueryParameters;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\FindSellerStandardsProfilesResponse;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\GetCustomerServiceMetricResponse;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\StandardsProfile;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\Report;

final class AnalyticsClient
{
    public function __construct(private readonly AnalyticsApiClient $kiota) {}

    /**
     * Retrieves all standards profiles for the seller.
     *
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @return FindSellerStandardsProfilesResponse|null
     */
    public function findSellerStandardsProfiles(?string $accessToken = null): ?FindSellerStandardsProfilesResponse
    {
        return TokenContext::runWith($accessToken, function () {
            return $this->kiota->seller_standards_profile()->get()->wait();
        });
    }

    /**
     * Retrieves a seller's performance rating for the customer service metric.
     *
     * @param string $customerServiceMetricType ITEM_NOT_AS_DESCRIBED or ITEM_NOT_RECEIVED
     * @param string $evaluationType           CURRENT or PROJECTED
     * @param string|null $evaluationMarketplaceId  e.g. EBAY_US
     * @param string|null $accessToken         Per-call token; overrides config fallback.
     * @return GetCustomerServiceMetricResponse|null
     */
    public function getCustomerServiceMetric(
        string $customerServiceMetricType,
        string $evaluationType,
        ?string $evaluationMarketplaceId = null,
        ?string $accessToken = null,
    ): ?GetCustomerServiceMetricResponse {
        return TokenContext::runWith($accessToken, function () use ($customerServiceMetricType, $evaluationType, $evaluationMarketplaceId) {
            $config = null;
            if ($evaluationMarketplaceId !== null) {
                $config = new WithEvaluation_typeItemRequestBuilderGetRequestConfiguration(
                    queryParameters: new WithEvaluation_typeItemRequestBuilderGetQueryParameters($evaluationMarketplaceId)
                );
            }
            return $this->kiota
                ->customer_service_metric()
                ->byCustomer_service_metric_type($customerServiceMetricType)
                ->byEvaluation_type($evaluationType)
                ->get($config)
                ->wait();
        });
    }

    /**
     * Retrieves a single standards profile for the seller.
     *
     * @param string      $program     PROGRAM_DE, PROGRAM_GLOBAL, PROGRAM_MOTORS_US, or PROGRAM_US
     * @param string      $cycle       CURRENT or PROJECTED
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @return StandardsProfile|null
     */
    public function getSellerStandardsProfile(
        string $program,
        string $cycle,
        ?string $accessToken = null,
    ): ?StandardsProfile {
        return TokenContext::runWith($accessToken, function () use ($program, $cycle) {
            return $this->kiota
                ->seller_standards_profile()
                ->byProgram($program)
                ->byCycle($cycle)
                ->get()
                ->wait();
        });
    }

    /**
     * Returns a traffic report for the seller's listings.
     *
     * @param string|null $dimension   DAY or LISTING
     * @param string|null $filter      e.g. "marketplace_ids:{EBAY_US},date_range:[20240101..20240131]"
     * @param string|null $metric      Comma-separated metrics, e.g. "CLICK_THROUGH_RATE,TRANSACTION"
     * @param string|null $sort        Metric to sort by; prefix with "-" for descending
     * @param string|null $accessToken Per-call token; overrides config fallback.
     * @return Report|null
     */
    public function getTrafficReport(
        ?string $dimension = null,
        ?string $filter = null,
        ?string $metric = null,
        ?string $sort = null,
        ?string $accessToken = null,
    ): ?Report {
        return TokenContext::runWith($accessToken, function () use ($dimension, $filter, $metric, $sort) {
            $config = new Traffic_reportRequestBuilderGetRequestConfiguration(
                queryParameters: new Traffic_reportRequestBuilderGetQueryParameters($dimension, $filter, $metric, $sort)
            );
            return $this->kiota->traffic_report()->get($config)->wait();
        });
    }
}
