# ChrisHemmings\ElectioClient\LateConsignmentsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLateConsignmentsFromCarrierPointOfView**](LateConsignmentsApi.md#getLateConsignmentsFromCarrierPointOfView) | **GET** /lateconsignments/carrierlate/{dateFrom}/{dateTo} | 
[**getLateConsignmentsFromCustomerPointOfView**](LateConsignmentsApi.md#getLateConsignmentsFromCustomerPointOfView) | **GET** /lateconsignments/customer/{dateFrom}/{dateTo} | 


# **getLateConsignmentsFromCarrierPointOfView**
> getLateConsignmentsFromCarrierPointOfView($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey)



Get late consignments where the carrier has not attempted delivery by the end of the estimated delivery date.  The url takes two route parameters - dateFrom and dateTo. You can use any combination of dates within the last 30 days (provided that the dateTo is greater than or equal to the dateFrom).  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Note:&nbsp;</strong> <p> This method is still in development. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\LateConsignmentsApi();
$dateFrom = "dateFrom_example"; // string | 
$dateTo = "dateTo_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getLateConsignmentsFromCarrierPointOfView($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling LateConsignmentsApi->getLateConsignmentsFromCarrierPointOfView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFrom** | **string**|  |
 **dateTo** | **string**|  |
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

# **getLateConsignmentsFromCustomerPointOfView**
> getLateConsignmentsFromCustomerPointOfView($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to get details of consignments which are not in a successful delivery state by the end of the estimated delivery date.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Note:&nbsp;</strong> <p> This method is still in development. </p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\LateConsignmentsApi();
$dateFrom = "dateFrom_example"; // string | 
$dateTo = "dateTo_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getLateConsignmentsFromCustomerPointOfView($dateFrom, $dateTo, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling LateConsignmentsApi->getLateConsignmentsFromCustomerPointOfView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateFrom** | **string**|  |
 **dateTo** | **string**|  |
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

