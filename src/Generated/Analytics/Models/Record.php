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
 * Type that defines the fields of the individual record of the report.
*/
class Record implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Value>|null $dimensionValues A list where each element contains either the string <code>DAY</code> (if the <b>dimension</b> is <code>DAY</code>), or the listing ID for which the record's metric data is computed. A second array member, <b>applicable</b>, is always <code>true</code> for dimension values.
    */
    private ?array $dimensionValues = null;
    
    /**
     * @var array<Value>|null $metricValues A list where each element contains a <b>value</b> field that indicates the record's value for the metric. Each element also contains an <b>applicable</b> field that indicates the veracity of the computed <b>value</b>.   <br><br>Note that there are no metric names or IDs associated with the values returned in this array. The metadata to which these values relate can be found in the key values in <b>metadataKeys</b>. The order of the metric values in this array equals the order of the key values in <b>metadataHeader</b>.
    */
    private ?array $metricValues = null;
    
    /**
     * Instantiates a new Record and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Record
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Record {
        return new Record();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionValues property value. A list where each element contains either the string <code>DAY</code> (if the <b>dimension</b> is <code>DAY</code>), or the listing ID for which the record's metric data is computed. A second array member, <b>applicable</b>, is always <code>true</code> for dimension values.
     * @return array<Value>|null
    */
    public function getDimensionValues(): ?array {
        return $this->dimensionValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionValues' => fn(ParseNode $n) => $o->setDimensionValues($n->getCollectionOfObjectValues([Value::class, 'createFromDiscriminatorValue'])),
            'metricValues' => fn(ParseNode $n) => $o->setMetricValues($n->getCollectionOfObjectValues([Value::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metricValues property value. A list where each element contains a <b>value</b> field that indicates the record's value for the metric. Each element also contains an <b>applicable</b> field that indicates the veracity of the computed <b>value</b>.   <br><br>Note that there are no metric names or IDs associated with the values returned in this array. The metadata to which these values relate can be found in the key values in <b>metadataKeys</b>. The order of the metric values in this array equals the order of the key values in <b>metadataHeader</b>.
     * @return array<Value>|null
    */
    public function getMetricValues(): ?array {
        return $this->metricValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensionValues', $this->getDimensionValues());
        $writer->writeCollectionOfObjectValues('metricValues', $this->getMetricValues());
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
     * Sets the dimensionValues property value. A list where each element contains either the string <code>DAY</code> (if the <b>dimension</b> is <code>DAY</code>), or the listing ID for which the record's metric data is computed. A second array member, <b>applicable</b>, is always <code>true</code> for dimension values.
     * @param array<Value>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value): void {
        $this->dimensionValues = $value;
    }

    /**
     * Sets the metricValues property value. A list where each element contains a <b>value</b> field that indicates the record's value for the metric. Each element also contains an <b>applicable</b> field that indicates the veracity of the computed <b>value</b>.   <br><br>Note that there are no metric names or IDs associated with the values returned in this array. The metadata to which these values relate can be found in the key values in <b>metadataKeys</b>. The order of the metric values in this array equals the order of the key values in <b>metadataHeader</b>.
     * @param array<Value>|null $value Value to set for the metricValues property.
    */
    public function setMetricValues(?array $value): void {
        $this->metricValues = $value;
    }

}
