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

/**
 * This complex type defines the benchmark data, which includes the <b>average</b> value of the metric for the group (the benchmark) and the seller's overall <b>rating</b> when compared to the benchmark.
*/
class MetricBenchmark implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var RatingAdjustmentTypeEnum|null $adjustment If this field is present, it indicates that the rating given to the seller was "adjusted" for one reason or another.  <br><br>If eBay determines that the normal rating of a seller is impacted by circumstances beyond their control, they can issue an override to adjust the rating given to the seller.
    */
    private ?RatingAdjustmentTypeEnum $adjustment = null;
    
    /**
     * @var BenchmarkTypeEnum|null $basis This field returns the "basis" by which the benchmark is calculated for the customer service metric type. <br><br>Currently, the only supported basis is <code>PEER_BENCHMARK</code>.
    */
    private ?BenchmarkTypeEnum $basis = null;
    
    /**
     * @var BenchmarkMetadata|null $metadata This field contains the benchmark data.
    */
    private ?BenchmarkMetadata $metadata = null;
    
    /**
     * @var RatingTypeEnum|null $rating This field returns seller's rating for the customer service metric.  <br><br>The rating is set to a value that equals the relative deviation between the seller's metric value and the benchmark value for the customer service metric.  <br><br>Deviation values range from <code>LOW</code> to <code>VERY HIGH</code>, and the lower the deviation, the better the seller rating.
    */
    private ?RatingTypeEnum $rating = null;
    
    /**
     * Instantiates a new MetricBenchmark and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetricBenchmark
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetricBenchmark {
        return new MetricBenchmark();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adjustment property value. If this field is present, it indicates that the rating given to the seller was "adjusted" for one reason or another.  <br><br>If eBay determines that the normal rating of a seller is impacted by circumstances beyond their control, they can issue an override to adjust the rating given to the seller.
     * @return RatingAdjustmentTypeEnum|null
    */
    public function getAdjustment(): ?RatingAdjustmentTypeEnum {
        return $this->adjustment;
    }

    /**
     * Gets the basis property value. This field returns the "basis" by which the benchmark is calculated for the customer service metric type. <br><br>Currently, the only supported basis is <code>PEER_BENCHMARK</code>.
     * @return BenchmarkTypeEnum|null
    */
    public function getBasis(): ?BenchmarkTypeEnum {
        return $this->basis;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adjustment' => fn(ParseNode $n) => $o->setAdjustment($n->getEnumValue(RatingAdjustmentTypeEnum::class)),
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getEnumValue(BenchmarkTypeEnum::class)),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([BenchmarkMetadata::class, 'createFromDiscriminatorValue'])),
            'rating' => fn(ParseNode $n) => $o->setRating($n->getEnumValue(RatingTypeEnum::class)),
        ];
    }

    /**
     * Gets the metadata property value. This field contains the benchmark data.
     * @return BenchmarkMetadata|null
    */
    public function getMetadata(): ?BenchmarkMetadata {
        return $this->metadata;
    }

    /**
     * Gets the rating property value. This field returns seller's rating for the customer service metric.  <br><br>The rating is set to a value that equals the relative deviation between the seller's metric value and the benchmark value for the customer service metric.  <br><br>Deviation values range from <code>LOW</code> to <code>VERY HIGH</code>, and the lower the deviation, the better the seller rating.
     * @return RatingTypeEnum|null
    */
    public function getRating(): ?RatingTypeEnum {
        return $this->rating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('adjustment', $this->getAdjustment());
        $writer->writeEnumValue('basis', $this->getBasis());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeEnumValue('rating', $this->getRating());
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
     * Sets the adjustment property value. If this field is present, it indicates that the rating given to the seller was "adjusted" for one reason or another.  <br><br>If eBay determines that the normal rating of a seller is impacted by circumstances beyond their control, they can issue an override to adjust the rating given to the seller.
     * @param RatingAdjustmentTypeEnum|null $value Value to set for the adjustment property.
    */
    public function setAdjustment(?RatingAdjustmentTypeEnum $value): void {
        $this->adjustment = $value;
    }

    /**
     * Sets the basis property value. This field returns the "basis" by which the benchmark is calculated for the customer service metric type. <br><br>Currently, the only supported basis is <code>PEER_BENCHMARK</code>.
     * @param BenchmarkTypeEnum|null $value Value to set for the basis property.
    */
    public function setBasis(?BenchmarkTypeEnum $value): void {
        $this->basis = $value;
    }

    /**
     * Sets the metadata property value. This field contains the benchmark data.
     * @param BenchmarkMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?BenchmarkMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the rating property value. This field returns seller's rating for the customer service metric.  <br><br>The rating is set to a value that equals the relative deviation between the seller's metric value and the benchmark value for the customer service metric.  <br><br>Deviation values range from <code>LOW</code> to <code>VERY HIGH</code>, and the lower the deviation, the better the seller rating.
     * @param RatingTypeEnum|null $value Value to set for the rating property.
    */
    public function setRating(?RatingTypeEnum $value): void {
        $this->rating = $value;
    }

}
