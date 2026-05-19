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
 * This complex type describes the start and end dates of the of the time period over which the associated benchmark is computed.  <br><br>All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
*/
class EvaluationCycle implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $endDate End date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
    */
    private ?string $endDate = null;
    
    /**
     * @var string|null $evaluationDate The ISO-8601 date and time at which the seller was evaluated for this customer service metric rating.
    */
    private ?string $evaluationDate = null;
    
    /**
     * @var string|null $evaluationType This field specifies the transaction <i>lookback period</i> used for the evaluation. <br><br>The <b>evaluation_type</b> value specified in the request is returned in this field. There are two possible values:  <ul><li><code>CURRENT</code> &ndash; A monthly evaluation that occurs on the 20th of every month.</li> <li><code>PROJECTED</code> &ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:EvaluationTypeEnum'>eBay API documentation</a>
    */
    private ?string $evaluationType = null;
    
    /**
     * @var string|null $startDate The start date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
    */
    private ?string $startDate = null;
    
    /**
     * Instantiates a new EvaluationCycle and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluationCycle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluationCycle {
        return new EvaluationCycle();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the endDate property value. End date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     * @return string|null
    */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * Gets the evaluationDate property value. The ISO-8601 date and time at which the seller was evaluated for this customer service metric rating.
     * @return string|null
    */
    public function getEvaluationDate(): ?string {
        return $this->evaluationDate;
    }

    /**
     * Gets the evaluationType property value. This field specifies the transaction <i>lookback period</i> used for the evaluation. <br><br>The <b>evaluation_type</b> value specified in the request is returned in this field. There are two possible values:  <ul><li><code>CURRENT</code> &ndash; A monthly evaluation that occurs on the 20th of every month.</li> <li><code>PROJECTED</code> &ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:EvaluationTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEvaluationType(): ?string {
        return $this->evaluationType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getStringValue()),
            'evaluationDate' => fn(ParseNode $n) => $o->setEvaluationDate($n->getStringValue()),
            'evaluationType' => fn(ParseNode $n) => $o->setEvaluationType($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the startDate property value. The start date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('endDate', $this->getEndDate());
        $writer->writeStringValue('evaluationDate', $this->getEvaluationDate());
        $writer->writeStringValue('evaluationType', $this->getEvaluationType());
        $writer->writeStringValue('startDate', $this->getStartDate());
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
     * Sets the endDate property value. End date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the evaluationDate property value. The ISO-8601 date and time at which the seller was evaluated for this customer service metric rating.
     * @param string|null $value Value to set for the evaluationDate property.
    */
    public function setEvaluationDate(?string $value): void {
        $this->evaluationDate = $value;
    }

    /**
     * Sets the evaluationType property value. This field specifies the transaction <i>lookback period</i> used for the evaluation. <br><br>The <b>evaluation_type</b> value specified in the request is returned in this field. There are two possible values:  <ul><li><code>CURRENT</code> &ndash; A monthly evaluation that occurs on the 20th of every month.</li> <li><code>PROJECTED</code> &ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/api:EvaluationTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the evaluationType property.
    */
    public function setEvaluationType(?string $value): void {
        $this->evaluationType = $value;
    }

    /**
     * Sets the startDate property value. The start date and time of the transaction lookback range. All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-04T07:09:00.000Z</code>
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

}
