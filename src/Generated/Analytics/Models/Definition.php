<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type that defines a dimension key and metrics in a traffic report.
*/
class Definition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $dataType Indicates the data type of the returned dimension. For example, if the <b>dimension</b> is <code>day</code>, the data type is <code>DATE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:DataTypeEnum'>eBay API documentation</a>
    */
    private ?string $dataType = null;
    
    /**
     * @var string|null $key The value the <b>dimension</b> or <b>metric</b> parameter as submitted in the request.
    */
    private ?string $key = null;
    
    /**
     * @var string|null $localizedName The localized name of the metric or dimension (translated into the language specified in the <b>Accept-Language</b> HTTP request header). For example, if <b>Accept-Language</b> is set to <code>de-DE</code>, the value "day" in the <b>dimension</b> container is returned as "tag", and a metric of TRANSACTION is returned as "Transaktionsanzahl".
    */
    private ?string $localizedName = null;
    
    /**
     * Instantiates a new Definition and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Definition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Definition {
        return new Definition();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. Indicates the data type of the returned dimension. For example, if the <b>dimension</b> is <code>day</code>, the data type is <code>DATE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:DataTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDataType(): ?string {
        return $this->dataType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'localizedName' => fn(ParseNode $n) => $o->setLocalizedName($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The value the <b>dimension</b> or <b>metric</b> parameter as submitted in the request.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the localizedName property value. The localized name of the metric or dimension (translated into the language specified in the <b>Accept-Language</b> HTTP request header). For example, if <b>Accept-Language</b> is set to <code>de-DE</code>, the value "day" in the <b>dimension</b> container is returned as "tag", and a metric of TRANSACTION is returned as "Transaktionsanzahl".
     * @return string|null
    */
    public function getLocalizedName(): ?string {
        return $this->localizedName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataType', $this->getDataType());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('localizedName', $this->getLocalizedName());
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
     * Sets the dataType property value. Indicates the data type of the returned dimension. For example, if the <b>dimension</b> is <code>day</code>, the data type is <code>DATE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:DataTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->dataType = $value;
    }

    /**
     * Sets the key property value. The value the <b>dimension</b> or <b>metric</b> parameter as submitted in the request.
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the localizedName property value. The localized name of the metric or dimension (translated into the language specified in the <b>Accept-Language</b> HTTP request header). For example, if <b>Accept-Language</b> is set to <code>de-DE</code>, the value "day" in the <b>dimension</b> container is returned as "tag", and a metric of TRANSACTION is returned as "Transaktionsanzahl".
     * @param string|null $value Value to set for the localizedName property.
    */
    public function setLocalizedName(?string $value): void {
        $this->localizedName = $value;
    }

}
