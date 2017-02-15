# ChrisHemmings\ElectioClient\DeliveryOptionsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeliveryOptionDetails**](DeliveryOptionsApi.md#getDeliveryOptionDetails) | **GET** /deliveryoptions/details/{reference} | 
[**getDeliveryOptions**](DeliveryOptionsApi.md#getDeliveryOptions) | **POST** /deliveryoptions/ | 
[**getDeliveryOptionsForExistingConsignment**](DeliveryOptionsApi.md#getDeliveryOptionsForExistingConsignment) | **GET** /deliveryoptions/consignment/{consignmentReference} | 
[**getDeliveryOptionsSummary**](DeliveryOptionsApi.md#getDeliveryOptionsSummary) | **POST** /deliveryoptions/summary | 
[**getExistingDeliveryOptions**](DeliveryOptionsApi.md#getExistingDeliveryOptions) | **GET** /deliveryoptions/{reference} | 
[**getPickupOptions**](DeliveryOptionsApi.md#getPickupOptions) | **POST** /deliveryoptions/pickupoptions | 
[**getPickupOptionsForExistingConsignment**](DeliveryOptionsApi.md#getPickupOptionsForExistingConsignment) | **GET** /deliveryoptions/pickupOptions/consignment/{consignmentReference} | 
[**heartbeat**](DeliveryOptionsApi.md#heartbeat) | **POST** /deliveryoptions/heartbeat | 
[**reservePickupLocation**](DeliveryOptionsApi.md#reservePickupLocation) | **POST** /deliveryoptions/reserve/{pickupOptionReference} | 
[**selectDeliveryOption**](DeliveryOptionsApi.md#selectDeliveryOption) | **POST** /deliveryoptions/select/{reference} | 


# **getDeliveryOptionDetails**
> getDeliveryOptionDetails($reference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve a previously created delivery option, including the details of the consignment and the selected delivery option.  When retrieving Delivery Options or Pickup Options each available option will include its own unique <code>reference</code> property. This reference is the <code>reference</code> parameter for this endpoint. </p> <p>For more information see the <a href=\"http://docs.electioapp.com/display/EW/Delivery+Options\">Delivery Options section of the Electio documentation portal</a>.</p> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$reference = "reference_example"; // string | The reference of the delivery option or pickup option to retrieve
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getDeliveryOptionDetails($reference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of the delivery option or pickup option to retrieve |
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

# **getDeliveryOptions**
> getDeliveryOptions($subscriptionKey, $ocpApimSubscriptionKey)



Get delivery options.   <div class=\"alert alert-info\"> <div><span class=\"glyphicon glyphicon-info-sign\"></span> &nbsp; The data contract for this request is a <a href=\"http://docs.electioapp.com/display/EW/Delivery+Options#DeliveryOptions-deliveryoptionsrequest\">Delivery Options Request</a>.</div> <div>&nbsp;</div> <div> Note that the optional parameters <code>GuaranteedOnly</code> and <code>DeliveryDate</code> are part of the request body </div>  </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getDeliveryOptions($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptions: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryOptionsForExistingConsignment**
> getDeliveryOptionsForExistingConsignment($consignmentReference, $deliveryDate, $guaranteedOnly, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve delivery options for an existing consignment.  <div class=\"alert alert-info\"> <span class=\"glyphicon glyphicon-info-sign\"> </span> <span> Note: to retrieve delivery options for a specified delivery date you can specify the deliveryDate parameter: <pre> &deliveryDate=2016-01-01 </pre> </span> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$consignmentReference = "consignmentReference_example"; // string | The reference of the consignment to retrieve delivery options for
$deliveryDate = "deliveryDate_example"; // string | The date to retrieve delivery options for
$guaranteedOnly = true; // bool | A flag to indicate that the response should include only guaranteed delivery options
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getDeliveryOptionsForExistingConsignment($consignmentReference, $deliveryDate, $guaranteedOnly, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptionsForExistingConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The reference of the consignment to retrieve delivery options for |
 **deliveryDate** | **string**| The date to retrieve delivery options for | [optional]
 **guaranteedOnly** | **bool**| A flag to indicate that the response should include only guaranteed delivery options | [optional]
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

# **getDeliveryOptionsSummary**
> getDeliveryOptionsSummary($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve an availability summary for the specified consignment details.  For instance, you might send the details of a consignment from location A to location B with specified dimensions.  The method will return a list of dates upon which various service types are available.  This can be used, for example, to populate a calendar in your own UI to enable \"drill down\" into delivery options for a specific date.   <div class=\"alert alert-info\"> <div><span class=\"glyphicon glyphicon-info-sign\"></span> &nbsp; The data contract for this request is a <a href=\"http://docs.electioapp.com/display/EW/Delivery+Options#DeliveryOptions-deliveryoptionsrequest\">Delivery Options Request</a>.</div> <div>&nbsp;</div> <div> Note that the parameters <code>GuaranteedOnly</code> and <code>DeliveryDate</code> are part of the request body </div> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$startFrom = "startFrom_example"; // string | The date to start the availability summary from. Defaults to today if not specified
$endAt = "endAt_example"; // string | The last date for which you want to retrieve availability. If not specified, this defaults to the Customer's default setting if configured, otherwise a system default of today + 14 days.
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getDeliveryOptionsSummary($startFrom, $endAt, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptionsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startFrom** | **string**| The date to start the availability summary from. Defaults to today if not specified | [optional]
 **endAt** | **string**| The last date for which you want to retrieve availability. If not specified, this defaults to the Customer&#39;s default setting if configured, otherwise a system default of today + 14 days. | [optional]
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

# **getExistingDeliveryOptions**
> getExistingDeliveryOptions($reference, $deliveryDate, $subscriptionKey, $ocpApimSubscriptionKey)



<div class=\"alert alert-info\"> <div> <span class=\"glyphicon glyphicon-info-sign\"></span>&nbsp; This method is designed to follow the <a href=\"/docs/services/5631fa8605885e1e40ba9e1e/operations/56d01063b438bb13181eea77\">Get Delivery Options summary</a> method and allows you to use the <code>reference</code> returned from that method and an available date to retrieve the delivery options that correspond to that date. </div> The <code>reference</code> has the format <code>EPC-XXX-XXX-XXX</code> where <code>X</code> is an alphanumeric character. </div> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$reference = "reference_example"; // string | The reference returned from the Get Delivery Options Summary operation
$deliveryDate = "deliveryDate_example"; // string | The date to return a delivery option for
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getExistingDeliveryOptions($reference, $deliveryDate, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getExistingDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference returned from the Get Delivery Options Summary operation |
 **deliveryDate** | **string**| The date to return a delivery option for |
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

# **getPickupOptions**
> getPickupOptions($subscriptionKey, $ocpApimSubscriptionKey)



This operation allow you to retrieve a list of options for pick up locations for the given consignment details.  <div class=\"alert alert-info\"> <div> <span class=\"glyphicon glyphicon-info-sign\"></span> &nbsp; The request body for this endpoint is a <a href=\"http://docs.electioapp.com/display/EW/Delivery+Options#DeliveryOptions-PickupOptionsRequestpickupoptionsrequest\">Pickup Options Request</a>. </div> <div> Note that this request body includes the following parameters in addition to the details of the consignment: <ul> <li><code>Guaranteed only</code> : a boolean flag to indicate whether the results should include guaranteed services only</li> <li><code>DeliveryDate</code> : the date by which the consignment is to be delivery to the pick up location</li> <li><code>Radius</code> : the distance in kilometres from the recipient's location</li> <li><code>MaxResults</code> : the maximum number of results to return</li> </ul> </div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getPickupOptions($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getPickupOptions: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPickupOptionsForExistingConsignment**
> getPickupOptionsForExistingConsignment($consignmentReference, $deliveryDate, $guaranteedOnly, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to retrieve pickup location / delivery options for a pre-existing consignment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$consignmentReference = "consignmentReference_example"; // string | The reference of the consignment to retrieve pickup location options for
$deliveryDate = "deliveryDate_example"; // string | An optional parameter that allows you to retrieve pickup locations for a specific delivery date only.
$guaranteedOnly = true; // bool | A flag that allows you to specify that results returned should be for guaranteed services only
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->getPickupOptionsForExistingConsignment($consignmentReference, $deliveryDate, $guaranteedOnly, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getPickupOptionsForExistingConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignmentReference** | **string**| The reference of the consignment to retrieve pickup location options for |
 **deliveryDate** | **string**| An optional parameter that allows you to retrieve pickup locations for a specific delivery date only. | [optional]
 **guaranteedOnly** | **bool**| A flag that allows you to specify that results returned should be for guaranteed services only | [optional]
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

# **heartbeat**
> heartbeat($subscriptionKey, $ocpApimSubscriptionKey)



Test delivery options by passing in a valid delivery option request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->heartbeat($subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->heartbeat: ', $e->getMessage(), PHP_EOL;
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

# **reservePickupLocation**
> reservePickupLocation($pickupOptionReference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to reserve a pickup location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$pickupOptionReference = "pickupOptionReference_example"; // string | The reference of the location / option to reserve
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->reservePickupLocation($pickupOptionReference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->reservePickupLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pickupOptionReference** | **string**| The reference of the location / option to reserve |
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

# **selectDeliveryOption**
> selectDeliveryOption($reference, $subscriptionKey, $ocpApimSubscriptionKey)



This method allows you to select a delivery option or pickup option.  The response depends upon whether the specified delivery or pickup option corresponds to a new or existing consignment.  If the option is for a new consignment, the consignment is created and allocated with the specified delivery option.  If the option is for an existing consignment, the original consignment is allocated with the specified delivery option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new ChrisHemmings\ElectioClient\Api\DeliveryOptionsApi();
$reference = "reference_example"; // string | The reference of the delivery option or pickup option to select
$subscriptionKey = "subscriptionKey_example"; // string | subscription key in url
$ocpApimSubscriptionKey = "ocpApimSubscriptionKey_example"; // string | subscription key in header

try {
    $api_instance->selectDeliveryOption($reference, $subscriptionKey, $ocpApimSubscriptionKey);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->selectDeliveryOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| The reference of the delivery option or pickup option to select |
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

