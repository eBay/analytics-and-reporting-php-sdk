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

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex data type defines the response data that is returned from a request to <b>getCustomerServiceMetric</b>.  <br><br>The <b>dimensionMetrics</b> object contains the details of the dimension being measured and the calculated customer service metric values. <br><br>The <b>evaluationCycle</b> defines the period used to calculate the metric values.  <br><br>The <b>marketplaceId</b> is the eBay marketplace for which the metrics are being considered.
*/
class GetCustomerServiceMetricResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<DimensionMetric>|null $dimensionMetrics This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
    */
    private ?array $dimensionMetrics = null;
    
    /**
     * @var EvaluationCycle|null $evaluationCycle This complex type defines the evaluation type (<code>CURRENT</code> or <code>PROJECTED</code>) and the transaction lookback period used to calculate the seller's customer service metric.
    */
    private ?EvaluationCycle $evaluationCycle = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages" target="_blank">Service metrics policy</a> page.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * Instantiates a new GetCustomerServiceMetricResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCustomerServiceMetricResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCustomerServiceMetricResponse {
        return new GetCustomerServiceMetricResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionMetrics property value. This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
     * @return array<DimensionMetric>|null
    */
    public function getDimensionMetrics(): ?array {
        return $this->dimensionMetrics;
    }

    /**
     * Gets the evaluationCycle property value. This complex type defines the evaluation type (<code>CURRENT</code> or <code>PROJECTED</code>) and the transaction lookback period used to calculate the seller's customer service metric.
     * @return EvaluationCycle|null
    */
    public function getEvaluationCycle(): ?EvaluationCycle {
        return $this->evaluationCycle;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionMetrics' => fn(ParseNode $n) => $o->setDimensionMetrics($n->getCollectionOfObjectValues([DimensionMetric::class, 'createFromDiscriminatorValue'])),
            'evaluationCycle' => fn(ParseNode $n) => $o->setEvaluationCycle($n->getObjectValue([EvaluationCycle::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
        ];
    }

    /**
     * Gets the marketplaceId property value. The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages" target="_blank">Service metrics policy</a> page.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensionMetrics', $this->getDimensionMetrics());
        $writer->writeObjectValue('evaluationCycle', $this->getEvaluationCycle());
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dimensionMetrics property value. This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
     * @param array<DimensionMetric>|null $value Value to set for the dimensionMetrics property.
    */
    public function setDimensionMetrics(?array $value): void {
        $this->dimensionMetrics = $value;
    }

    /**
     * Sets the evaluationCycle property value. This complex type defines the evaluation type (<code>CURRENT</code> or <code>PROJECTED</code>) and the transaction lookback period used to calculate the seller's customer service metric.
     * @param EvaluationCycle|null $value Value to set for the evaluationCycle property.
    */
    public function setEvaluationCycle(?EvaluationCycle $value): void {
        $this->evaluationCycle = $value;
    }

    /**
     * Sets the marketplaceId property value. The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages" target="_blank">Service metrics policy</a> page.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

}
