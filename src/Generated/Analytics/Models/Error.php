<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Type that defines the fields that can be returned in an error.
*/
class Error implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category Identifies whether the error was in the REQUEST or happened when running the APPLICATION.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $domain The primary system where the error occurred. This is relevant for application errors. For Analytics errors, it always has the value <code>API_ANALYTICS</code>.
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $errorId A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. Traffic report error IDs range from 50001 to 50500.
    */
    private ?int $errorId = null;
    
    /**
     * @var array<string>|null $inputRefIds Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For JSON, use <i>JSONPath</i> notation.
    */
    private ?array $inputRefIds = null;
    
    /**
     * @var string|null $longMessage A more detailed explanation of the error than given in the <code>message</code> error field.
    */
    private ?string $longMessage = null;
    
    /**
     * @var string|null $message Information on how to correct the problem, in the end user's terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user's requested locale.
    */
    private ?string $message = null;
    
    /**
     * @var array<string>|null $outputRefIds Identifies specific response elements associated with the error, if any. Path format is the same as <code>inputRefId</code>.
    */
    private ?array $outputRefIds = null;
    
    /**
     * @var array<ErrorParameter>|null $parameters This optional list of name/value pairs that contain context-specific <code>ErrorParameter</code> objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each <code>ErrorParameter</code> object consists of two fields, a <code>name</code> and a <code>value</code>.
    */
    private ?array $parameters = null;
    
    /**
     * @var string|null $subdomain If present, indicates which subsystem in which the error occurred.
    */
    private ?string $subdomain = null;
    
    /**
     * Instantiates a new Error and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Error {
        return new Error();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. Identifies whether the error was in the REQUEST or happened when running the APPLICATION.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the domain property value. The primary system where the error occurred. This is relevant for application errors. For Analytics errors, it always has the value <code>API_ANALYTICS</code>.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the errorId property value. A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. Traffic report error IDs range from 50001 to 50500.
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
     * Gets the inputRefIds property value. Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For JSON, use <i>JSONPath</i> notation.
     * @return array<string>|null
    */
    public function getInputRefIds(): ?array {
        return $this->inputRefIds;
    }

    /**
     * Gets the longMessage property value. A more detailed explanation of the error than given in the <code>message</code> error field.
     * @return string|null
    */
    public function getLongMessage(): ?string {
        return $this->longMessage;
    }

    /**
     * Gets the message property value. Information on how to correct the problem, in the end user's terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user's requested locale.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the outputRefIds property value. Identifies specific response elements associated with the error, if any. Path format is the same as <code>inputRefId</code>.
     * @return array<string>|null
    */
    public function getOutputRefIds(): ?array {
        return $this->outputRefIds;
    }

    /**
     * Gets the parameters property value. This optional list of name/value pairs that contain context-specific <code>ErrorParameter</code> objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each <code>ErrorParameter</code> object consists of two fields, a <code>name</code> and a <code>value</code>.
     * @return array<ErrorParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the subdomain property value. If present, indicates which subsystem in which the error occurred.
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
     * Sets the category property value. Identifies whether the error was in the REQUEST or happened when running the APPLICATION.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the domain property value. The primary system where the error occurred. This is relevant for application errors. For Analytics errors, it always has the value <code>API_ANALYTICS</code>.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the errorId property value. A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. Traffic report error IDs range from 50001 to 50500.
     * @param int|null $value Value to set for the errorId property.
    */
    public function setErrorId(?int $value): void {
        $this->errorId = $value;
    }

    /**
     * Sets the inputRefIds property value. Identifies specific request elements associated with the error, if any. inputRefId's response is format specific. For JSON, use <i>JSONPath</i> notation.
     * @param array<string>|null $value Value to set for the inputRefIds property.
    */
    public function setInputRefIds(?array $value): void {
        $this->inputRefIds = $value;
    }

    /**
     * Sets the longMessage property value. A more detailed explanation of the error than given in the <code>message</code> error field.
     * @param string|null $value Value to set for the longMessage property.
    */
    public function setLongMessage(?string $value): void {
        $this->longMessage = $value;
    }

    /**
     * Sets the message property value. Information on how to correct the problem, in the end user's terms and language where applicable. Its value is at most 50 characters long. If applicable, the value is localized in the end user's requested locale.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the outputRefIds property value. Identifies specific response elements associated with the error, if any. Path format is the same as <code>inputRefId</code>.
     * @param array<string>|null $value Value to set for the outputRefIds property.
    */
    public function setOutputRefIds(?array $value): void {
        $this->outputRefIds = $value;
    }

    /**
     * Sets the parameters property value. This optional list of name/value pairs that contain context-specific <code>ErrorParameter</code> objects, with each item in the list being a parameter (or input field name) that caused an error condition. Each <code>ErrorParameter</code> object consists of two fields, a <code>name</code> and a <code>value</code>.
     * @param array<ErrorParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->parameters = $value;
    }

    /**
     * Sets the subdomain property value. If present, indicates which subsystem in which the error occurred.
     * @param string|null $value Value to set for the subdomain property.
    */
    public function setSubdomain(?string $value): void {
        $this->subdomain = $value;
    }

}
