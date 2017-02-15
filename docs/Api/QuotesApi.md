# ChrisHemmings\ElectioClient\QuotesApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuoteForAConsignment**](QuotesApi.md#createQuoteForAConsignment) | **POST** /quotes/ | 
[**getAPreviouslyGeneratedQuote**](QuotesApi.md#getAPreviouslyGeneratedQuote) | **GET** /quotes/{quoteRequestReference} | 
[**getAQuoteForAnExistingConsignment**](QuotesApi.md#getAQuoteForAnExistingConsignment) | **GET** /quotes/consignment/{consignmentReference} | 


# **createQuoteForAConsignment**
> createQuoteForAConsignment($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to pass a consignment object and generate a quote for it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\QuotesApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->createQuoteForAConsignment($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->createQuoteForAConsignment: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPreviouslyGeneratedQuote**
> getAPreviouslyGeneratedQuote($quoteRequestReference, $subscriptionKey, $ocpApimSubscriptionKey)



When Electio generates a quote for a consignment it is temporarily stored and can be retrieved using this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\QuotesApi();
$quoteRequestReference = "quoteRequestReference_example"; // string | The reference of the quote
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getAPreviouslyGeneratedQuote($quoteRequestReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getAPreviouslyGeneratedQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteRequestReference** | **string**| The reference of the quote |
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

# **getAQuoteForAnExistingConsignment**
> getAQuoteForAnExistingConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to get a quote for a specific consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\QuotesApi();
$consignmentReference = "consignmentReference_example"; // string | Consignment Reference
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getAQuoteForAnExistingConsignment($consignmentReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->getAQuoteForAnExistingConsignment: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

