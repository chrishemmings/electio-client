# ChrisHemmings\ElectioClient\ItemsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItem**](ItemsApi.md#addItem) | **PUT** /items/{packageReference} | 
[**addItemsToPackageDeprecated**](ItemsApi.md#addItemsToPackageDeprecated) | **POST** /items/additem/{packageReference} | 
[**getItemByReference**](ItemsApi.md#getItemByReference) | **GET** /items/{itemReference} | 
[**getItemsByPackage**](ItemsApi.md#getItemsByPackage) | **GET** /items/package/{packageReference} | 
[**removeItemFromPackage**](ItemsApi.md#removeItemFromPackage) | **DELETE** /items/{packageReference}/{itemReference} | 
[**setCustomerProvidedReferenceByLabelBarcode**](ItemsApi.md#setCustomerProvidedReferenceByLabelBarcode) | **PUT** /items/{labelBarcode}/setCustomerProvidedReference | 


# **addItem**
> addItem($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Add a new item to the existing package identified by the package reference parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$packageReference = "packageReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->addItem($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **addItemsToPackageDeprecated**
> addItemsToPackageDeprecated($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



<div class=\"alert alert-danger\"> <span>This endpoint has been deprecated. Please see <a href=\"https://developer.electioapp.com/docs/services/5633280005885e0db815c316/operations/58a434d02e52190fe03ee982\">the new add item endpoint</a></span> </div>  Given an existing package reference, add new item(s) to the package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$packageReference = "packageReference_example"; // string | The reference of the package to add the item to
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->addItemsToPackageDeprecated($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addItemsToPackageDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packageReference** | **string**| The reference of the package to add the item to |
 **subscriptionKey** | **string**| subscription key in url | [optional]
 **ocpApimSubscriptionKey** | **string**| subscription key in header | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemByReference**
> getItemByReference($itemReference, $subscriptionKey, $ocpApimSubscriptionKey)



Retrieve an individual package by reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$itemReference = "itemReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getItemByReference($itemReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemByReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemReference** | **string**|  |
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

# **getItemsByPackage**
> getItemsByPackage($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve all items for a package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$packageReference = "packageReference_example"; // string | The package reference
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getItemsByPackage($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemsByPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packageReference** | **string**| The package reference |
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

# **removeItemFromPackage**
> removeItemFromPackage($packageReference, $itemReference, $subscriptionKey, $ocpApimSubscriptionKey)



By supplying the reference of an item with a package you can delete / remove the item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$packageReference = "packageReference_example"; // string | 
$itemReference = "itemReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->removeItemFromPackage($packageReference, $itemReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->removeItemFromPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packageReference** | **string**|  |
 **itemReference** | **string**|  |
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

# **setCustomerProvidedReferenceByLabelBarcode**
> setCustomerProvidedReferenceByLabelBarcode($labelBarcode, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to set the field \"ItemReferenceProvidedByCustomer\" for the specified item by passing the label barcode to identify the item.   <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <span><strong>Note:&nbsp;</strong> this will set the provided reference for the <i>first</i> item in the package identified by the label barcode.</span> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\ItemsApi();
$labelBarcode = "labelBarcode_example"; // string | The label barcode
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->setCustomerProvidedReferenceByLabelBarcode($labelBarcode, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->setCustomerProvidedReferenceByLabelBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **labelBarcode** | **string**| The label barcode |
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

