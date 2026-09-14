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
 * This type defines the metadata information of the report. This includes the headers and the individual metadata records.
*/
class Metadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MetadataHeader|null $metadataHeader The container that returns the <b>dimensionKeys</b> and <b>metrics</b> headers for the report.
    */
    private ?MetadataHeader $metadataHeader = null;
    
    /**
     * @var array<MetadataRecord>|null $metadataRecords A list of the individual report records.
    */
    private ?array $metadataRecords = null;
    
    /**
     * Instantiates a new Metadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Metadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Metadata {
        return new Metadata();
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
            'metadataHeader' => fn(ParseNode $n) => $o->setMetadataHeader($n->getObjectValue([MetadataHeader::class, 'createFromDiscriminatorValue'])),
            'metadataRecords' => fn(ParseNode $n) => $o->setMetadataRecords($n->getCollectionOfObjectValues([MetadataRecord::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metadataHeader property value. The container that returns the <b>dimensionKeys</b> and <b>metrics</b> headers for the report.
     * @return MetadataHeader|null
    */
    public function getMetadataHeader(): ?MetadataHeader {
        return $this->metadataHeader;
    }

    /**
     * Gets the metadataRecords property value. A list of the individual report records.
     * @return array<MetadataRecord>|null
    */
    public function getMetadataRecords(): ?array {
        return $this->metadataRecords;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('metadataHeader', $this->getMetadataHeader());
        $writer->writeCollectionOfObjectValues('metadataRecords', $this->getMetadataRecords());
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
     * Sets the metadataHeader property value. The container that returns the <b>dimensionKeys</b> and <b>metrics</b> headers for the report.
     * @param MetadataHeader|null $value Value to set for the metadataHeader property.
    */
    public function setMetadataHeader(?MetadataHeader $value): void {
        $this->metadataHeader = $value;
    }

    /**
     * Sets the metadataRecords property value. A list of the individual report records.
     * @param array<MetadataRecord>|null $value Value to set for the metadataRecords property.
    */
    public function setMetadataRecords(?array $value): void {
        $this->metadataRecords = $value;
    }

}
