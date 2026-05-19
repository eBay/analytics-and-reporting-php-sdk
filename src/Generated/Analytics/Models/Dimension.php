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
 * The fields in this complex type define the dimension, or attributes, by which the associated customer service metric and benchmark data is measured.  <br><br>The value of <b>dimensionKey</b> gets set according to the configuration of the input request. The <b>name</b> and <b>value</b> pair further define dimension under the key.
*/
class Dimension implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $dimensionKey <b>dimensionKey</b> defines the basis against which the seller's customer service metric is measured.  <br><br>The value of this field gets set according to the value of the <b>customer_service_metric_type</b> input parameter. The following input configurations return the responses shown: <ul><li><code>ITEM_NOT_AS_DESCRIBED</code> &ndash; Returns benchmark ratings based on L1 listing categories, so the result shows metrics where the <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>.</li>  <li><code>ITEM_NOT_RECEIVED</code> &ndash; Returns benchmark ratings based on world shipping regions, so the result shows metrics where the <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>.  <br><br>The shipping region is indicated by the associated <b>value</b> field. For specifics on world shipping regions, see the FAQ section on the following page: <a href="https://www.ebay.com/help/selling/selling/monitor-service-metrics?id=4785" title="eBay Help page" target="_blank">Monitor your service metrics</a></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:DimensionTypeEnum'>eBay API documentation</a>
    */
    private ?string $dimensionKey = null;
    
    /**
     * @var string|null $name The dimension name returned in this field depends on the <b>dimensionKey</b>: <ul><li>If  <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>, this field is set to one of following values, which represent established shipping corridors: <ul><li><code>Domestic</code></li> <li><code>International: Mature region</code></li> <li><code>International: Emerging region</code></li></ul></li>  <li>If <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>, this field is set to the name of the primary (L1) category in which the items being rated were listed.</li></ul>
    */
    private ?string $name = null;
    
    /**
     * @var string|null $value The value returned in this field depends on the <b>dimensionKey</b>.  <br><br>If <b>dimensionKey</b> equals <code>LISTING_CATEGORY</code>, the value returned in this field is the category ID of the primary (L1) category in which the items being rated were listed.  <br><br>If <b>dimensionKey</b> equals <code>SHIPPING_REGION</code>, one of the following values is returned:  <ul><li><code>DOMESTIC</code></li> <li><code>INTERNATIONAL_MATURED_REGION</code></li> <li><code>INTERNATIONAL_EMERGING_REGION</code></li></ul>
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Dimension and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dimension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dimension {
        return new Dimension();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionKey property value. <b>dimensionKey</b> defines the basis against which the seller's customer service metric is measured.  <br><br>The value of this field gets set according to the value of the <b>customer_service_metric_type</b> input parameter. The following input configurations return the responses shown: <ul><li><code>ITEM_NOT_AS_DESCRIBED</code> &ndash; Returns benchmark ratings based on L1 listing categories, so the result shows metrics where the <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>.</li>  <li><code>ITEM_NOT_RECEIVED</code> &ndash; Returns benchmark ratings based on world shipping regions, so the result shows metrics where the <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>.  <br><br>The shipping region is indicated by the associated <b>value</b> field. For specifics on world shipping regions, see the FAQ section on the following page: <a href="https://www.ebay.com/help/selling/selling/monitor-service-metrics?id=4785" title="eBay Help page" target="_blank">Monitor your service metrics</a></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:DimensionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDimensionKey(): ?string {
        return $this->dimensionKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionKey' => fn(ParseNode $n) => $o->setDimensionKey($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The dimension name returned in this field depends on the <b>dimensionKey</b>: <ul><li>If  <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>, this field is set to one of following values, which represent established shipping corridors: <ul><li><code>Domestic</code></li> <li><code>International: Mature region</code></li> <li><code>International: Emerging region</code></li></ul></li>  <li>If <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>, this field is set to the name of the primary (L1) category in which the items being rated were listed.</li></ul>
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. The value returned in this field depends on the <b>dimensionKey</b>.  <br><br>If <b>dimensionKey</b> equals <code>LISTING_CATEGORY</code>, the value returned in this field is the category ID of the primary (L1) category in which the items being rated were listed.  <br><br>If <b>dimensionKey</b> equals <code>SHIPPING_REGION</code>, one of the following values is returned:  <ul><li><code>DOMESTIC</code></li> <li><code>INTERNATIONAL_MATURED_REGION</code></li> <li><code>INTERNATIONAL_EMERGING_REGION</code></li></ul>
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dimensionKey', $this->getDimensionKey());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the dimensionKey property value. <b>dimensionKey</b> defines the basis against which the seller's customer service metric is measured.  <br><br>The value of this field gets set according to the value of the <b>customer_service_metric_type</b> input parameter. The following input configurations return the responses shown: <ul><li><code>ITEM_NOT_AS_DESCRIBED</code> &ndash; Returns benchmark ratings based on L1 listing categories, so the result shows metrics where the <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>.</li>  <li><code>ITEM_NOT_RECEIVED</code> &ndash; Returns benchmark ratings based on world shipping regions, so the result shows metrics where the <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>.  <br><br>The shipping region is indicated by the associated <b>value</b> field. For specifics on world shipping regions, see the FAQ section on the following page: <a href="https://www.ebay.com/help/selling/selling/monitor-service-metrics?id=4785" title="eBay Help page" target="_blank">Monitor your service metrics</a></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:DimensionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the dimensionKey property.
    */
    public function setDimensionKey(?string $value): void {
        $this->dimensionKey = $value;
    }

    /**
     * Sets the name property value. The dimension name returned in this field depends on the <b>dimensionKey</b>: <ul><li>If  <b>dimensionKey</b> is set to <code>SHIPPING_REGION</code>, this field is set to one of following values, which represent established shipping corridors: <ul><li><code>Domestic</code></li> <li><code>International: Mature region</code></li> <li><code>International: Emerging region</code></li></ul></li>  <li>If <b>dimensionKey</b> is set to <code>LISTING_CATEGORY</code>, this field is set to the name of the primary (L1) category in which the items being rated were listed.</li></ul>
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. The value returned in this field depends on the <b>dimensionKey</b>.  <br><br>If <b>dimensionKey</b> equals <code>LISTING_CATEGORY</code>, the value returned in this field is the category ID of the primary (L1) category in which the items being rated were listed.  <br><br>If <b>dimensionKey</b> equals <code>SHIPPING_REGION</code>, one of the following values is returned:  <ul><li><code>DOMESTIC</code></li> <li><code>INTERNATIONAL_MATURED_REGION</code></li> <li><code>INTERNATIONAL_EMERGING_REGION</code></li></ul>
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
