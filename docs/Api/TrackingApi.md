# ChrisHemmings\ElectioClient\TrackingApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFlattenedTrackingEvents**](TrackingApi.md#getFlattenedTrackingEvents) | **GET** /tracking/flattened/{consignmentReference} | 
[**getTrackingEventsByClientReference**](TrackingApi.md#getTrackingEventsByClientReference) | **GET** /tracking/clientreference/{clientReference} | 
[**getTrackingEventsByConsignmentReference**](TrackingApi.md#getTrackingEventsByConsignmentReference) | **GET** /tracking/{consignmentReference} | 


# **getFlattenedTrackingEvents**
> getFlattenedTrackingEvents($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\TrackingApi();
$consignmentReference = "consignmentReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getFlattenedTrackingEvents($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getFlattenedTrackingEvents: ', $e->getMessage(), PHP_EOL;
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

# **getTrackingEventsByClientReference**
> getTrackingEventsByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method enables you to get tracking for consignments / packages by your own provided reference. The response will include tracking events for all matching consignments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\TrackingApi();
$clientReference = "clientReference_example"; // string | Your reference - may apply to multiple consignments
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTrackingEventsByClientReference($clientReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getTrackingEventsByClientReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientReference** | **string**| Your reference - may apply to multiple consignments |
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

# **getTrackingEventsByConsignmentReference**
> getTrackingEventsByConsignmentReference($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to view the tracking events for a particular consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\TrackingApi();
$consignmentReference = "consignmentReference_example"; // string | Consignment Reference
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getTrackingEventsByConsignmentReference($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getTrackingEventsByConsignmentReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| Consignment Reference |
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

