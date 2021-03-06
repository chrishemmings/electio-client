<?php
/**
 * AllocationApi
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\ElectioClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A PHP client for the Electio delivery management system
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\ElectioClient\Api;

use \ChrisHemmings\ElectioClient\Configuration;
use \ChrisHemmings\ElectioClient\ApiClient;
use \ChrisHemmings\ElectioClient\ApiException;
use \ChrisHemmings\ElectioClient\ObjectSerializer;

/**
 * AllocationApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\ElectioClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllocationApi
{

    /**
     * API Client
     *
     * @var \ChrisHemmings\ElectioClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ChrisHemmings\ElectioClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ChrisHemmings\ElectioClient\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.electioapp.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ChrisHemmings\ElectioClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ChrisHemmings\ElectioClient\ApiClient $apiClient set the API client
     *
     * @return AllocationApi
     */
    public function setApiClient(\ChrisHemmings\ElectioClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation allocateConsignmentsWithASpecificCarrierService
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateConsignmentsWithASpecificCarrierService($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->allocateConsignmentsWithASpecificCarrierServiceWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation allocateConsignmentsWithASpecificCarrierServiceWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateConsignmentsWithASpecificCarrierServiceWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/Allocation/allocateWithCarrierService";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/xml'));

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Allocation/allocateWithCarrierService'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation allocateUsingASpecificQuote
     *
     * 
     *
     * @param string $consignmentReference Consignment Reference (required)
     * @param string $quoteReference Quote Reference (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateUsingASpecificQuote($consignmentReference, $quoteReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->allocateUsingASpecificQuoteWithHttpInfo($consignmentReference, $quoteReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation allocateUsingASpecificQuoteWithHttpInfo
     *
     * 
     *
     * @param string $consignmentReference Consignment Reference (required)
     * @param string $quoteReference Quote Reference (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateUsingASpecificQuoteWithHttpInfo($consignmentReference, $quoteReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'consignmentReference' is set
        if ($consignmentReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $consignmentReference when calling allocateUsingASpecificQuote');
        }
        // verify the required parameter 'quoteReference' is set
        if ($quoteReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $quoteReference when calling allocateUsingASpecificQuote');
        }
        // parse inputs
        $resourcePath = "/Allocation/{consignmentReference}/allocateWithQuote/{quoteReference}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/xml'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // path params
        if ($consignmentReference !== null) {
            $resourcePath = str_replace(
                "{" . "consignmentReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($consignmentReference),
                $resourcePath
            );
        }
        // path params
        if ($quoteReference !== null) {
            $resourcePath = str_replace(
                "{" . "quoteReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($quoteReference),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Allocation/{consignmentReference}/allocateWithQuote/{quoteReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation allocateUsingDefaultRules
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateUsingDefaultRules($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->allocateUsingDefaultRulesWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation allocateUsingDefaultRulesWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateUsingDefaultRulesWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/Allocation/allocate";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','text/xml'));

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Allocation/allocate'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation allocateWithCarrierServiceGroup
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateWithCarrierServiceGroup($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->allocateWithCarrierServiceGroupWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation allocateWithCarrierServiceGroupWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateWithCarrierServiceGroupWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/Allocation/allocatewithservicegroup";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Allocation/allocatewithservicegroup'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation allocateWithCheapestQuote
     *
     * 
     *
     * @param string $consignmentReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateWithCheapestQuote($consignmentReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->allocateWithCheapestQuoteWithHttpInfo($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation allocateWithCheapestQuoteWithHttpInfo
     *
     * 
     *
     * @param string $consignmentReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function allocateWithCheapestQuoteWithHttpInfo($consignmentReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'consignmentReference' is set
        if ($consignmentReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $consignmentReference when calling allocateWithCheapestQuote');
        }
        // parse inputs
        $resourcePath = "/Allocation/{consignmentReference}/allocateWithCheapestQuote";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // path params
        if ($consignmentReference !== null) {
            $resourcePath = str_replace(
                "{" . "consignmentReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($consignmentReference),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Allocation/{consignmentReference}/allocateWithCheapestQuote'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
