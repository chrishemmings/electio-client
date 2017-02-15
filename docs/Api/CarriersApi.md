# ChrisHemmings\ElectioClient\CarriersApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCarrierServices**](CarriersApi.md#getCarrierServices) | **GET** /Carriers/ | 
[**getCarriers**](CarriersApi.md#getCarriers) | **GET** /Carriers/getcarriers | 


# **getCarrierServices**
> getCarrierServices($subscriptionKey, $ocpApimSubscriptionKey)



This endpoint returns the current carrier services configured for your subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\CarriersApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCarrierServices($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarrierServices: ', $e->getMessage(), PHP_EOL;
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

# **getCarriers**
> getCarriers($subscriptionKey, $ocpApimSubscriptionKey)



This endpoint will return a list of configured Carriers within Electio.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\CarriersApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCarriers($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->getCarriers: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

