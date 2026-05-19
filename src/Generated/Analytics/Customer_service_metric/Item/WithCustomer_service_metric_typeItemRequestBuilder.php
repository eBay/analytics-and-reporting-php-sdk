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

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item;

use EBay\AnalyticsAndReporting\Generated\Analytics\Customer_service_metric\Item\Item\WithEvaluation_typeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /customer_service_metric/{customer_service_metric_type}
*/
class WithCustomer_service_metric_typeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AnalyticsAndReporting/Generated/Analytics.customer_service_metric.item.item collection
     * @param string $evaluation_type Use this path parameter to specify the evaluation period to use for the performance metrics. See <a href="/api-docs/sell/analytics/types/api:EvaluationTypeEnum" target="_blank"> EvaluationTypeEnum</a> for more information on the supported values.
     * @return WithEvaluation_typeItemRequestBuilder
    */
    public function byEvaluation_type(string $evaluation_type): WithEvaluation_typeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['evaluation_type'] = $evaluation_type;
        return new WithEvaluation_typeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WithCustomer_service_metric_typeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customer_service_metric/{customer_service_metric_type}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
