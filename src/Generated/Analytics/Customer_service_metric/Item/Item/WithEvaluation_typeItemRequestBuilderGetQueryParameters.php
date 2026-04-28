<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item;

/**
 * Use this method to retrieve a seller's performance and rating for the customer service metric.  <br><br>Control the response from the <b>getCustomerServiceMetric</b> method using the following path and query parameters: <ul><li><b>customer_service_metric_type</b> controls the type of customer service transactions evaluated for the metric rating.</li> <li><b>evaluation_type</b> controls the period you want to review.</li> <li><b>evaluation_marketplace_id</b> specifies the target marketplace for the evaluation.</li></ul> Currently, metric data is returned for only peer benchmarking. For details on the workings of peer benchmarking, see <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769" title="eBay Help pages" target="_blank">Service metrics policy</a>.  <br><br>For details on using and understanding the response from this method, see <a href="/api-docs/sell/static/performance/customer-service-metric.html" title="Selling Integration Guide">Interpreting customer service metric ratings</a>.
*/
class WithEvaluation_typeItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("evaluation_marketplace_id")
     * @var string|null $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>For the list of supported marketplaces, see <a href="/api-docs/sell/analytics/static/overview.html#requirements" title="Analytics API Overview" target="_blank">Analytics API requirements and restrictions</a>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
    */
    public ?string $evaluationMarketplaceId = null;
    
    /**
     * Instantiates a new WithEvaluation_typeItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $evaluation_marketplace_id Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>For the list of supported marketplaces, see <a href="/api-docs/sell/analytics/static/overview.html#requirements" title="Analytics API Overview" target="_blank">Analytics API requirements and restrictions</a>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
    */
    public function __construct(?string $evaluation_marketplace_id = null) {
        $this->evaluationMarketplaceId = $evaluation_marketplace_id;
    }

}
