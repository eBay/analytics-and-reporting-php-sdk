<?php

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
     * @var Dimension|null $dimension The fields in this complex type define the dimension, or attributes, by which the associated customer service metric and benchmark data is measured.  <br><br>The value of <b>dimensionKey</b> gets set according to the configuration of the input request. The <b>name</b> and <b>value</b> pair further define dimension under the key.
    */
    private ?Dimension $dimension = null;
    
    /**
     * @var array<Metric>|null $metrics This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
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
     * Gets the dimension property value. The fields in this complex type define the dimension, or attributes, by which the associated customer service metric and benchmark data is measured.  <br><br>The value of <b>dimensionKey</b> gets set according to the configuration of the input request. The <b>name</b> and <b>value</b> pair further define dimension under the key.
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
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([Metric::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metrics property value. This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
     * @return array<Metric>|null
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
     * Sets the dimension property value. The fields in this complex type define the dimension, or attributes, by which the associated customer service metric and benchmark data is measured.  <br><br>The value of <b>dimensionKey</b> gets set according to the configuration of the input request. The <b>name</b> and <b>value</b> pair further define dimension under the key.
     * @param Dimension|null $value Value to set for the dimension property.
    */
    public function setDimension(?Dimension $value): void {
        $this->dimension = $value;
    }

    /**
     * Sets the metrics property value. This is a list of <b>Metric</b> elements where each element contains data and information related to the transactions grouped by the associated <b>dimension</b>.
     * @param array<Metric>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
