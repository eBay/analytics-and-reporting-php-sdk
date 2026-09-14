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
 * This complex type defines a the customer service metrics and seller benchmark performance related to a given dimension.
*/
class DimensionMetric implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Dimension|null $dimension This type defines the "dimension," or attributes, against which the associated customer service metric values and benchmark ratings are based.  <br><br>The <b>dimensionKey</b> value is set according to the <b>customer_service_metric_type</b> request parameter and the values in the associated <b>name</b>/<b>value</b> pairs relate to the <b>dimensionKey</b> that's being used to calculate the benchmark rating.
    */
    private ?Dimension $dimension = null;
    
    /**
     * @var array<ApiMetric>|null $metrics This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
    */
    private ?array $metrics = null;
    
    /**
     * Instantiates a new DimensionMetric and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DimensionMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DimensionMetric {
        return new DimensionMetric();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimension property value. This type defines the "dimension," or attributes, against which the associated customer service metric values and benchmark ratings are based.  <br><br>The <b>dimensionKey</b> value is set according to the <b>customer_service_metric_type</b> request parameter and the values in the associated <b>name</b>/<b>value</b> pairs relate to the <b>dimensionKey</b> that's being used to calculate the benchmark rating.
     * @return Dimension|null
    */
    public function getDimension(): ?Dimension {
        return $this->dimension;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimension' => fn(ParseNode $n) => $o->setDimension($n->getObjectValue([Dimension::class, 'createFromDiscriminatorValue'])),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([ApiMetric::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metrics property value. This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
     * @return array<ApiMetric>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dimension', $this->getDimension());
        $writer->writeCollectionOfObjectValues('metrics', $this->getMetrics());
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
     * Sets the dimension property value. This type defines the "dimension," or attributes, against which the associated customer service metric values and benchmark ratings are based.  <br><br>The <b>dimensionKey</b> value is set according to the <b>customer_service_metric_type</b> request parameter and the values in the associated <b>name</b>/<b>value</b> pairs relate to the <b>dimensionKey</b> that's being used to calculate the benchmark rating.
     * @param Dimension|null $value Value to set for the dimension property.
    */
    public function setDimension(?Dimension $value): void {
        $this->dimension = $value;
    }

    /**
     * Sets the metrics property value. This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
     * @param array<ApiMetric>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
