<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex data type defines the response data that is returned from a request to <b>getCustomerServiceMetric</b>.  <br><br>The <b>dimensionMetrics</b> object contains the details of the dimension being measured and the calculated customer service metric values. <br><br>The <b>evaluationCycle</b> defines the period used to calculate the metric values.  <br><br>The <b>marketplaceId</b> is the eBay marketplace for which the metrics are being considered.
*/
class GetCustomerServiceMetricResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<DimensionMetric>|null $dimensionMetrics This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
    */
    private ?array $dimensionMetrics = null;
    
    /**
     * @var EvaluationCycle|null $evaluationCycle This complex type describes the start and end dates of the of the time period over which the associated benchmark is computed.  <br><br>All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
    */
    private ?EvaluationCycle $evaluationCycle = null;
    
    /**
     * @var string|null $marketplaceId The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages">Service metrics policy</a> page. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * Instantiates a new GetCustomerServiceMetricResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCustomerServiceMetricResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetCustomerServiceMetricResponse {
        return new GetCustomerServiceMetricResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensionMetrics property value. This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
     * @return array<DimensionMetric>|null
    */
    public function getDimensionMetrics(): ?array {
        return $this->dimensionMetrics;
    }

    /**
     * Gets the evaluationCycle property value. This complex type describes the start and end dates of the of the time period over which the associated benchmark is computed.  <br><br>All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     * @return EvaluationCycle|null
    */
    public function getEvaluationCycle(): ?EvaluationCycle {
        return $this->evaluationCycle;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensionMetrics' => fn(ParseNode $n) => $o->setDimensionMetrics($n->getCollectionOfObjectValues([DimensionMetric::class, 'createFromDiscriminatorValue'])),
            'evaluationCycle' => fn(ParseNode $n) => $o->setEvaluationCycle($n->getObjectValue([EvaluationCycle::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketplaceId property value. The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages">Service metrics policy</a> page. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dimensionMetrics', $this->getDimensionMetrics());
        $writer->writeObjectValue('evaluationCycle', $this->getEvaluationCycle());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
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
     * Sets the dimensionMetrics property value. This container provides a seller's customer service <b>metric</b> performance for a given <b>dimension</b>.  <br><br>In the <b>getCustomerServiceMetric</b> request, specify values for the following request parameters to control the returned dimension and the associated metric values: <ul><li> <b>customer_service_metric_type</b></li> <li><b>evaluation_type</b></li> <li><b>evaluation_marketplace_id</b></li></ul>
     * @param array<DimensionMetric>|null $value Value to set for the dimensionMetrics property.
    */
    public function setDimensionMetrics(?array $value): void {
        $this->dimensionMetrics = $value;
    }

    /**
     * Sets the evaluationCycle property value. This complex type describes the start and end dates of the of the time period over which the associated benchmark is computed.  <br><br>All timestamps are based on Mountain Standard Time (MST).  <br><br>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     * @param EvaluationCycle|null $value Value to set for the evaluationCycle property.
    */
    public function setEvaluationCycle(?EvaluationCycle $value): void {
        $this->evaluationCycle = $value;
    }

    /**
     * Sets the marketplaceId property value. The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based.  <br><br>The <b>customer_service_metric</b> resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the <a href="https://www.ebay.com/help/policies/selling-policies/seller-performance-policy/service-metrics-policy?id=4769#section2" title="eBay Help pages">Service metrics policy</a> page. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

}
