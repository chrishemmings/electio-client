# ChrisHemmings\ElectioClient\ConsignmentsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPackageToConsignment**](ConsignmentsApi.md#addPackageToConsignment) | **POST** /Consignments/{consignmentReference}/addpackage | 
[**addPackagesToAConsignment**](ConsignmentsApi.md#addPackagesToAConsignment) | **POST** /Consignments/{consignmentReference}/addpackages/{numberOfPackages} | 
[**cancelAConsignment**](ConsignmentsApi.md#cancelAConsignment) | **PUT** /Consignments/{consignmentReference}/cancel | 
[**createANewConsignment**](ConsignmentsApi.md#createANewConsignment) | **POST** /Consignments/ | 
[**deAllocateTheSpecifiedConsignment**](ConsignmentsApi.md#deAllocateTheSpecifiedConsignment) | **PUT** /Consignments/{consignmentReference}/deallocate | 
[**getACountOfConsignments**](ConsignmentsApi.md#getACountOfConsignments) | **GET** /Consignments/count | 
[**getASummaryByCarrierInTheDatePeriod**](ConsignmentsApi.md#getASummaryByCarrierInTheDatePeriod) | **GET** /Consignments/summary/courier | 
[**getASummaryOfConsignmentsInDatePeriod**](ConsignmentsApi.md#getASummaryOfConsignmentsInDatePeriod) | **GET** /Consignments/summary | 
[**getASummaryOfLatePackagesInTheDatePeriod**](ConsignmentsApi.md#getASummaryOfLatePackagesInTheDatePeriod) | **GET** /Consignments/summary/latepackages | 
[**getCustomerManifestByReference**](ConsignmentsApi.md#getCustomerManifestByReference) | **GET** /Consignments/customer/manifest/{manifestReference} | 
[**getCustomsDocuments**](ConsignmentsApi.md#getCustomsDocuments) | **GET** /Consignments/docs/{consignmentReference} | 
[**getManifests**](ConsignmentsApi.md#getManifests) | **GET** /Consignments/customer/manifests | 
[**getMultipleConsignmentDetails**](ConsignmentsApi.md#getMultipleConsignmentDetails) | **GET** /Consignments/{take}/{skip} | 
[**getTheSpecifiedConsignmentDetails**](ConsignmentsApi.md#getTheSpecifiedConsignmentDetails) | **GET** /Consignments/{consignmentReference} | 
[**getTheSpecifiedConsignmentDetailsByClientReference**](ConsignmentsApi.md#getTheSpecifiedConsignmentDetailsByClientReference) | **GET** /Consignments/clientReference/{clientReference} | 
[**getTheSpecifiedConsignmentDetailsWithMetadata**](ConsignmentsApi.md#getTheSpecifiedConsignmentDetailsWithMetadata) | **GET** /Consignments/getconsignmentwithmetadata/{consignmentReference} | 
[**getTheStatusOfTheSpecifiedConsignment**](ConsignmentsApi.md#getTheStatusOfTheSpecifiedConsignment) | **GET** /Consignments/{consignmentReference}/status | 
[**getTheStatusOfTheSpecifiedConsignmentSByClientReference**](ConsignmentsApi.md#getTheStatusOfTheSpecifiedConsignmentSByClientReference) | **GET** /Consignments/clientReference/{clientReference}/status | 
[**manifestConsignments**](ConsignmentsApi.md#manifestConsignments) | **PUT** /Consignments/manifest | 
[**removePackageFromConsignment**](ConsignmentsApi.md#removePackageFromConsignment) | **POST** /Consignments/{consignmentReference}/removepackage/{packageReference} | 
[**updateConsignmentDetails**](ConsignmentsApi.md#updateConsignmentDetails) | **PUT** /Consignments/update | 
[**updateConsignmentDetailsAlternativeRoute**](ConsignmentsApi.md#updateConsignmentDetailsAlternativeRoute) | **PUT** /Consignments/ | 


# **addPackageToConsignment**
> addPackageToConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Add a package to an existing consignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->addPackageToConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->addPackageToConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPackagesToAConsignment**
> addPackagesToAConsignment($consignmentReference, $numberOfPackages, $subscriptionKey, $ocpApimSubscriptionKey)



Adds one or more empty packages to a consignment.  <div class=\"alert alert-info\"><span class=\"glyphicon glyphicon-info-sign\"></span> <span>There is no body for this request. There are two route parameters: <ul><li>Consignment reference; and</li><li>The number of packages to add</li></ul> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | The consignment reference to add packages to
$numberOfPackages = 56; // int | The number of packages to add
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->addPackagesToAConsignment($consignmentReference, $numberOfPackages, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->addPackagesToAConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The consignment reference to add packages to |
 **numberOfPackages** | **int**| The number of packages to add |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelAConsignment**
> cancelAConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to cancel the specified consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->cancelAConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->cancelAConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createANewConsignment**
> createANewConsignment($subscriptionKey, $ocpApimSubscriptionKey)



Creates a new consignment.   <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"> </span> <strong>Note:&nbsp;</strong> <p> The example request shown below contains virtually all properties that can be sent when creating a consignment, although not all properties are required. See <a href=\"http://docs.electioapp.com/display/EW/Consignments\">the Consignments data contract documentation</a> for further details. </p> </div>  <div class=\"alert alert-success\"> <span class=\"glyphicon glyphicon-ok\"></span> <span>A successful response from Electio will include the Electio consignment reference generated for the new consignment. This takes the form EC-XXX-XXX-XXX where 'X' is an alphanumeric character. </span> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->createANewConsignment($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->createANewConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deAllocateTheSpecifiedConsignment**
> deAllocateTheSpecifiedConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Deallocates a consignment.  <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info\"></span> <span><strong>Note: </strong>It is only possible to de-allocate a consignment that is in an allocated state.</span></div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | The reference of the consignment to de-allocate
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->deAllocateTheSpecifiedConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->deAllocateTheSpecifiedConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The reference of the consignment to de-allocate |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACountOfConsignments**
> getACountOfConsignments($state, $subscriptionKey, $ocpApimSubscriptionKey)



Returns the number of consignments with the specified state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$state = "state_example"; // string | The state of the consignments to count, e.g. Unallocated, Allocated, Manifested etc.
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getACountOfConsignments($state, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getACountOfConsignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The state of the consignments to count, e.g. Unallocated, Allocated, Manifested etc. | [optional]
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getASummaryByCarrierInTheDatePeriod**
> getASummaryByCarrierInTheDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey)



Returns a summary of the couriers and services that a consignment is assigned to.  The parameters startAt and endAt are required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$startFrom = "startFrom_example"; // string | The date to start the summary from
$endAt = "endAt_example"; // string | The date to end the summary at
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getASummaryByCarrierInTheDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getASummaryByCarrierInTheDatePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startFrom** | **string**| The date to start the summary from |
 **endAt** | **string**| The date to end the summary at |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getASummaryOfConsignmentsInDatePeriod**
> getASummaryOfConsignmentsInDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey)



Returns an aggregated summary of the consignments within the system for the current customer during a given time period. Both the \"startAt\" and \"endAt\" parameters must be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$startFrom = "startFrom_example"; // string | The date from which to include consignments in the summary
$endAt = "endAt_example"; // string | The date at which to stop consignments from being included in the summary
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getASummaryOfConsignmentsInDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getASummaryOfConsignmentsInDatePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startFrom** | **string**| The date from which to include consignments in the summary |
 **endAt** | **string**| The date at which to stop consignments from being included in the summary |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getASummaryOfLatePackagesInTheDatePeriod**
> getASummaryOfLatePackagesInTheDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey)



Returns a summary of the number of late and on time packages broken down by supplier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$startFrom = "startFrom_example"; // string | The start date of the period to get the summary for
$endAt = "endAt_example"; // string | The end date of the period to get the summary for
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getASummaryOfLatePackagesInTheDatePeriod($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getASummaryOfLatePackagesInTheDatePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startFrom** | **string**| The start date of the period to get the summary for |
 **endAt** | **string**| The end date of the period to get the summary for |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerManifestByReference**
> getCustomerManifestByReference($manifestReference, $subscriptionKey, $ocpApimSubscriptionKey)



Get the specified manifest by reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$manifestReference = "manifestReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCustomerManifestByReference($manifestReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getCustomerManifestByReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manifestReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomsDocuments**
> getCustomsDocuments($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Returns all customs documents for the specified consignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCustomsDocuments($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getCustomsDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManifests**
> getManifests($subscriptionKey, $ocpApimSubscriptionKey)



Get all manifest files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getManifests($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getManifests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultipleConsignmentDetails**
> getMultipleConsignmentDetails($take, $skip, $createdDateFrom, $createdDateTo, $scheduledDeliveryDateFrom, $scheduledDeliveryDateTo, $shippedDateFrom, $shippedDateTo, $reference, $state, $weightInGramsFrom, $weightInGramsTo, $carrierService, $source, $postcode, $valueFrom, $valueTo, $searchTerm, $subscriptionKey, $ocpApimSubscriptionKey)



Returns a collection of consignments matching the search criteria.  The url parameters include:  <ul style=\"margin-left: 40px\"> <li><strong>take:&nbsp;</strong>The number of consignments to retrieve. <strong>&nbsp;Maximum value: 60</strong></li> <li><strong>skip:&nbsp;</strong>The starting point of the retrieval.</li> </ul>  For example, to get consignments 21 to 30 you would issue the following request:  <pre>/10/20</pre>  This would take 10 consignments and skip the first 20.  <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Note:</strong><p> This query also has a large number of optional query parameters that allow you to search and filter the returned consignments.</p></div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$take = 56; // int | The number of consignments to retrieve
$skip = 56; // int | The number of consignments to skip
$createdDateFrom = "createdDateFrom_example"; // string | The earliest date of creation of the consignment
$createdDateTo = "createdDateTo_example"; // string | The latest date of creation of the consignment
$scheduledDeliveryDateFrom = "scheduledDeliveryDateFrom_example"; // string | The earliest scheduled delivery date
$scheduledDeliveryDateTo = "scheduledDeliveryDateTo_example"; // string | The latest scheduled delivery date
$shippedDateFrom = "shippedDateFrom_example"; // string | The earliest shipped date (note this only applies to shipped consignments)
$shippedDateTo = "shippedDateTo_example"; // string | The latest shipped date (note this only applies to shipped consignments)
$reference = "reference_example"; // string | The reference of the consignment. This will return partial matches.
$state = "state_example"; // string | The state of the consignment, e.g. Unallocated, Allocated, Manifested
$weightInGramsFrom = 56; // int | The lowest weight in grams
$weightInGramsTo = 56; // int | The highest weight in grams
$carrierService = "carrierService_example"; // string | The reference of the carrier service that the consignment has been allocated to (note: only applies to allocated or shipped consignments)
$source = "source_example"; // string | The source of the consignment (e.g. Manual, API, CSV)
$postcode = "postcode_example"; // string | The postcode of the source or destination address. This will return partial matches
$valueFrom = 3.4; // float | The lowest value (currency) of the consignment
$valueTo = 3.4; // float | The highest value (currency) of the consignment
$searchTerm = "searchTerm_example"; // string | An optional search term
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getMultipleConsignmentDetails($take, $skip, $createdDateFrom, $createdDateTo, $scheduledDeliveryDateFrom, $scheduledDeliveryDateTo, $shippedDateFrom, $shippedDateTo, $reference, $state, $weightInGramsFrom, $weightInGramsTo, $carrierService, $source, $postcode, $valueFrom, $valueTo, $searchTerm, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getMultipleConsignmentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **take** | **int**| The number of consignments to retrieve |
 **skip** | **int**| The number of consignments to skip |
 **createdDateFrom** | **string**| The earliest date of creation of the consignment | [optional]
 **createdDateTo** | **string**| The latest date of creation of the consignment | [optional]
 **scheduledDeliveryDateFrom** | **string**| The earliest scheduled delivery date | [optional]
 **scheduledDeliveryDateTo** | **string**| The latest scheduled delivery date | [optional]
 **shippedDateFrom** | **string**| The earliest shipped date (note this only applies to shipped consignments) | [optional]
 **shippedDateTo** | **string**| The latest shipped date (note this only applies to shipped consignments) | [optional]
 **reference** | **string**| The reference of the consignment. This will return partial matches. | [optional]
 **state** | **string**| The state of the consignment, e.g. Unallocated, Allocated, Manifested | [optional]
 **weightInGramsFrom** | **int**| The lowest weight in grams | [optional]
 **weightInGramsTo** | **int**| The highest weight in grams | [optional]
 **carrierService** | **string**| The reference of the carrier service that the consignment has been allocated to (note: only applies to allocated or shipped consignments) | [optional]
 **source** | **string**| The source of the consignment (e.g. Manual, API, CSV) | [optional]
 **postcode** | **string**| The postcode of the source or destination address. This will return partial matches | [optional]
 **valueFrom** | **float**| The lowest value (currency) of the consignment | [optional]
 **valueTo** | **float**| The highest value (currency) of the consignment | [optional]
 **searchTerm** | **string**| An optional search term | [optional]
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheSpecifiedConsignmentDetails**
> getTheSpecifiedConsignmentDetails($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Returns the specified consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | Consignment reference in the format EC-XXX-XXX-XXX
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTheSpecifiedConsignmentDetails($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getTheSpecifiedConsignmentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| Consignment reference in the format EC-XXX-XXX-XXX |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheSpecifiedConsignmentDetailsByClientReference**
> getTheSpecifiedConsignmentDetailsByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method returns one or more matching consignments that have the supplied client reference. When creating consignments you have the option to specify your own reference. This can be used, for example, to store your own order number.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Note:&nbsp;</strong> <p> This method is still in development. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$clientReference = "clientReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTheSpecifiedConsignmentDetailsByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getTheSpecifiedConsignmentDetailsByClientReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheSpecifiedConsignmentDetailsWithMetadata**
> getTheSpecifiedConsignmentDetailsWithMetadata($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Electio allows you to store your own arbitrary data properties, known as metadata, with your consignments, packages and items.  By default metadata is not returned when calling the standard GetConsignment method. This method allows you to explicitly request a consignment and all associated metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | The reference of the consignment to retrieve
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTheSpecifiedConsignmentDetailsWithMetadata($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getTheSpecifiedConsignmentDetailsWithMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The reference of the consignment to retrieve |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheStatusOfTheSpecifiedConsignment**
> getTheStatusOfTheSpecifiedConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Returns the current status for the specified consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | The consignment reference whose status you want to retrieve
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTheStatusOfTheSpecifiedConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getTheStatusOfTheSpecifiedConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The consignment reference whose status you want to retrieve |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTheStatusOfTheSpecifiedConsignmentSByClientReference**
> getTheStatusOfTheSpecifiedConsignmentSByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey)



Returns the current status for any matching consignments. A client reference can be provided when creating consignments and can apply to one or more consignments.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Note:&nbsp;</strong> <p> This method is still in development. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$clientReference = "clientReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTheStatusOfTheSpecifiedConsignmentSByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->getTheStatusOfTheSpecifiedConsignmentSByClientReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **manifestConsignments**
> manifestConsignments($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to manifest the specified consignment(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->manifestConsignments($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->manifestConsignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePackageFromConsignment**
> removePackageFromConsignment($consignmentReference, $packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Removes the specified package from the consignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$consignmentReference = "consignmentReference_example"; // string | 
$packageReference = "packageReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->removePackageFromConsignment($consignmentReference, $packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->removePackageFromConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**|  |
 **packageReference** | **string**|  |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConsignmentDetails**
> updateConsignmentDetails($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to update details for an existing consignment.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-warning-sign\"></span> <strong>Note:&nbsp;</strong> <p> Some properties are only valid for update on consignments that have not yet been allocated with a carrier. <a href=\"http://docs.electioapp.com/display/EW/Consignments#Consignments-UpdateConsignmentrequestupdateconsignmentrequest\" target=\"_new\">See the documentation for information</a>. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->updateConsignmentDetails($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->updateConsignmentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConsignmentDetailsAlternativeRoute**
> updateConsignmentDetailsAlternativeRoute($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to update details for an existing consignment.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-warning-sign\"></span> <strong>Note:&nbsp;</strong> <p> Some properties are only valid for update on consignments that have not yet been allocated with a carrier. <a href=\"http://docs.electioapp.com/display/EW/Consignments#Consignments-UpdateConsignmentrequestupdateconsignmentrequest\" target=\"_new\">See the documentation for information</a>. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ConsignmentsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->updateConsignmentDetailsAlternativeRoute($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentsApi->updateConsignmentDetailsAlternativeRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

