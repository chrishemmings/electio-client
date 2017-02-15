# ChrisHemmings\ElectioClient\CollectionCalendarApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCollectionCalender**](CollectionCalendarApi.md#getCollectionCalender) | **GET** /CollectionCalendar/{shippingLocation}/{carrierReference} | 


# **getCollectionCalender**
> getCollectionCalender($shippingLocation, $carrierReference, $subscriptionKey, $ocpApimSubscriptionKey)



This operation allows you to view the collection calendar for the specified shipping location and carrier.  You must have at least one shipping location and one subscribed and enabled carrier in order to use the collection calendar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\CollectionCalendarApi();
$shippingLocation = "shippingLocation_example"; // string | The reference of the shipping location
$carrierReference = "carrierReference_example"; // string | The reference of the carrier service
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCollectionCalender($shippingLocation, $carrierReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling CollectionCalendarApi->getCollectionCalender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingLocation** | **string**| The reference of the shipping location |
 **carrierReference** | **string**| The reference of the carrier service |
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

