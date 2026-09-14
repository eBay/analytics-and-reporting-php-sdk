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
 * A complex type that defines the data records returned in the report.
*/
class MetadataRecord implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Value>|null $metadataValues A list of data in a row returned in the traffic report. The data in each of the cells match the labels in headers of the report.
    */
    private ?array $metadataValues = null;
    
    /**
     * @var Value|null $value The value of the key on which the report is based. <br><br>For example, if the key is the listing ID, the value of this container could be: <br><br><code>"value": {<br>&nbsp;&nbsp;"value": "142133954229",<br>&nbsp;&nbsp;"applicable": true<br>}</code>
    */
    private ?Value $value = null;
    
    /**
     * Instantiates a new MetadataRecord and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetadataRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetadataRecord {
        return new MetadataRecord();
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
            'metadataValues' => fn(ParseNode $n) => $o->setMetadataValues($n->getCollectionOfObjectValues([Value::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([Value::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metadataValues property value. A list of data in a row returned in the traffic report. The data in each of the cells match the labels in headers of the report.
     * @return array<Value>|null
    */
    public function getMetadataValues(): ?array {
        return $this->metadataValues;
    }

    /**
     * Gets the value property value. The value of the key on which the report is based. <br><br>For example, if the key is the listing ID, the value of this container could be: <br><br><code>"value": {<br>&nbsp;&nbsp;"value": "142133954229",<br>&nbsp;&nbsp;"applicable": true<br>}</code>
     * @return Value|null
    */
    public function getValue(): ?Value {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('metadataValues', $this->getMetadataValues());
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
     * Sets the metadataValues property value. A list of data in a row returned in the traffic report. The data in each of the cells match the labels in headers of the report.
     * @param array<Value>|null $value Value to set for the metadataValues property.
    */
    public function setMetadataValues(?array $value): void {
        $this->metadataValues = $value;
    }

    /**
     * Sets the value property value. The value of the key on which the report is based. <br><br>For example, if the key is the listing ID, the value of this container could be: <br><br><code>"value": {<br>&nbsp;&nbsp;"value": "142133954229",<br>&nbsp;&nbsp;"applicable": true<br>}</code>
     * @param Value|null $value Value to set for the value property.
    */
    public function setValue(?Value $value): void {
        $this->value = $value;
    }

}
