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
 * A complex type that describes a program cycle.
*/
class Cycle implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cycleType The cycle type, either <code>CURRENT</code> or <code>PROJECTED</code>. <br><br><code>CURRENT</code> means the profile's metrics values are from the most recent official eBay  monthly standards evaluation. <code>PROJECTED</code> means the profile values were determined when the profile was requested. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay API documentation</a>
    */
    private ?string $cycleType = null;
    
    /**
     * @var string|null $evaluationDate The date and time at which the standard compliance values were determined for the profile.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
    */
    private ?string $evaluationDate = null;
    
    /**
     * @var string|null $evaluationMonth The month in which the currently effective seller level was computed.  <br><br>The value is always formatted as <code>YYYY-MM</code>. If the cycle is <code>CURRENT</code>, this value is the month and year the of the last eBay compliance evaluation. If this is for a <code>PROJECTED</code> cycle, the value is the month and year of the next scheduled evaluation. Because eBay does official evaluations around the 20th of each month, a <code>PROJECTED</code> value may indicate either the current or the next month.
    */
    private ?string $evaluationMonth = null;
    
    /**
     * Instantiates a new Cycle and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Cycle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Cycle {
        return new Cycle();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cycleType property value. The cycle type, either <code>CURRENT</code> or <code>PROJECTED</code>. <br><br><code>CURRENT</code> means the profile's metrics values are from the most recent official eBay  monthly standards evaluation. <code>PROJECTED</code> means the profile values were determined when the profile was requested. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCycleType(): ?string {
        return $this->cycleType;
    }

    /**
     * Gets the evaluationDate property value. The date and time at which the standard compliance values were determined for the profile.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
     * @return string|null
    */
    public function getEvaluationDate(): ?string {
        return $this->evaluationDate;
    }

    /**
     * Gets the evaluationMonth property value. The month in which the currently effective seller level was computed.  <br><br>The value is always formatted as <code>YYYY-MM</code>. If the cycle is <code>CURRENT</code>, this value is the month and year the of the last eBay compliance evaluation. If this is for a <code>PROJECTED</code> cycle, the value is the month and year of the next scheduled evaluation. Because eBay does official evaluations around the 20th of each month, a <code>PROJECTED</code> value may indicate either the current or the next month.
     * @return string|null
    */
    public function getEvaluationMonth(): ?string {
        return $this->evaluationMonth;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cycleType' => fn(ParseNode $n) => $o->setCycleType($n->getStringValue()),
            'evaluationDate' => fn(ParseNode $n) => $o->setEvaluationDate($n->getStringValue()),
            'evaluationMonth' => fn(ParseNode $n) => $o->setEvaluationMonth($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cycleType', $this->getCycleType());
        $writer->writeStringValue('evaluationDate', $this->getEvaluationDate());
        $writer->writeStringValue('evaluationMonth', $this->getEvaluationMonth());
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
     * Sets the cycleType property value. The cycle type, either <code>CURRENT</code> or <code>PROJECTED</code>. <br><br><code>CURRENT</code> means the profile's metrics values are from the most recent official eBay  monthly standards evaluation. <code>PROJECTED</code> means the profile values were determined when the profile was requested. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the cycleType property.
    */
    public function setCycleType(?string $value): void {
        $this->cycleType = $value;
    }

    /**
     * Sets the evaluationDate property value. The date and time at which the standard compliance values were determined for the profile.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
     * @param string|null $value Value to set for the evaluationDate property.
    */
    public function setEvaluationDate(?string $value): void {
        $this->evaluationDate = $value;
    }

    /**
     * Sets the evaluationMonth property value. The month in which the currently effective seller level was computed.  <br><br>The value is always formatted as <code>YYYY-MM</code>. If the cycle is <code>CURRENT</code>, this value is the month and year the of the last eBay compliance evaluation. If this is for a <code>PROJECTED</code> cycle, the value is the month and year of the next scheduled evaluation. Because eBay does official evaluations around the 20th of each month, a <code>PROJECTED</code> value may indicate either the current or the next month.
     * @param string|null $value Value to set for the evaluationMonth property.
    */
    public function setEvaluationMonth(?string $value): void {
        $this->evaluationMonth = $value;
    }

}
