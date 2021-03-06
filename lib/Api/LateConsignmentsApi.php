<?php
/**
 * LateConsignmentsApi
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
 * LateConsignmentsApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\ElectioClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LateConsignmentsApi
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
     * @return LateConsignmentsApi
     */
    public function setApiClient(\ChrisHemmings\ElectioClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getLateConsignmentsFromCarrierPointOfView
     *
     * 
     *
     * @param string $dateFrom  (required)
     * @param string $dateTo  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getLateConsignmentsFromCarrierPointOfView($dateFrom, $dateTo, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getLateConsignmentsFromCarrierPointOfViewWithHttpInfo($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getLateConsignmentsFromCarrierPointOfViewWithHttpInfo
     *
     * 
     *
     * @param string $dateFrom  (required)
     * @param string $dateTo  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getLateConsignmentsFromCarrierPointOfViewWithHttpInfo($dateFrom, $dateTo, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'dateFrom' is set
        if ($dateFrom === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dateFrom when calling getLateConsignmentsFromCarrierPointOfView');
        }
        // verify the required parameter 'dateTo' is set
        if ($dateTo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dateTo when calling getLateConsignmentsFromCarrierPointOfView');
        }
        // parse inputs
        $resourcePath = "/lateconsignments/carrierlate/{dateFrom}/{dateTo}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
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
        if ($dateFrom !== null) {
            $resourcePath = str_replace(
                "{" . "dateFrom" . "}",
                $this->apiClient->getSerializer()->toPathValue($dateFrom),
                $resourcePath
            );
        }
        // path params
        if ($dateTo !== null) {
            $resourcePath = str_replace(
                "{" . "dateTo" . "}",
                $this->apiClient->getSerializer()->toPathValue($dateTo),
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/lateconsignments/carrierlate/{dateFrom}/{dateTo}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getLateConsignmentsFromCustomerPointOfView
     *
     * 
     *
     * @param string $dateFrom  (required)
     * @param string $dateTo  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getLateConsignmentsFromCustomerPointOfView($dateFrom, $dateTo, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getLateConsignmentsFromCustomerPointOfViewWithHttpInfo($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getLateConsignmentsFromCustomerPointOfViewWithHttpInfo
     *
     * 
     *
     * @param string $dateFrom  (required)
     * @param string $dateTo  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getLateConsignmentsFromCustomerPointOfViewWithHttpInfo($dateFrom, $dateTo, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'dateFrom' is set
        if ($dateFrom === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dateFrom when calling getLateConsignmentsFromCustomerPointOfView');
        }
        // verify the required parameter 'dateTo' is set
        if ($dateTo === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dateTo when calling getLateConsignmentsFromCustomerPointOfView');
        }
        // parse inputs
        $resourcePath = "/lateconsignments/customer/{dateFrom}/{dateTo}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
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
        if ($dateFrom !== null) {
            $resourcePath = str_replace(
                "{" . "dateFrom" . "}",
                $this->apiClient->getSerializer()->toPathValue($dateFrom),
                $resourcePath
            );
        }
        // path params
        if ($dateTo !== null) {
            $resourcePath = str_replace(
                "{" . "dateTo" . "}",
                $this->apiClient->getSerializer()->toPathValue($dateTo),
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/lateconsignments/customer/{dateFrom}/{dateTo}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
