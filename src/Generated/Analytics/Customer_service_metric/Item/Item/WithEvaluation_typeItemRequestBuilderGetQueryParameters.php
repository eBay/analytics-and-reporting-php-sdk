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

/**
 * Use this method to retrieve a seller's performance and rating for the customer service metric.  <br><br>Control the response from the <b>getCustomerServiceMetric</b> method using the following path and query parameters: <ul><li><b>customer_service_metric_type</b> controls the type of customer service transactions evaluated for the metric rating.</li> <li><b>evaluation_type</b> controls the period you want to review.</li> <li><b>evaluation_marketplace_id</b> specifies the target marketplace for the evaluation.</li></ul> Currently, metric data is returned for only peer benchmarking. For details on the workings of peer benchmarking, see <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769" title="eBay Help pages" target="_blank">Service metrics policy</a>.  <br><br>For details on using and understanding the response from this method, see <a href="/api-docs/sell/static/performance/customer-service-metric.html" title="Selling Integration Guide" target="_blank">Interpreting customer service metric ratings</a>.
*/
class WithEvaluation_typeItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("evaluation_marketplace_id")
     * @var string|null $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>Customer service metrics are supported for the following eBay marketplaces, and the unique identifier (enum) of the marketplace must be used in this field:<ul><li><b>Australia</b> (<code>EBAY_AU</code>)</li><li><b>Canada</b> (<code>EBAY_CA</code>) </li><li><b>France</b> (<code>EBAY_FR</code>) </li><li><b>Germany</b> (<code>EBAY_DE</code>) </li><li><b>Great Britain</b> (<code>EBAY_GB</code>) </li><li><b>Italy</b> (<code>EBAY_IT</code>) </li><li><b>Spain</b> (<code>EBAY_ES</code>) </li><li><b>United States</b> (<code>EBAY_US</code>) </li></ul>
    */
    public ?string $evaluationMarketplaceId = null;
    
    /**
     * Instantiates a new WithEvaluation_typeItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $evaluation_marketplace_id Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data.  <br><br>Customer service metrics are supported for the following eBay marketplaces, and the unique identifier (enum) of the marketplace must be used in this field:<ul><li><b>Australia</b> (<code>EBAY_AU</code>)</li><li><b>Canada</b> (<code>EBAY_CA</code>) </li><li><b>France</b> (<code>EBAY_FR</code>) </li><li><b>Germany</b> (<code>EBAY_DE</code>) </li><li><b>Great Britain</b> (<code>EBAY_GB</code>) </li><li><b>Italy</b> (<code>EBAY_IT</code>) </li><li><b>Spain</b> (<code>EBAY_ES</code>) </li><li><b>United States</b> (<code>EBAY_US</code>) </li></ul>
    */
    public function __construct(?string $evaluation_marketplace_id = null) {
        $this->evaluationMarketplaceId = $evaluation_marketplace_id;
    }

}
