<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Type that defines the metadata header fields.
*/
class MetadataHeader implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $key The key value used for the report. <br><br>For example: <code>"key": "LISTING_ID"</code>
    */
    private ?string $key = null;
    
    /**
     * @var array<Definition>|null $metadataKeys The list of dimension key values used for the report header. Each list element contains the key name, its data type, and its localized name.  <br><br>For example: <p><code>"metadataKeys": [<br>&nbsp;&nbsp;"key": "LISTING_TITLE",<br>&nbsp;&nbsp;"localizedName": "Listing title",<br>&nbsp;&nbsp;"dataType": "STRING"</code></p>
    */
    private ?array $metadataKeys = null;
    
    /**
     * Instantiates a new MetadataHeader and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetadataHeader
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetadataHeader {
        return new MetadataHeader();
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
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            'metadataKeys' => fn(ParseNode $n) => $o->setMetadataKeys($n->getCollectionOfObjectValues([Definition::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the key property value. The key value used for the report. <br><br>For example: <code>"key": "LISTING_ID"</code>
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the metadataKeys property value. The list of dimension key values used for the report header. Each list element contains the key name, its data type, and its localized name.  <br><br>For example: <p><code>"metadataKeys": [<br>&nbsp;&nbsp;"key": "LISTING_TITLE",<br>&nbsp;&nbsp;"localizedName": "Listing title",<br>&nbsp;&nbsp;"dataType": "STRING"</code></p>
     * @return array<Definition>|null
    */
    public function getMetadataKeys(): ?array {
        return $this->metadataKeys;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeCollectionOfObjectValues('metadataKeys', $this->getMetadataKeys());
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
     * Sets the key property value. The key value used for the report. <br><br>For example: <code>"key": "LISTING_ID"</code>
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->key = $value;
    }

    /**
     * Sets the metadataKeys property value. The list of dimension key values used for the report header. Each list element contains the key name, its data type, and its localized name.  <br><br>For example: <p><code>"metadataKeys": [<br>&nbsp;&nbsp;"key": "LISTING_TITLE",<br>&nbsp;&nbsp;"localizedName": "Listing title",<br>&nbsp;&nbsp;"dataType": "STRING"</code></p>
     * @param array<Definition>|null $value Value to set for the metadataKeys property.
    */
    public function setMetadataKeys(?array $value): void {
        $this->metadataKeys = $value;
    }

}
