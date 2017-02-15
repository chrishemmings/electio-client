# ChrisHemmings\ElectioClient\PackagesApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**removeAPackageFromAConsignment**](PackagesApi.md#removeAPackageFromAConsignment) | **DELETE** /Packages/{packageReference} | 
[**splitAPackageIntoMultiplePackages**](PackagesApi.md#splitAPackageIntoMultiplePackages) | **PUT** /Packages/{packageReference}/split | 
[**updateAnExistingPackage**](PackagesApi.md#updateAnExistingPackage) | **PUT** /Packages/{packageReference} | 


# **removeAPackageFromAConsignment**
> removeAPackageFromAConsignment($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Removes a package from an existing consignment.  <div class=\"alert alert-danger\"> <strong>Note: </strong> This is a destructive operation. Once the package is removed from the consignment it no longer exists. </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\PackagesApi();
$packageReference = "packageReference_example"; // string | The reference of the package to remove
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->removeAPackageFromAConsignment($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->removeAPackageFromAConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packageReference** | **string**| The reference of the package to remove |
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

# **splitAPackageIntoMultiplePackages**
> splitAPackageIntoMultiplePackages($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Splits each item in a package into separate packages.  Note that the package in question must contain at least two items in order to be split.  If a package contains three items this operation will result in an additional two packages, each containing one item from the original package. There will therefore be three packages in total.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\PackagesApi();
$packageReference = "packageReference_example"; // string | The reference of the package to split
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->splitAPackageIntoMultiplePackages($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->splitAPackageIntoMultiplePackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packageReference** | **string**| The reference of the package to split |
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

# **updateAnExistingPackage**
> updateAnExistingPackage($packageReference, $subscriptionKey, $ocpApimSubscriptionKey)



Updates an existing package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\PackagesApi();
$packageReference = "packageReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->updateAnExistingPackage($packageReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling PackagesApi->updateAnExistingPackage: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

