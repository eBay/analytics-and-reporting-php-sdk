<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The response container for a list of seller profiles.
*/
class FindSellerStandardsProfilesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<StandardsProfile>|null $standardsProfiles A list of the seller's standards profiles.  <br><br>A "standards profile" is a set of eBay seller standards categories and the values related to the associated seller.  <br><br>Profiles are distinguished by a combination of cycle and program values. The "program" value specifies the region to which the data is from. The "cycle" value specifies whether the values were determined just now, or if the values are from the last official eBay seller standards evaluation.
    */
    private ?array $standardsProfiles = null;
    
    /**
     * Instantiates a new FindSellerStandardsProfilesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindSellerStandardsProfilesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindSellerStandardsProfilesResponse {
        return new FindSellerStandardsProfilesResponse();
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
            'standardsProfiles' => fn(ParseNode $n) => $o->setStandardsProfiles($n->getCollectionOfObjectValues([StandardsProfile::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the standardsProfiles property value. A list of the seller's standards profiles.  <br><br>A "standards profile" is a set of eBay seller standards categories and the values related to the associated seller.  <br><br>Profiles are distinguished by a combination of cycle and program values. The "program" value specifies the region to which the data is from. The "cycle" value specifies whether the values were determined just now, or if the values are from the last official eBay seller standards evaluation.
     * @return array<StandardsProfile>|null
    */
    public function getStandardsProfiles(): ?array {
        return $this->standardsProfiles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('standardsProfiles', $this->getStandardsProfiles());
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
     * Sets the standardsProfiles property value. A list of the seller's standards profiles.  <br><br>A "standards profile" is a set of eBay seller standards categories and the values related to the associated seller.  <br><br>Profiles are distinguished by a combination of cycle and program values. The "program" value specifies the region to which the data is from. The "cycle" value specifies whether the values were determined just now, or if the values are from the last official eBay seller standards evaluation.
     * @param array<StandardsProfile>|null $value Value to set for the standardsProfiles property.
    */
    public function setStandardsProfiles(?array $value): void {
        $this->standardsProfiles = $value;
    }

}
