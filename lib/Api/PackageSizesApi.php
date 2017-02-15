<?php
/**
 * PackageSizesApi
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
 * PackageSizesApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\ElectioClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageSizesApi
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
     * @return PackageSizesApi
     */
    public function setApiClient(\ChrisHemmings\ElectioClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createPackageSize
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function createPackageSize($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->createPackageSizeWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation createPackageSizeWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function createPackageSizeWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/packagesizes/";
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
                '/packagesizes/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deletePackageSize
     *
     * 
     *
     * @param string $packageSizeReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function deletePackageSize($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->deletePackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation deletePackageSizeWithHttpInfo
     *
     * 
     *
     * @param string $packageSizeReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function deletePackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'packageSizeReference' is set
        if ($packageSizeReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $packageSizeReference when calling deletePackageSize');
        }
        // parse inputs
        $resourcePath = "/packagesizes/{packageSizeReference}";
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
        if ($packageSizeReference !== null) {
            $resourcePath = str_replace(
                "{" . "packageSizeReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($packageSizeReference),
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
                '/packagesizes/{packageSizeReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getDefaultPackageSize
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getDefaultPackageSize($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getDefaultPackageSizeWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getDefaultPackageSizeWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getDefaultPackageSizeWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/packagesizes/default";
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
                '/packagesizes/default'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getPackageSizes
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getPackageSizes($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->getPackageSizesWithHttpInfo($subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation getPackageSizesWithHttpInfo
     *
     * 
     *
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function getPackageSizesWithHttpInfo($subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // parse inputs
        $resourcePath = "/packagesizes/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
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
                '/packagesizes/'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation setDefaultPackageSize
     *
     * 
     *
     * @param string $packageSizeReference The reference of the package size to set as default (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function setDefaultPackageSize($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->setDefaultPackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation setDefaultPackageSizeWithHttpInfo
     *
     * 
     *
     * @param string $packageSizeReference The reference of the package size to set as default (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function setDefaultPackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'packageSizeReference' is set
        if ($packageSizeReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $packageSizeReference when calling setDefaultPackageSize');
        }
        // parse inputs
        $resourcePath = "/packagesizes/{packageSizeReference}/default";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml'));
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
        if ($packageSizeReference !== null) {
            $resourcePath = str_replace(
                "{" . "packageSizeReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($packageSizeReference),
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
                '/packagesizes/{packageSizeReference}/default'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updatePackageSize
     *
     * 
     *
     * @param string $packageSizeReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return void
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function updatePackageSize($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        list($response) = $this->updatePackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey, $ocpApimSubscriptionKey);
        return $response;
    }

    /**
     * Operation updatePackageSizeWithHttpInfo
     *
     * 
     *
     * @param string $packageSizeReference  (required)
     * @param string $subscriptionKey subscription key in url (optional)
     * @param string $ocpApimSubscriptionKey subscription key in header (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \ChrisHemmings\ElectioClient\ApiException on non-2xx response
     */
    public function updatePackageSizeWithHttpInfo($packageSizeReference, $subscriptionKey = null, $ocpApimSubscriptionKey = null)
    {
        // verify the required parameter 'packageSizeReference' is set
        if ($packageSizeReference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $packageSizeReference when calling updatePackageSize');
        }
        // parse inputs
        $resourcePath = "/packagesizes/{packageSizeReference}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/xml'));

        // query params
        if ($subscriptionKey !== null) {
            $queryParams['subscription-key'] = $this->apiClient->getSerializer()->toQueryValue($subscriptionKey);
        }
        // header params
        if ($ocpApimSubscriptionKey !== null) {
            $headerParams['Ocp-Apim-Subscription-Key'] = $this->apiClient->getSerializer()->toHeaderValue($ocpApimSubscriptionKey);
        }
        // path params
        if ($packageSizeReference !== null) {
            $resourcePath = str_replace(
                "{" . "packageSizeReference" . "}",
                $this->apiClient->getSerializer()->toPathValue($packageSizeReference),
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
                '/packagesizes/{packageSizeReference}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
