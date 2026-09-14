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
 * Specifies the highest number <b>value</b> can be and still qualify for the currently assigned seller level.  <br><br>For example, if a seller is assigned the level <code>ABOVE_STANDARD</code> for the <b>ROCKS_INVENTORY</b> metric, and the <b>thresholdUpperBound</b> is set to <code>20</code>, having more than 20 rocks in inventory would result in the seller rising a lever, to <code>TOP_RATED</code>. See <code>thresholdMetaData</code> to determine if the upper bound value is inclusive or exclusive.  <br><br>The upper bound value is optional. For example, if the seller is top rated for this metric, there is no value they can go above for it to further raise their compliance level. Note that each program can have different metric-threshold levels.<br><br><span class="tablenote"><b>Note:</b> Depending on the metric being returned, this field can be returned as an Integer, Boolean, Amount, Fraction, or Double.</span>
*/
class SspMetric_thresholdUpperBound implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new SspMetric_thresholdUpperBound and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SspMetric_thresholdUpperBound
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SspMetric_thresholdUpperBound {
        return new SspMetric_thresholdUpperBound();
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
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
