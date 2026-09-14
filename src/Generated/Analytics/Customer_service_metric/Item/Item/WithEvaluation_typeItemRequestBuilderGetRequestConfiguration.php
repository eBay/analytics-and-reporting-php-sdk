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
     * @param string|null $evaluation_marketplace_id Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>Customer service metrics are supported for the following eBay marketplaces, and the unique identifier (enum) of the marketplace must be used in this field:<ul><li><b>Australia</b> (<code>EBAY_AU</code>)</li><li><b>Canada</b> (<code>EBAY_CA</code>) </li><li><b>France</b> (<code>EBAY_FR</code>) </li><li><b>Germany</b> (<code>EBAY_DE</code>) </li><li><b>Great Britain</b> (<code>EBAY_GB</code>) </li><li><b>Italy</b> (<code>EBAY_IT</code>) </li><li><b>Spain</b> (<code>EBAY_ES</code>) </li><li><b>United States</b> (<code>EBAY_US</code>) </li></ul>
     * @return WithEvaluation_typeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $evaluation_marketplace_id = null): WithEvaluation_typeItemRequestBuilderGetQueryParameters {
        return new WithEvaluation_typeItemRequestBuilderGetQueryParameters($evaluation_marketplace_id);
    }

}
