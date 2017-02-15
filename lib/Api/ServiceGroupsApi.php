<?php
/**
 * ServiceGroupsApi
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
 * ServiceGroupsApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\ElectioClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceGroupsApi
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
     * @return ServiceGroupsApi
     */
    public function setApiClient(\ChrisHemmings\ElectioClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createServiceGroup
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function createServiceGroup($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->createServiceGroupWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation createServiceGroupWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function createServiceGroupWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/servicegroups/";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/servicegroups/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteServiceGroup
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function deleteServiceGroup($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->deleteServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation deleteServiceGroupWithHttpInfo
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function deleteServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'serviceGroupReference' is set
        if ($serviceGroupReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceGroupReference when calling deleteServiceGroup');
        }
        // parse inputs
        $resourcePath = "/servicegroups/{serviceGroupReference}";
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
        if ($serviceGroupReference !== null) {
            $resourcePath = str_replace(
                "{" . "serviceGroupReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceGroupReference),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/servicegroups/{serviceGroupReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getServiceGroup
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroup($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getServiceGroupWithHttpInfo
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'serviceGroupReference' is set
        if ($serviceGroupReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceGroupReference when calling getServiceGroup');
        }
        // parse inputs
        $resourcePath = "/servicegroups/{serviceGroupReference}";
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
        if ($serviceGroupReference !== null) {
            $resourcePath = str_replace(
                "{" . "serviceGroupReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceGroupReference),
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
                '/servicegroups/{serviceGroupReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getServiceGroupSummaries
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupSummaries($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getServiceGroupSummariesWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getServiceGroupSummariesWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupSummariesWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/servicegroups/summaries";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/servicegroups/summaries'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getServiceGroupSummary
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupSummary($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getServiceGroupSummaryWithHttpInfo($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getServiceGroupSummaryWithHttpInfo
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupSummaryWithHttpInfo($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'serviceGroupReference' is set
        if ($serviceGroupReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceGroupReference when calling getServiceGroupSummary');
        }
        // parse inputs
        $resourcePath = "/servicegroups/summary/{serviceGroupReference}";
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
        if ($serviceGroupReference !== null) {
            $resourcePath = str_replace(
                "{" . "serviceGroupReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceGroupReference),
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
                '/servicegroups/summary/{serviceGroupReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getServiceGroups
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroups($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getServiceGroupsWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getServiceGroupsWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getServiceGroupsWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/servicegroups/";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/servicegroups/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateServiceGroup
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function updateServiceGroup($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->updateServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation updateServiceGroupWithHttpInfo
     *
     * 
     *
     * @param string $serviceGroupReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function updateServiceGroupWithHttpInfo($serviceGroupReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'serviceGroupReference' is set
        if ($serviceGroupReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $serviceGroupReference when calling updateServiceGroup');
        }
        // parse inputs
        $resourcePath = "/servicegroups/{serviceGroupReference}";
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
        if ($serviceGroupReference !== null) {
            $resourcePath = str_replace(
                "{" . "serviceGroupReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($serviceGroupReference),
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
                '/servicegroups/{serviceGroupReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
