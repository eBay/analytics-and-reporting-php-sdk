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
 * This complex type defines the fields that comprise the benchmark against which the seller's performance is compared. The comparison determines the seller's rating for the metric.
*/
class BenchmarkMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $average This field returns the average value for the group, as defined by the specified <b>basis</b>.  <br><br>When the benchmark <b>basis</b> is set to <code>PEER_BENCHMARK</code>, the value returned in this field is the benchmark value to which the seller's metric <b>value</b> is compared to determine the seller's rating for the customer service metric.
    */
    private ?string $average = null;
    
    /**
     * Instantiates a new BenchmarkMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BenchmarkMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BenchmarkMetadata {
        return new BenchmarkMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the average property value. This field returns the average value for the group, as defined by the specified <b>basis</b>.  <br><br>When the benchmark <b>basis</b> is set to <code>PEER_BENCHMARK</code>, the value returned in this field is the benchmark value to which the seller's metric <b>value</b> is compared to determine the seller's rating for the customer service metric.
     * @return string|null
    */
    public function getAverage(): ?string {
        return $this->average;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'average' => fn(ParseNode $n) => $o->setAverage($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('average', $this->getAverage());
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
     * Sets the average property value. This field returns the average value for the group, as defined by the specified <b>basis</b>.  <br><br>When the benchmark <b>basis</b> is set to <code>PEER_BENCHMARK</code>, the value returned in this field is the benchmark value to which the seller's metric <b>value</b> is compared to determine the seller's rating for the customer service metric.
     * @param string|null $value Value to set for the average property.
    */
    public function setAverage(?string $value): void {
        $this->average = $value;
    }

}
