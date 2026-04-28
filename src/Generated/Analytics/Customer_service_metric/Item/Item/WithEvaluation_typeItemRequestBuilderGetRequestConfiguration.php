<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithEvaluation_typeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithEvaluation_typeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithEvaluation_typeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithEvaluation_typeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithEvaluation_typeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithEvaluation_typeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithEvaluation_typeItemRequestBuilderGetQueryParameters.
     * @param string|null $evaluation_marketplace_id Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>For the list of supported marketplaces, see <a href="/api-docs/sell/analytics/static/overview.html#requirements" title="Analytics API Overview" target="_blank">Analytics API requirements and restrictions</a>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
     * @return WithEvaluation_typeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $evaluation_marketplace_id = null): WithEvaluation_typeItemRequestBuilderGetQueryParameters {
        return new WithEvaluation_typeItemRequestBuilderGetQueryParameters($evaluation_marketplace_id);
    }

}
