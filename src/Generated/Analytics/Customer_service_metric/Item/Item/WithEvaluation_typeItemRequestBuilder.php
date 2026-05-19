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

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item;

use EBay\AnalyticsAndReporting\Generated\Analytics\Models\GetCustomerServiceMetricResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customer_service_metric/{customer_service_metric_type}/{evaluation_type}
*/
class WithEvaluation_typeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithEvaluation_typeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customer_service_metric/{customer_service_metric_type}/{evaluation_type}?evaluation_marketplace_id={evaluation_marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Use this method to retrieve a seller's performance and rating for the customer service metric.  <br><br>Control the response from the <b>getCustomerServiceMetric</b> method using the following path and query parameters: <ul><li><b>customer_service_metric_type</b> controls the type of customer service transactions evaluated for the metric rating.</li> <li><b>evaluation_type</b> controls the period you want to review.</li> <li><b>evaluation_marketplace_id</b> specifies the target marketplace for the evaluation.</li></ul> Currently, metric data is returned for only peer benchmarking. For details on the workings of peer benchmarking, see <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769" title="eBay Help pages" target="_blank">Service metrics policy</a>.  <br><br>For details on using and understanding the response from this method, see <a href="/api-docs/sell/static/performance/customer-service-metric.html" title="Selling Integration Guide">Interpreting customer service metric ratings</a>.
     * @param WithEvaluation_typeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCustomerServiceMetricResponse|null>
     * @throws Exception
    */
    public function get(?WithEvaluation_typeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetCustomerServiceMetricResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Use this method to retrieve a seller's performance and rating for the customer service metric.  <br><br>Control the response from the <b>getCustomerServiceMetric</b> method using the following path and query parameters: <ul><li><b>customer_service_metric_type</b> controls the type of customer service transactions evaluated for the metric rating.</li> <li><b>evaluation_type</b> controls the period you want to review.</li> <li><b>evaluation_marketplace_id</b> specifies the target marketplace for the evaluation.</li></ul> Currently, metric data is returned for only peer benchmarking. For details on the workings of peer benchmarking, see <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769" title="eBay Help pages" target="_blank">Service metrics policy</a>.  <br><br>For details on using and understanding the response from this method, see <a href="/api-docs/sell/static/performance/customer-service-metric.html" title="Selling Integration Guide">Interpreting customer service metric ratings</a>.
     * @param WithEvaluation_typeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithEvaluation_typeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithEvaluation_typeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithEvaluation_typeItemRequestBuilder {
        return new WithEvaluation_typeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
