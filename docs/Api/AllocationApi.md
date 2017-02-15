# ChrisHemmings\ElectioClient\AllocationApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocateConsignmentsWithASpecificCarrierService**](AllocationApi.md#allocateConsignmentsWithASpecificCarrierService) | **PUT** /Allocation/allocateWithCarrierService | 
[**allocateUsingASpecificQuote**](AllocationApi.md#allocateUsingASpecificQuote) | **PUT** /Allocation/{consignmentReference}/allocateWithQuote/{quoteReference} | 
[**allocateUsingDefaultRules**](AllocationApi.md#allocateUsingDefaultRules) | **PUT** /Allocation/allocate | 
[**allocateWithCarrierServiceGroup**](AllocationApi.md#allocateWithCarrierServiceGroup) | **PUT** /Allocation/allocatewithservicegroup | 
[**allocateWithCheapestQuote**](AllocationApi.md#allocateWithCheapestQuote) | **PUT** /Allocation/{consignmentReference}/allocateWithCheapestQuote | 


# **allocateConsignmentsWithASpecificCarrierService**
> allocateConsignmentsWithASpecificCarrierService($subscriptionKey, $ocpApimSubscriptionKey)



This operation allows you to specify a list of consignment references and a Carrier Service code to allocate all listed consignments with the specified Carrier Service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AllocationApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->allocateConsignmentsWithASpecificCarrierService($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateConsignmentsWithASpecificCarrierService: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocateUsingASpecificQuote**
> allocateUsingASpecificQuote($consignmentReference, $quoteReference, $subscriptionKey, $ocpApimSubscriptionKey)



This allows you to allocate a consignment with a specific quote you have previously retrieved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AllocationApi();
$consignmentReference = "consignmentReference_example"; // string | Consignment Reference
$quoteReference = "quoteReference_example"; // string | Quote Reference
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->allocateUsingASpecificQuote($consignmentReference, $quoteReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateUsingASpecificQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| Consignment Reference |
 **quoteReference** | **string**| Quote Reference |
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

# **allocateUsingDefaultRules**
> allocateUsingDefaultRules($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to allocate the specified consignment(s) using the default rules.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AllocationApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->allocateUsingDefaultRules($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateUsingDefaultRules: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocateWithCarrierServiceGroup**
> allocateWithCarrierServiceGroup($subscriptionKey, $ocpApimSubscriptionKey)



Allocates the specified consignment(s) with the specified carrier service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AllocationApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->allocateWithCarrierServiceGroup($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithCarrierServiceGroup: ', $e->getMessage(), PHP_EOL;
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

# **allocateWithCheapestQuote**
> allocateWithCheapestQuote($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



This automatically allocated the specified consignment with the cheapest quote available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AllocationApi();
$consignmentReference = "consignmentReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->allocateWithCheapestQuote($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithCheapestQuote: ', $e->getMessage(), PHP_EOL;
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

