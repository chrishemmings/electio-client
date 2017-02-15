# ChrisHemmings\ElectioClient\ServiceGroupsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createServiceGroup**](ServiceGroupsApi.md#createServiceGroup) | **POST** /servicegroups/ | 
[**deleteServiceGroup**](ServiceGroupsApi.md#deleteServiceGroup) | **DELETE** /servicegroups/{serviceGroupReference} | 
[**getServiceGroup**](ServiceGroupsApi.md#getServiceGroup) | **GET** /servicegroups/{serviceGroupReference} | 
[**getServiceGroupSummaries**](ServiceGroupsApi.md#getServiceGroupSummaries) | **GET** /servicegroups/summaries | 
[**getServiceGroupSummary**](ServiceGroupsApi.md#getServiceGroupSummary) | **GET** /servicegroups/summary/{serviceGroupReference} | 
[**getServiceGroups**](ServiceGroupsApi.md#getServiceGroups) | **GET** /servicegroups/ | 
[**updateServiceGroup**](ServiceGroupsApi.md#updateServiceGroup) | **PUT** /servicegroups/{serviceGroupReference} | 


# **createServiceGroup**
> createServiceGroup($subscriptionKey, $ocpApimSubscriptionKey)



Creates a new service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->createServiceGroup($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->createServiceGroup: ', $e->getMessage(), PHP_EOL;
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

# **deleteServiceGroup**
> deleteServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey)



Deletes the specified service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$serviceGroupReference = "serviceGroupReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->deleteServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->deleteServiceGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceGroupReference** | **string**|  |
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

# **getServiceGroup**
> getServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey)



Returns the specified service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$serviceGroupReference = "serviceGroupReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->getServiceGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceGroupReference** | **string**|  |
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

# **getServiceGroupSummaries**
> getServiceGroupSummaries($subscriptionKey, $ocpApimSubscriptionKey)



Returns a list of service group summaries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getServiceGroupSummaries($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->getServiceGroupSummaries: ', $e->getMessage(), PHP_EOL;
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

# **getServiceGroupSummary**
> getServiceGroupSummary($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey)



Gets a summary for the specified service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$serviceGroupReference = "serviceGroupReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getServiceGroupSummary($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->getServiceGroupSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceGroupReference** | **string**|  |
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

# **getServiceGroups**
> getServiceGroups($subscriptionKey, $ocpApimSubscriptionKey)



Returns all current carrier service groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getServiceGroups($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->getServiceGroups: ', $e->getMessage(), PHP_EOL;
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

# **updateServiceGroup**
> updateServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey)



Updates the specified service group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ServiceGroupsApi();
$serviceGroupReference = "serviceGroupReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->updateServiceGroup($serviceGroupReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->updateServiceGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceGroupReference** | **string**|  |
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

