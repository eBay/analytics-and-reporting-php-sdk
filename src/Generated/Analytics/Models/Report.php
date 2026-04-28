<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The complex type that defines that defines the report.
*/
class Report implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Metadata>|null $dimensionMetadata A complex type containing the header of the report and the type of data containted in the rows of the report.
    */
    private ?array $dimensionMetadata = null;
    
    /**
     * @var string|null $endDate   <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock.  <br><br>If you specify an end date that is beyond the <a href="#response.lastUpdatedDate">lastUpdatedDate</a> value, eBay returns a report that contains data only up to the lastUpdateDate date. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
    */
    private ?string $endDate = null;
    
    /**
     * @var Header|null $header Type that defines the headers for the dimension keys and metrics returned in the report.
    */
    private ?Header $header = null;
    
    /**
     * @var string|null $lastUpdatedDate The date and time, in ISO 8601 format, that indicates the last time the data returned in the report was updated.
    */
    private ?string $lastUpdatedDate = null;
    
    /**
     * @var array<Record>|null $records A complex type containing the individual data records for the traffic report.
    */
    private ?array $records = null;
    
    /**
     * @var string|null $startDate The start date of the date range used to calculate the report, in ISO 8601 format.
    */
    private ?string $startDate = null;
    
    /**
     * @var array<Error>|null $warnings An array of any process errors or warnings that were generated during the processing of the call processing.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new Report and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Report
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Report {
        return new Report();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionMetadata property value. A complex type containing the header of the report and the type of data containted in the rows of the report.
     * @return array<Metadata>|null
    */
    public function getDimensionMetadata(): ?array {
        return $this->dimensionMetadata;
    }

    /**
     * Gets the endDate property value.   <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock.  <br><br>If you specify an end date that is beyond the <a href="#response.lastUpdatedDate">lastUpdatedDate</a> value, eBay returns a report that contains data only up to the lastUpdateDate date. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @return string|null
    */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionMetadata' => fn(ParseNode $n) => $o->setDimensionMetadata($n->getCollectionOfObjectValues([Metadata::class, 'createFromDiscriminatorValue'])),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getStringValue()),
            'header' => fn(ParseNode $n) => $o->setHeader($n->getObjectValue([Header::class, 'createFromDiscriminatorValue'])),
            'lastUpdatedDate' => fn(ParseNode $n) => $o->setLastUpdatedDate($n->getStringValue()),
            'records' => fn(ParseNode $n) => $o->setRecords($n->getCollectionOfObjectValues([Record::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the header property value. Type that defines the headers for the dimension keys and metrics returned in the report.
     * @return Header|null
    */
    public function getHeader(): ?Header {
        return $this->header;
    }

    /**
     * Gets the lastUpdatedDate property value. The date and time, in ISO 8601 format, that indicates the last time the data returned in the report was updated.
     * @return string|null
    */
    public function getLastUpdatedDate(): ?string {
        return $this->lastUpdatedDate;
    }

    /**
     * Gets the records property value. A complex type containing the individual data records for the traffic report.
     * @return array<Record>|null
    */
    public function getRecords(): ?array {
        return $this->records;
    }

    /**
     * Gets the startDate property value. The start date of the date range used to calculate the report, in ISO 8601 format.
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Gets the warnings property value. An array of any process errors or warnings that were generated during the processing of the call processing.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensionMetadata', $this->getDimensionMetadata());
        $writer->writeStringValue('endDate', $this->getEndDate());
        $writer->writeObjectValue('header', $this->getHeader());
        $writer->writeStringValue('lastUpdatedDate', $this->getLastUpdatedDate());
        $writer->writeCollectionOfObjectValues('records', $this->getRecords());
        $writer->writeStringValue('startDate', $this->getStartDate());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the dimensionMetadata property value. A complex type containing the header of the report and the type of data containted in the rows of the report.
     * @param array<Metadata>|null $value Value to set for the dimensionMetadata property.
    */
    public function setDimensionMetadata(?array $value): void {
        $this->dimensionMetadata = $value;
    }

    /**
     * Sets the endDate property value.   <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" target="_blank">ISO 8601</a> string, which is based on the 24-hour Universal Coordinated Time (UTC) clock.  <br><br>If you specify an end date that is beyond the <a href="#response.lastUpdatedDate">lastUpdatedDate</a> value, eBay returns a report that contains data only up to the lastUpdateDate date. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the header property value. Type that defines the headers for the dimension keys and metrics returned in the report.
     * @param Header|null $value Value to set for the header property.
    */
    public function setHeader(?Header $value): void {
        $this->header = $value;
    }

    /**
     * Sets the lastUpdatedDate property value. The date and time, in ISO 8601 format, that indicates the last time the data returned in the report was updated.
     * @param string|null $value Value to set for the lastUpdatedDate property.
    */
    public function setLastUpdatedDate(?string $value): void {
        $this->lastUpdatedDate = $value;
    }

    /**
     * Sets the records property value. A complex type containing the individual data records for the traffic report.
     * @param array<Record>|null $value Value to set for the records property.
    */
    public function setRecords(?array $value): void {
        $this->records = $value;
    }

    /**
     * Sets the startDate property value. The start date of the date range used to calculate the report, in ISO 8601 format.
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

    /**
     * Sets the warnings property value. An array of any process errors or warnings that were generated during the processing of the call processing.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
