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

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Item\Item;

use EBay\AnalyticsAndReporting\Generated\Analytics\Models\Error;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\ErrorMessageV3;
use EBay\AnalyticsAndReporting\Generated\Analytics\Models\StandardsProfile;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /seller_standards_profile/{program}/{cycle}
*/
class WithCycleItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithCycleItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/seller_standards_profile/{program}/{cycle}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves a single standards profile for the associated seller.  <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the seller's associated compliance values (either <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A seller can have multiple profiles distinguished by two criteria, a "program" and a "cycle." A profile's <i>program </i> is one of three regions where the seller may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all marketplaces where the seller has done business. The <i>cycle</i> value specifies whether the standards compliance values were determined at the last official eBay evaluation (<code>CURRENT</code>) or at the time of the request (<code>PROJECTED</code>). Both cycle and a program values are required URI parameters for this method.<br><br>For more information on the interpreting the response payload of this method, see <a href="/api-docs/sell/static/performance/seller-standards.html" target="_blank">Seller standards profile</a>.
     * @param WithCycleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StandardsProfile|null>
     * @throws Exception
    */
    public function get(?WithCycleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorMessageV3::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorMessageV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StandardsProfile::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call retrieves a single standards profile for the associated seller.  <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the seller's associated compliance values (either <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A seller can have multiple profiles distinguished by two criteria, a "program" and a "cycle." A profile's <i>program </i> is one of three regions where the seller may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all marketplaces where the seller has done business. The <i>cycle</i> value specifies whether the standards compliance values were determined at the last official eBay evaluation (<code>CURRENT</code>) or at the time of the request (<code>PROJECTED</code>). Both cycle and a program values are required URI parameters for this method.<br><br>For more information on the interpreting the response payload of this method, see <a href="/api-docs/sell/static/performance/seller-standards.html" target="_blank">Seller standards profile</a>.
     * @param WithCycleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCycleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithCycleItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCycleItemRequestBuilder {
        return new WithCycleItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
