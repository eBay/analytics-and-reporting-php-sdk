<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Item;

use EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Item\Item\WithCycleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /seller_standards_profile/{program}
*/
class WithProgramItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AnalyticsAndReporting/Generated/Analytics.seller_standards_profile.item.item collection
     * @param string $cycle This path parameter is used to specify the cycle for which metrics and metadata will be retrieved.<br><br>See <a href="/api-docs/sell/analytics/types/ssp:CycleTypeEnum" target="_blank">CycleTypeEnum</a> for a list of supported values.
     * @return WithCycleItemRequestBuilder
    */
    public function byCycle(string $cycle): WithCycleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cycle'] = $cycle;
        return new WithCycleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithProgramItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/seller_standards_profile/{program}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
