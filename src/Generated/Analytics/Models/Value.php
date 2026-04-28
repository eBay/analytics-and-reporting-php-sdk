<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type that contains a value, plus the veracity of that value.
*/
class Value implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $applicable If set to <code>true</code>, this flag indicates the value in the <b>value</b> field is valid as computed.  <br><br>A value of <code>false</code> indicates one or more of the values used to calculate the value was invalid. The occurrence of this is a rare, however consider this case: suppose a buyer navigates to a View Item page at 11:59 pm (the end of the day) and purchases the item at 12:05am the next day. In this case, the item would have been purchased with <code>0</code> views for the day.
    */
    private ?bool $applicable = null;
    
    /**
     * @var Value_value|null $value The value of the report data.
    */
    private ?Value_value $value = null;
    
    /**
     * Instantiates a new Value and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Value
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Value {
        return new Value();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the applicable property value. If set to <code>true</code>, this flag indicates the value in the <b>value</b> field is valid as computed.  <br><br>A value of <code>false</code> indicates one or more of the values used to calculate the value was invalid. The occurrence of this is a rare, however consider this case: suppose a buyer navigates to a View Item page at 11:59 pm (the end of the day) and purchases the item at 12:05am the next day. In this case, the item would have been purchased with <code>0</code> views for the day.
     * @return bool|null
    */
    public function getApplicable(): ?bool {
        return $this->applicable;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicable' => fn(ParseNode $n) => $o->setApplicable($n->getBooleanValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([Value_value::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the value property value. The value of the report data.
     * @return Value_value|null
    */
    public function getValue(): ?Value_value {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('applicable', $this->getApplicable());
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
     * Sets the applicable property value. If set to <code>true</code>, this flag indicates the value in the <b>value</b> field is valid as computed.  <br><br>A value of <code>false</code> indicates one or more of the values used to calculate the value was invalid. The occurrence of this is a rare, however consider this case: suppose a buyer navigates to a View Item page at 11:59 pm (the end of the day) and purchases the item at 12:05am the next day. In this case, the item would have been purchased with <code>0</code> views for the day.
     * @param bool|null $value Value to set for the applicable property.
    */
    public function setApplicable(?bool $value): void {
        $this->applicable = $value;
    }

    /**
     * Sets the value property value. The value of the report data.
     * @param Value_value|null $value Value to set for the value property.
    */
    public function setValue(?Value_value $value): void {
        $this->value = $value;
    }

}
