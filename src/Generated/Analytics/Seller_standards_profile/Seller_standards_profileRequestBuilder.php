<?php

namespace EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile;

use EBay\AnalyticsAndReporting\Generated\Analytics\Models\FindSellerStandardsProfilesResponse;
use EBay\AnalyticsAndReporting\Generated\Analytics\Seller_standards_profile\Item\WithProgramItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /seller_standards_profile
*/
class Seller_standards_profileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/AnalyticsAndReporting/Generated/Analytics.seller_standards_profile.item collection
     * @param string $program This path parameter is used to specify the seller standards program for which metrics and metadata will be retrieved. <br><br>See <a href="/api-docs/sell/analytics/types/ssp:ProgramEnum" target="_blank">ProgramEnum</a> for a list of supported values.
     * @return WithProgramItemRequestBuilder
    */
    public function byProgram(string $program): WithProgramItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['program'] = $program;
        return new WithProgramItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Seller_standards_profileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/seller_standards_profile');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves all the standards profiles for the associated seller.  <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the seller's associated compliance values (either <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A seller's multiple profiles are distinguished by two criteria, a "program" and a "cycle." A profile's <i>program </i> is one of three regions where the seller may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all marketplaces where the seller has done business. The <i>cycle</i> value specifies whether the standards compliance values were determined at the last official eBay evaluation or at the time of the request.
     * @param Seller_standards_profileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FindSellerStandardsProfilesResponse|null>
     * @throws Exception
    */
    public function get(?Seller_standards_profileRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [FindSellerStandardsProfilesResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This call retrieves all the standards profiles for the associated seller.  <br><br>A <i>standards profile </i> is a set of eBay seller metrics and the seller's associated compliance values (either <code>TOP_RATED</code>, <code>ABOVE_STANDARD</code>, or <code>BELOW_STANDARD</code>).  <br><br>A seller's multiple profiles are distinguished by two criteria, a "program" and a "cycle." A profile's <i>program </i> is one of three regions where the seller may have done business, or <code>PROGRAM_GLOBAL</code> to indicate all marketplaces where the seller has done business. The <i>cycle</i> value specifies whether the standards compliance values were determined at the last official eBay evaluation or at the time of the request.
     * @param Seller_standards_profileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Seller_standards_profileRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Seller_standards_profileRequestBuilder
    */
    public function withUrl(string $rawUrl): Seller_standards_profileRequestBuilder {
        return new Seller_standards_profileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
