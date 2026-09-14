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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An instance of an error or warning as defined by the COS/ETS error handling standard.
*/
class ErrorDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category The error's type, with allowed values APPLICATION, BUSINESS, or REQUEST
    */
    private ?string $category = null;
    
    /**
     * @var string|null $domain The domain your service/application is in
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $errorId uniquely identifying the error within its Domain.
    */
    private ?int $errorId = null;
    
    /**
     * @var array<string>|null $inputRefIds Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For XML, use XPath notation. For JSON, use JSONPath notation.
    */
    private ?array $inputRefIds = null;
    
    /**
     * @var string|null $longMessage An expanded version of message that SHOULD be limited to about 100-200 characters.
    */
    private ?string $longMessage = null;
    
    /**
     * @var string|null $message A device agnostic message that is end user and app developer friendly. It should explain what the error or warning is, and how it can be fixed (in a general sense). The value MUST be limited to 50 or fewer characters. If applicable, it must also be localized in the end user's requested locale. Refer to Section 6, Error Message Content and Localization.
    */
    private ?string $message = null;
    
    /**
     * @var array<string>|null $outputRefIds Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId.
    */
    private ?array $outputRefIds = null;
    
    /**
     * @var array<ErrorParameter>|null $parameters Used to specify information relevant to the end user/client.
    */
    private ?array $parameters = null;
    
    /**
     * @var string|null $subdomain Name of the subsystem or subdivision of the domain
    */
    private ?string $subdomain = null;
    
    /**
     * Instantiates a new ErrorDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ErrorDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ErrorDetail {
        return new ErrorDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The error's type, with allowed values APPLICATION, BUSINESS, or REQUEST
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the domain property value. The domain your service/application is in
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the errorId property value. uniquely identifying the error within its Domain.
     * @return int|null
    */
    public function getErrorId(): ?int {
        return $this->errorId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'errorId' => fn(ParseNode $n) => $o->setErrorId($n->getIntegerValue()),
            'inputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInputRefIds($val);
            },
            'longMessage' => fn(ParseNode $n) => $o->setLongMessage($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'outputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOutputRefIds($val);
            },
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([ErrorParameter::class, 'createFromDiscriminatorValue'])),
            'subdomain' => fn(ParseNode $n) => $o->setSubdomain($n->getStringValue()),
        ];
    }

    /**
     * Gets the inputRefIds property value. Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For XML, use XPath notation. For JSON, use JSONPath notation.
     * @return array<string>|null
    */
    public function getInputRefIds(): ?array {
        return $this->inputRefIds;
    }

    /**
     * Gets the longMessage property value. An expanded version of message that SHOULD be limited to about 100-200 characters.
     * @return string|null
    */
    public function getLongMessage(): ?string {
        return $this->longMessage;
    }

    /**
     * Gets the message property value. A device agnostic message that is end user and app developer friendly. It should explain what the error or warning is, and how it can be fixed (in a general sense). The value MUST be limited to 50 or fewer characters. If applicable, it must also be localized in the end user's requested locale. Refer to Section 6, Error Message Content and Localization.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the outputRefIds property value. Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId.
     * @return array<string>|null
    */
    public function getOutputRefIds(): ?array {
        return $this->outputRefIds;
    }

    /**
     * Gets the parameters property value. Used to specify information relevant to the end user/client.
     * @return array<ErrorParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the subdomain property value. Name of the subsystem or subdivision of the domain
     * @return string|null
    */
    public function getSubdomain(): ?string {
        return $this->subdomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeIntegerValue('errorId', $this->getErrorId());
        $writer->writeCollectionOfPrimitiveValues('inputRefIds', $this->getInputRefIds());
        $writer->writeStringValue('longMessage', $this->getLongMessage());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeCollectionOfPrimitiveValues('outputRefIds', $this->getOutputRefIds());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeStringValue('subdomain', $this->getSubdomain());
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
     * Sets the category property value. The error's type, with allowed values APPLICATION, BUSINESS, or REQUEST
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the domain property value. The domain your service/application is in
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the errorId property value. uniquely identifying the error within its Domain.
     * @param int|null $value Value to set for the errorId property.
    */
    public function setErrorId(?int $value): void {
        $this->errorId = $value;
    }

    /**
     * Sets the inputRefIds property value. Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For XML, use XPath notation. For JSON, use JSONPath notation.
     * @param array<string>|null $value Value to set for the inputRefIds property.
    */
    public function setInputRefIds(?array $value): void {
        $this->inputRefIds = $value;
    }

    /**
     * Sets the longMessage property value. An expanded version of message that SHOULD be limited to about 100-200 characters.
     * @param string|null $value Value to set for the longMessage property.
    */
    public function setLongMessage(?string $value): void {
        $this->longMessage = $value;
    }

    /**
     * Sets the message property value. A device agnostic message that is end user and app developer friendly. It should explain what the error or warning is, and how it can be fixed (in a general sense). The value MUST be limited to 50 or fewer characters. If applicable, it must also be localized in the end user's requested locale. Refer to Section 6, Error Message Content and Localization.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the outputRefIds property value. Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId.
     * @param array<string>|null $value Value to set for the outputRefIds property.
    */
    public function setOutputRefIds(?array $value): void {
        $this->outputRefIds = $value;
    }

    /**
     * Sets the parameters property value. Used to specify information relevant to the end user/client.
     * @param array<ErrorParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->parameters = $value;
    }

    /**
     * Sets the subdomain property value. Name of the subsystem or subdivision of the domain
     * @param string|null $value Value to set for the subdomain property.
    */
    public function setSubdomain(?string $value): void {
        $this->subdomain = $value;
    }

}
