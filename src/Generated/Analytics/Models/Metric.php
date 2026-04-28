<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex data type defines the details of the customer service metric and benchmark data related to the associated <b>dimension</b>.
*/
class Metric implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MetricBenchmark|null $benchmark This complex type defines the benchmark data, which includes the <b>average</b> value of the metric for the group (the benchmark) and the seller's overall <b>rating</b> when compared to the benchmark.
    */
    private ?MetricBenchmark $benchmark = null;
    
    /**
     * @var array<MetricDistribution>|null $distributions Returned when <b>metricKey</b> equals <code>COUNT</code>, this field returns an array of  seller data where each set of data is grouped according by an overarching <b>basis</b>.  <br><br>When the seller distribution is returned, the numeric value of the associated <b>value</b> container equals the sum of the transactions where the seller meets the criteria of the customer service metric type for the given <b>dimension</b> during the <b>evaluationCycle</b>.
    */
    private ?array $distributions = null;
    
    /**
     * @var string|null $metricKey This field indicates the customer service metric being returned in the associated <b>metrics</b> container. The field is set as follows: <ul><li><code>TRANSACTION_COUNT</code> &ndash; When set to this value, the associated <b>value</b> field returns the number of transactions completed in the peer group for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>COUNT</code> &ndash; When set to this value, the associated <b>value</b> field is set to the number of transactions completed by the seller for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>RATE</code> &ndash; When set to this value, the fields in the associated container return the seller's calculated <b>value</b> for the associated customer service metric along with the benchmark data against which the seller is evaluated.  <br><br>Specifically, when <b>metricKey</b> is set to <code>RATE</code>, the associated <b>value</b> field is set to the value of <b>metricKey</b> <code>TRANSACTION_COUNT</code> divided by the value of <b>metricKey</b> <code>COUNT</code>.  <br><br>The <b>benchmark.rating</b> value is the seller's rating for the metric in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li></ul>
    */
    private ?string $metricKey = null;
    
    /**
     * @var string|null $value This field is set to the seller's numeric rating for the associated <b>metricKey</b> for the given <b>dimension</b> during the <b>evaluationCycle</b>.  <br><br>To determine the seller's rating for this metric, the value of this field is compared to the average metric value of the group.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new Metric and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Metric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Metric {
        return new Metric();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the benchmark property value. This complex type defines the benchmark data, which includes the <b>average</b> value of the metric for the group (the benchmark) and the seller's overall <b>rating</b> when compared to the benchmark.
     * @return MetricBenchmark|null
    */
    public function getBenchmark(): ?MetricBenchmark {
        return $this->benchmark;
    }

    /**
     * Gets the distributions property value. Returned when <b>metricKey</b> equals <code>COUNT</code>, this field returns an array of  seller data where each set of data is grouped according by an overarching <b>basis</b>.  <br><br>When the seller distribution is returned, the numeric value of the associated <b>value</b> container equals the sum of the transactions where the seller meets the criteria of the customer service metric type for the given <b>dimension</b> during the <b>evaluationCycle</b>.
     * @return array<MetricDistribution>|null
    */
    public function getDistributions(): ?array {
        return $this->distributions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'benchmark' => fn(ParseNode $n) => $o->setBenchmark($n->getObjectValue([MetricBenchmark::class, 'createFromDiscriminatorValue'])),
            'distributions' => fn(ParseNode $n) => $o->setDistributions($n->getCollectionOfObjectValues([MetricDistribution::class, 'createFromDiscriminatorValue'])),
            'metricKey' => fn(ParseNode $n) => $o->setMetricKey($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the metricKey property value. This field indicates the customer service metric being returned in the associated <b>metrics</b> container. The field is set as follows: <ul><li><code>TRANSACTION_COUNT</code> &ndash; When set to this value, the associated <b>value</b> field returns the number of transactions completed in the peer group for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>COUNT</code> &ndash; When set to this value, the associated <b>value</b> field is set to the number of transactions completed by the seller for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>RATE</code> &ndash; When set to this value, the fields in the associated container return the seller's calculated <b>value</b> for the associated customer service metric along with the benchmark data against which the seller is evaluated.  <br><br>Specifically, when <b>metricKey</b> is set to <code>RATE</code>, the associated <b>value</b> field is set to the value of <b>metricKey</b> <code>TRANSACTION_COUNT</code> divided by the value of <b>metricKey</b> <code>COUNT</code>.  <br><br>The <b>benchmark.rating</b> value is the seller's rating for the metric in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li></ul>
     * @return string|null
    */
    public function getMetricKey(): ?string {
        return $this->metricKey;
    }

    /**
     * Gets the value property value. This field is set to the seller's numeric rating for the associated <b>metricKey</b> for the given <b>dimension</b> during the <b>evaluationCycle</b>.  <br><br>To determine the seller's rating for this metric, the value of this field is compared to the average metric value of the group.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('benchmark', $this->getBenchmark());
        $writer->writeCollectionOfObjectValues('distributions', $this->getDistributions());
        $writer->writeStringValue('metricKey', $this->getMetricKey());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the benchmark property value. This complex type defines the benchmark data, which includes the <b>average</b> value of the metric for the group (the benchmark) and the seller's overall <b>rating</b> when compared to the benchmark.
     * @param MetricBenchmark|null $value Value to set for the benchmark property.
    */
    public function setBenchmark(?MetricBenchmark $value): void {
        $this->benchmark = $value;
    }

    /**
     * Sets the distributions property value. Returned when <b>metricKey</b> equals <code>COUNT</code>, this field returns an array of  seller data where each set of data is grouped according by an overarching <b>basis</b>.  <br><br>When the seller distribution is returned, the numeric value of the associated <b>value</b> container equals the sum of the transactions where the seller meets the criteria of the customer service metric type for the given <b>dimension</b> during the <b>evaluationCycle</b>.
     * @param array<MetricDistribution>|null $value Value to set for the distributions property.
    */
    public function setDistributions(?array $value): void {
        $this->distributions = $value;
    }

    /**
     * Sets the metricKey property value. This field indicates the customer service metric being returned in the associated <b>metrics</b> container. The field is set as follows: <ul><li><code>TRANSACTION_COUNT</code> &ndash; When set to this value, the associated <b>value</b> field returns the number of transactions completed in the peer group for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>COUNT</code> &ndash; When set to this value, the associated <b>value</b> field is set to the number of transactions completed by the seller for the metric being evaluated in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li> <li><code>RATE</code> &ndash; When set to this value, the fields in the associated container return the seller's calculated <b>value</b> for the associated customer service metric along with the benchmark data against which the seller is evaluated.  <br><br>Specifically, when <b>metricKey</b> is set to <code>RATE</code>, the associated <b>value</b> field is set to the value of <b>metricKey</b> <code>TRANSACTION_COUNT</code> divided by the value of <b>metricKey</b> <code>COUNT</code>.  <br><br>The <b>benchmark.rating</b> value is the seller's rating for the metric in the associated <b>dimension</b> and <b>evaluationCycle</b>.</li></ul>
     * @param string|null $value Value to set for the metricKey property.
    */
    public function setMetricKey(?string $value): void {
        $this->metricKey = $value;
    }

    /**
     * Sets the value property value. This field is set to the seller's numeric rating for the associated <b>metricKey</b> for the given <b>dimension</b> during the <b>evaluationCycle</b>.  <br><br>To determine the seller's rating for this metric, the value of this field is compared to the average metric value of the group.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
