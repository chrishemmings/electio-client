# ChrisHemmings\ElectioClient\LabelGenerationApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLabelsByConsignmentReference**](LabelGenerationApi.md#getLabelsByConsignmentReference) | **GET** /labels/{consignmentReference} | 
[**getLabelsByPackageReference**](LabelGenerationApi.md#getLabelsByPackageReference) | **GET** /labels/{consignmentReference}/{packageReference} | 


# **getLabelsByConsignmentReference**
> getLabelsByConsignmentReference($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



Get the labels for the specified consignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\LabelGenerationApi();
$consignmentReference = "consignmentReference_example"; // string | The reference of the consignment to retrieve labels for
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getLabelsByConsignmentReference($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling LabelGenerationApi->getLabelsByConsignmentReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The reference of the consignment to retrieve labels for |
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

# **getLabelsByPackageReference**
> getLabelsByPackageReference($consignmentReference, $packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Get the labels for the specified package within specified consignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\LabelGenerationApi();
$consignmentReference = "consignmentReference_example"; // string | 
$packageReference = "packageReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getLabelsByPackageReference($consignmentReference, $packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling LabelGenerationApi->getLabelsByPackageReference: ', $e->getMessage(), PHP_EOL;
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

