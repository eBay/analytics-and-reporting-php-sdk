<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric;

use EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\WithCustomer_service_metric_typeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /customer_service_metric
*/
class Customer_service_metricRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AnalyticsAndReporting/Generated/Analytics.customer_service_metric.item collection
     * @param string $customer_service_metric_type Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are:<br> <ul><li><code>ITEM_NOT_AS_DESCRIBED</code></li><li><code>ITEM_NOT_RECEIVED</code></li></ul>
     * @return WithCustomer_service_metric_typeItemRequestBuilder
    */
    public function byCustomer_service_metric_type(string $customer_service_metric_type): WithCustomer_service_metric_typeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customer_service_metric_type'] = $customer_service_metric_type;
        return new WithCustomer_service_metric_typeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Customer_service_metricRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customer_service_metric');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
