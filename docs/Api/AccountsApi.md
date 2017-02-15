# ChrisHemmings\ElectioClient\AccountsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](AccountsApi.md#createAccount) | **POST** /Accounts/ | 
[**generateNewPrimaryAPIKey**](AccountsApi.md#generateNewPrimaryAPIKey) | **PUT** /Accounts/apikeygenerate/primary/{accountReference} | 
[**generateNewSecondaryAPIKey**](AccountsApi.md#generateNewSecondaryAPIKey) | **PUT** /Accounts/apikeygenerate/secondary/{accountReference} | 
[**getAccountByEmailAddress**](AccountsApi.md#getAccountByEmailAddress) | **GET** /Accounts/{emailAddress} | 
[**getAccountByReference**](AccountsApi.md#getAccountByReference) | **GET** /Accounts/{accountReference} | 
[**getCustomersForAccount**](AccountsApi.md#getCustomersForAccount) | **GET** /Accounts/{accountReference}/customers | 
[**inviteAccount**](AccountsApi.md#inviteAccount) | **POST** /Accounts/Invite | 
[**updateAccount**](AccountsApi.md#updateAccount) | **PUT** /Accounts/ | 


# **createAccount**
> createAccount($subscriptionKey, $ocpApimSubscriptionKey)



This operation will create a new account linked to your company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->createAccount($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->createAccount: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateNewPrimaryAPIKey**
> generateNewPrimaryAPIKey($accountReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to generate a new API key for the account reference provided.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-warning\"></span> <strong>Note:&nbsp;</strong> <p> It is only possible to generate a new API key for a user by providing a current valid API key for that user. Each user has two API keys, a primary key and a secondary key, and either key can be used to regenerate either API key.</p> <p>After regenerating an API key it will no longer be possible to authenticate using the previous API key as it is revoked immediately.</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$accountReference = "accountReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->generateNewPrimaryAPIKey($accountReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->generateNewPrimaryAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountReference** | **string**|  |
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

# **generateNewSecondaryAPIKey**
> generateNewSecondaryAPIKey($accountReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to generate a new API key for the account reference provided.  <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-warning\"></span> <strong>Note:&nbsp;</strong> <p> It is only possible to generate a new API key for a user by providing a current valid API key for that user. Each user has two API keys, a primary key and a secondary key, and either key can be used to regenerate either API key.</p> <p>After regenerating an API key it will no longer be possible to authenticate using the previous API key as it is revoked immediately.</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$accountReference = "accountReference_example"; // string | 
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->generateNewSecondaryAPIKey($accountReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->generateNewSecondaryAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountReference** | **string**|  |
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

# **getAccountByEmailAddress**
> getAccountByEmailAddress($emailAddress, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve all details for an account by specifying the email address of the account/user.  <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <span><strong>Note: </strong>The '@' symbol will need to be URL-encoded before being transmitted - the URL-encoded representation of the '@' symbol is '%40'.</span> <p>I.e.Replace<pre>person@domain.com</pre> with <pre>person%40domain.com</pre> </p> </div> <p></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$emailAddress = "emailAddress_example"; // string | The email address of the user
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getAccountByEmailAddress($emailAddress, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountByEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailAddress** | **string**| The email address of the user |
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

# **getAccountByReference**
> getAccountByReference($accountReference, $subscriptionKey, $ocpApimSubscriptionKey)



This allows you to retrieve the details of a selected user/account by providing the user's reference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$accountReference = "accountReference_example"; // string | The reference of the account to retrieve (in GUID format)
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getAccountByReference($accountReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountByReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountReference** | **string**| The reference of the account to retrieve (in GUID format) |
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

# **getCustomersForAccount**
> getCustomersForAccount($accountReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method will return all customers linked to the specified account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$accountReference = "accountReference_example"; // string | The reference of the account to query (in GUID format)
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getCustomersForAccount($accountReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getCustomersForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountReference** | **string**| The reference of the account to query (in GUID format) |
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

# **inviteAccount**
> inviteAccount($subscriptionKey, $ocpApimSubscriptionKey)



This operation allows you to provide some basic details about a new account. The Electio system will then create a token to create this account and email an invite link to the email address specified. The user can then complete the sign up process providing the relevant details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->inviteAccount($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->inviteAccount: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> updateAccount($subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to update the details of an existing account.  <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"></span> <strong>Tip</strong> You can disable or enable an account by changing the 'enabled' flag </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\AccountsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->updateAccount($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->updateAccount: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

