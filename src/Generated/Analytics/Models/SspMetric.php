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
 * A complex type that defines a single metric which is evaluated as a part of a seller's standards profile.  <br><br>For the specified metric, the <code>metricKey</code> value is its name and the <code>level</code> specifies how the seller is doing meeting eBay's standards for that metric (either <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>). The metric's <code>value</code> is the absolute number of the metric's value for the associated seller. 
*/
class SspMetric implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var StandardsLevelEnum|null $level The seller level for this metric, which indicates how well the seller is doing in meeting eBay's standards for this metric. Possible values are <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, and <code>BELOW_STANDARD</code>.
    */
    private ?StandardsLevelEnum $level = null;
    
    /**
     * @var string|null $lookbackEndDate The end date and time, in ISO 8601 format, when the seller was evaluated for this metric.
    */
    private ?string $lookbackEndDate = null;
    
    /**
     * @var string|null $lookbackStartDate The start date and time, in ISO 8601 format, when the seller was evaluated for this metric.
    */
    private ?string $lookbackStartDate = null;
    
    /**
     * @var string|null $metricKey An internal key string specifying a metric. These are short, abbreviated, strings such as <code>MIN_TXN_COUNT</code>.
    */
    private ?string $metricKey = null;
    
    /**
     * @var string|null $name A descriptive name for the metric. For example, "Transaction defect rate." This value is localized according to the value of the <b>X-EBAY-C-MARKETPLACE-ID</b> request header.
    */
    private ?string $name = null;
    
    /**
     * @var SspMetric_thresholdLowerBound|null $thresholdLowerBound Specifies the lowest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and <b>thresholdLowerBound</b> is set to <code>10</code>, having fewer than 10 rocks in inventory would result in the seller dropping a level to <code>BELOW_STANDARD</code>. See <code>thresholdMetaData</code> to determine if the lower bound value is inclusive or exclusive.  <br><br>The lower bound value is optional. For example, if the seller is below standard for this metric, there is no value they can go below for it to further lower their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
    */
    private ?SspMetric_thresholdLowerBound $thresholdLowerBound = null;
    
    /**
     * @var string|null $thresholdMetaData An expression that indicates the inclusive and exclusive characteristics of the upper and lower threshold boundaries.  <br><br>A metric's <b>thresholdLowerBound</b> and <b>thresholdUpperBound</b> values specify the boundary values that define the current standard compliance level (<code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>). The <b>thresholdMetaData</b> value consists of two values separated by a comma, which are bounded by either a parenthesis or a square bracket. A parenthesis indicates the adjacent value is exclusive while a square bracket indicates the adjacent value is inclusive (exclusive values are not included in the range while inclusive values are included). The metadata values are either <code>UPPER</code> or <code>LOWER</code> and these values can be in any order to indicate the characteristics of the metric. <br><br>For example, suppose a seller's level is <code>ABOVE_STANDARD</code>, the lower boundary is <code>200</code>, the upper boundary is <code>300</code>, and the value for this field is <code>(LOWER, UPPER]</code>. This indicates that as long as the value for this metric is an integer from 201 (excluding 200) to 300 (including 300), the metric level is above standard. With this, if the seller wants to get a <code>TOP_RATED</code> rating for this metric, they'll have to increase their value to at least 301.
    */
    private ?string $thresholdMetaData = null;
    
    /**
     * @var SspMetric_thresholdUpperBound|null $thresholdUpperBound Specifies the highest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and the <b>thresholdUpperBound</b> is set to <code>20</code>, having more than 20 rocks in inventory would result in the seller rising a lever, to <code>TOP_RATED</code>. See <code>thresholdMetaData</code> to determine if the upper bound value is inclusive or exclusive.  <br><br>The upper bound value is optional. For example, if the seller is top rated for this metric, there is no value they can go above for it to further raise their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
    */
    private ?SspMetric_thresholdUpperBound $thresholdUpperBound = null;
    
    /**
     * @var SspDataTypeEnum|null $type Indicates the data type of the returned metric. Possible values are: <code>AMOUNT</code>, <code>BOOLEAN</code>, <code>DATE</code>, <code>FRACTION</code>, <code>NUMBER</code>, and <code>STRING</code>.
    */
    private ?SspDataTypeEnum $type = null;
    
    /**
     * @var SspMetric_value|null $value The seller's calculated value, or score, for the metric.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Fraction, or Amount.</span>
    */
    private ?SspMetric_value $value = null;
    
    /**
     * Instantiates a new SspMetric and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SspMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SspMetric {
        return new SspMetric();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'level' => fn(ParseNode $n) => $o->setLevel($n->getEnumValue(StandardsLevelEnum::class)),
            'lookbackEndDate' => fn(ParseNode $n) => $o->setLookbackEndDate($n->getStringValue()),
            'lookbackStartDate' => fn(ParseNode $n) => $o->setLookbackStartDate($n->getStringValue()),
            'metricKey' => fn(ParseNode $n) => $o->setMetricKey($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'thresholdLowerBound' => fn(ParseNode $n) => $o->setThresholdLowerBound($n->getObjectValue([SspMetric_thresholdLowerBound::class, 'createFromDiscriminatorValue'])),
            'thresholdMetaData' => fn(ParseNode $n) => $o->setThresholdMetaData($n->getStringValue()),
            'thresholdUpperBound' => fn(ParseNode $n) => $o->setThresholdUpperBound($n->getObjectValue([SspMetric_thresholdUpperBound::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(SspDataTypeEnum::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([SspMetric_value::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the level property value. The seller level for this metric, which indicates how well the seller is doing in meeting eBay's standards for this metric. Possible values are <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, and <code>BELOW_STANDARD</code>.
     * @return StandardsLevelEnum|null
    */
    public function getLevel(): ?StandardsLevelEnum {
        return $this->level;
    }

    /**
     * Gets the lookbackEndDate property value. The end date and time, in ISO 8601 format, when the seller was evaluated for this metric.
     * @return string|null
    */
    public function getLookbackEndDate(): ?string {
        return $this->lookbackEndDate;
    }

    /**
     * Gets the lookbackStartDate property value. The start date and time, in ISO 8601 format, when the seller was evaluated for this metric.
     * @return string|null
    */
    public function getLookbackStartDate(): ?string {
        return $this->lookbackStartDate;
    }

    /**
     * Gets the metricKey property value. An internal key string specifying a metric. These are short, abbreviated, strings such as <code>MIN_TXN_COUNT</code>.
     * @return string|null
    */
    public function getMetricKey(): ?string {
        return $this->metricKey;
    }

    /**
     * Gets the name property value. A descriptive name for the metric. For example, "Transaction defect rate." This value is localized according to the value of the <b>X-EBAY-C-MARKETPLACE-ID</b> request header.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the thresholdLowerBound property value. Specifies the lowest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and <b>thresholdLowerBound</b> is set to <code>10</code>, having fewer than 10 rocks in inventory would result in the seller dropping a level to <code>BELOW_STANDARD</code>. See <code>thresholdMetaData</code> to determine if the lower bound value is inclusive or exclusive.  <br><br>The lower bound value is optional. For example, if the seller is below standard for this metric, there is no value they can go below for it to further lower their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
     * @return SspMetric_thresholdLowerBound|null
    */
    public function getThresholdLowerBound(): ?SspMetric_thresholdLowerBound {
        return $this->thresholdLowerBound;
    }

    /**
     * Gets the thresholdMetaData property value. An expression that indicates the inclusive and exclusive characteristics of the upper and lower threshold boundaries.  <br><br>A metric's <b>thresholdLowerBound</b> and <b>thresholdUpperBound</b> values specify the boundary values that define the current standard compliance level (<code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>). The <b>thresholdMetaData</b> value consists of two values separated by a comma, which are bounded by either a parenthesis or a square bracket. A parenthesis indicates the adjacent value is exclusive while a square bracket indicates the adjacent value is inclusive (exclusive values are not included in the range while inclusive values are included). The metadata values are either <code>UPPER</code> or <code>LOWER</code> and these values can be in any order to indicate the characteristics of the metric. <br><br>For example, suppose a seller's level is <code>ABOVE_STANDARD</code>, the lower boundary is <code>200</code>, the upper boundary is <code>300</code>, and the value for this field is <code>(LOWER, UPPER]</code>. This indicates that as long as the value for this metric is an integer from 201 (excluding 200) to 300 (including 300), the metric level is above standard. With this, if the seller wants to get a <code>TOP_RATED</code> rating for this metric, they'll have to increase their value to at least 301.
     * @return string|null
    */
    public function getThresholdMetaData(): ?string {
        return $this->thresholdMetaData;
    }

    /**
     * Gets the thresholdUpperBound property value. Specifies the highest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and the <b>thresholdUpperBound</b> is set to <code>20</code>, having more than 20 rocks in inventory would result in the seller rising a lever, to <code>TOP_RATED</code>. See <code>thresholdMetaData</code> to determine if the upper bound value is inclusive or exclusive.  <br><br>The upper bound value is optional. For example, if the seller is top rated for this metric, there is no value they can go above for it to further raise their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
     * @return SspMetric_thresholdUpperBound|null
    */
    public function getThresholdUpperBound(): ?SspMetric_thresholdUpperBound {
        return $this->thresholdUpperBound;
    }

    /**
     * Gets the type property value. Indicates the data type of the returned metric. Possible values are: <code>AMOUNT</code>, <code>BOOLEAN</code>, <code>DATE</code>, <code>FRACTION</code>, <code>NUMBER</code>, and <code>STRING</code>.
     * @return SspDataTypeEnum|null
    */
    public function getType(): ?SspDataTypeEnum {
        return $this->type;
    }

    /**
     * Gets the value property value. The seller's calculated value, or score, for the metric.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Fraction, or Amount.</span>
     * @return SspMetric_value|null
    */
    public function getValue(): ?SspMetric_value {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('level', $this->getLevel());
        $writer->writeStringValue('lookbackEndDate', $this->getLookbackEndDate());
        $writer->writeStringValue('lookbackStartDate', $this->getLookbackStartDate());
        $writer->writeStringValue('metricKey', $this->getMetricKey());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('thresholdLowerBound', $this->getThresholdLowerBound());
        $writer->writeStringValue('thresholdMetaData', $this->getThresholdMetaData());
        $writer->writeObjectValue('thresholdUpperBound', $this->getThresholdUpperBound());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeObjectValue('value', $this->getValue());
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
     * Sets the level property value. The seller level for this metric, which indicates how well the seller is doing in meeting eBay's standards for this metric. Possible values are <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, and <code>BELOW_STANDARD</code>.
     * @param StandardsLevelEnum|null $value Value to set for the level property.
    */
    public function setLevel(?StandardsLevelEnum $value): void {
        $this->level = $value;
    }

    /**
     * Sets the lookbackEndDate property value. The end date and time, in ISO 8601 format, when the seller was evaluated for this metric.
     * @param string|null $value Value to set for the lookbackEndDate property.
    */
    public function setLookbackEndDate(?string $value): void {
        $this->lookbackEndDate = $value;
    }

    /**
     * Sets the lookbackStartDate property value. The start date and time, in ISO 8601 format, when the seller was evaluated for this metric.
     * @param string|null $value Value to set for the lookbackStartDate property.
    */
    public function setLookbackStartDate(?string $value): void {
        $this->lookbackStartDate = $value;
    }

    /**
     * Sets the metricKey property value. An internal key string specifying a metric. These are short, abbreviated, strings such as <code>MIN_TXN_COUNT</code>.
     * @param string|null $value Value to set for the metricKey property.
    */
    public function setMetricKey(?string $value): void {
        $this->metricKey = $value;
    }

    /**
     * Sets the name property value. A descriptive name for the metric. For example, "Transaction defect rate." This value is localized according to the value of the <b>X-EBAY-C-MARKETPLACE-ID</b> request header.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the thresholdLowerBound property value. Specifies the lowest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and <b>thresholdLowerBound</b> is set to <code>10</code>, having fewer than 10 rocks in inventory would result in the seller dropping a level to <code>BELOW_STANDARD</code>. See <code>thresholdMetaData</code> to determine if the lower bound value is inclusive or exclusive.  <br><br>The lower bound value is optional. For example, if the seller is below standard for this metric, there is no value they can go below for it to further lower their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
     * @param SspMetric_thresholdLowerBound|null $value Value to set for the thresholdLowerBound property.
    */
    public function setThresholdLowerBound(?SspMetric_thresholdLowerBound $value): void {
        $this->thresholdLowerBound = $value;
    }

    /**
     * Sets the thresholdMetaData property value. An expression that indicates the inclusive and exclusive characteristics of the upper and lower threshold boundaries.  <br><br>A metric's <b>thresholdLowerBound</b> and <b>thresholdUpperBound</b> values specify the boundary values that define the current standard compliance level (<code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>). The <b>thresholdMetaData</b> value consists of two values separated by a comma, which are bounded by either a parenthesis or a square bracket. A parenthesis indicates the adjacent value is exclusive while a square bracket indicates the adjacent value is inclusive (exclusive values are not included in the range while inclusive values are included). The metadata values are either <code>UPPER</code> or <code>LOWER</code> and these values can be in any order to indicate the characteristics of the metric. <br><br>For example, suppose a seller's level is <code>ABOVE_STANDARD</code>, the lower boundary is <code>200</code>, the upper boundary is <code>300</code>, and the value for this field is <code>(LOWER, UPPER]</code>. This indicates that as long as the value for this metric is an integer from 201 (excluding 200) to 300 (including 300), the metric level is above standard. With this, if the seller wants to get a <code>TOP_RATED</code> rating for this metric, they'll have to increase their value to at least 301.
     * @param string|null $value Value to set for the thresholdMetaData property.
    */
    public function setThresholdMetaData(?string $value): void {
        $this->thresholdMetaData = $value;
    }

    /**
     * Sets the thresholdUpperBound property value. Specifies the highest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and the <b>thresholdUpperBound</b> is set to <code>20</code>, having more than 20 rocks in inventory would result in the seller rising a lever, to <code>TOP_RATED</code>. See <code>thresholdMetaData</code> to determine if the upper bound value is inclusive or exclusive.  <br><br>The upper bound value is optional. For example, if the seller is top rated for this metric, there is no value they can go above for it to further raise their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
     * @param SspMetric_thresholdUpperBound|null $value Value to set for the thresholdUpperBound property.
    */
    public function setThresholdUpperBound(?SspMetric_thresholdUpperBound $value): void {
        $this->thresholdUpperBound = $value;
    }

    /**
     * Sets the type property value. Indicates the data type of the returned metric. Possible values are: <code>AMOUNT</code>, <code>BOOLEAN</code>, <code>DATE</code>, <code>FRACTION</code>, <code>NUMBER</code>, and <code>STRING</code>.
     * @param SspDataTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?SspDataTypeEnum $value): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The seller's calculated value, or score, for the metric.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Fraction, or Amount.</span>
     * @param SspMetric_value|null $value Value to set for the value property.
    */
    public function setValue(?SspMetric_value $value): void {
        $this->value = $value;
    }

}
