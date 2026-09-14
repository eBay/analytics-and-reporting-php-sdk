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
     * @param string $cycle This path parameter is used to specify the cycle for which metrics and metadata will be retrieved.<br><br>See <a href="/develop/api/sell/analytics_api#sell-analytics_api-seller_standards_profile-getsellerstandardsprofile.cycletypeenum">CycleTypeEnum</a> for a list of supported values.
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
