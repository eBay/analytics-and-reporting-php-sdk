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
 * This complex data type describes the metric distribution by basis.
*/
class MetricDistribution implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $basis This field returns the basis, or the method, by which the metric rating is calculated.
    */
    private ?string $basis = null;
    
    /**
     * @var array<Distribution>|null $data This field returns a list of name/value pairs, where the <b>name</b> indicates the distribution being rated and the <b>value</b> indicates the count of seller transactions that meet the distribution criteria.
    */
    private ?array $data = null;
    
    /**
     * Instantiates a new MetricDistribution and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetricDistribution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetricDistribution {
        return new MetricDistribution();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the basis property value. This field returns the basis, or the method, by which the metric rating is calculated.
     * @return string|null
    */
    public function getBasis(): ?string {
        return $this->basis;
    }

    /**
     * Gets the data property value. This field returns a list of name/value pairs, where the <b>name</b> indicates the distribution being rated and the <b>value</b> indicates the count of seller transactions that meet the distribution criteria.
     * @return array<Distribution>|null
    */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getStringValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([Distribution::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('basis', $this->getBasis());
        $writer->writeCollectionOfObjectValues('data', $this->getData());
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
     * Sets the basis property value. This field returns the basis, or the method, by which the metric rating is calculated.
     * @param string|null $value Value to set for the basis property.
    */
    public function setBasis(?string $value): void {
        $this->basis = $value;
    }

    /**
     * Sets the data property value. This field returns a list of name/value pairs, where the <b>name</b> indicates the distribution being rated and the <b>value</b> indicates the count of seller transactions that meet the distribution criteria.
     * @param array<Distribution>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

}
