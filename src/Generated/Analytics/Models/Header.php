<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Type that defines the headers for the dimension keys and metrics returned in the report.
*/
class Header implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Definition>|null $dimensionKeys A list of the dimension or metric keys returned in the report. The values for each are is returned in the associated <b>key</b> fields.
    */
    private ?array $dimensionKeys = null;
    
    /**
     * @var array<Definition>|null $metrics The list of metrics returned in the report. The values for each are is returned in the associated <b>key</b> fields.
    */
    private ?array $metrics = null;
    
    /**
     * Instantiates a new Header and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Header
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Header {
        return new Header();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionKeys property value. A list of the dimension or metric keys returned in the report. The values for each are is returned in the associated <b>key</b> fields.
     * @return array<Definition>|null
    */
    public function getDimensionKeys(): ?array {
        return $this->dimensionKeys;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionKeys' => fn(ParseNode $n) => $o->setDimensionKeys($n->getCollectionOfObjectValues([Definition::class, 'createFromDiscriminatorValue'])),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([Definition::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metrics property value. The list of metrics returned in the report. The values for each are is returned in the associated <b>key</b> fields.
     * @return array<Definition>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensionKeys', $this->getDimensionKeys());
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
     * Sets the dimensionKeys property value. A list of the dimension or metric keys returned in the report. The values for each are is returned in the associated <b>key</b> fields.
     * @param array<Definition>|null $value Value to set for the dimensionKeys property.
    */
    public function setDimensionKeys(?array $value): void {
        $this->dimensionKeys = $value;
    }

    /**
     * Sets the metrics property value. The list of metrics returned in the report. The values for each are is returned in the associated <b>key</b> fields.
     * @param array<Definition>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
