#
A PHP client for the Electio delivery management system

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/chrishemmings/electio-client.git"
    }
  ],
  "require": {
    "chrishemmings/electio-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.electioapp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**createAccount**](docs/Api/AccountsApi.md#createaccount) | **POST** /Accounts/ |
*AccountsApi* | [**generateNewPrimaryAPIKey**](docs/Api/AccountsApi.md#generatenewprimaryapikey) | **PUT** /Accounts/apikeygenerate/primary/{accountReference} |
*AccountsApi* | [**generateNewSecondaryAPIKey**](docs/Api/AccountsApi.md#generatenewsecondaryapikey) | **PUT** /Accounts/apikeygenerate/secondary/{accountReference} |
*AccountsApi* | [**getAccountByEmailAddress**](docs/Api/AccountsApi.md#getaccountbyemailaddress) | **GET** /Accounts/{emailAddress} |
*AccountsApi* | [**getAccountByReference**](docs/Api/AccountsApi.md#getaccountbyreference) | **GET** /Accounts/{accountReference} |
*AccountsApi* | [**getCustomersForAccount**](docs/Api/AccountsApi.md#getcustomersforaccount) | **GET** /Accounts/{accountReference}/customers |
*AccountsApi* | [**inviteAccount**](docs/Api/AccountsApi.md#inviteaccount) | **POST** /Accounts/Invite |
*AccountsApi* | [**updateAccount**](docs/Api/AccountsApi.md#updateaccount) | **PUT** /Accounts/ |
*AllocationApi* | [**allocateConsignmentsWithASpecificCarrierService**](docs/Api/AllocationApi.md#allocateconsignmentswithaspecificcarrierservice) | **PUT** /Allocation/allocateWithCarrierService |
*AllocationApi* | [**allocateUsingASpecificQuote**](docs/Api/AllocationApi.md#allocateusingaspecificquote) | **PUT** /Allocation/{consignmentReference}/allocateWithQuote/{quoteReference} |
*AllocationApi* | [**allocateUsingDefaultRules**](docs/Api/AllocationApi.md#allocateusingdefaultrules) | **PUT** /Allocation/allocate |
*AllocationApi* | [**allocateWithCarrierServiceGroup**](docs/Api/AllocationApi.md#allocatewithcarrierservicegroup) | **PUT** /Allocation/allocatewithservicegroup |
*AllocationApi* | [**allocateWithCheapestQuote**](docs/Api/AllocationApi.md#allocatewithcheapestquote) | **PUT** /Allocation/{consignmentReference}/allocateWithCheapestQuote |
*CarrierServicesApi* | [**getAvailableCarrierServices**](docs/Api/CarrierServicesApi.md#getavailablecarrierservices) | **GET** /carrierservices/carrierservices |
*CarrierServicesApi* | [**getAvailableMPDCarrierServices**](docs/Api/CarrierServicesApi.md#getavailablempdcarrierservices) | **GET** /carrierservices/ |
*CarriersApi* | [**getCarrierServices**](docs/Api/CarriersApi.md#getcarrierservices) | **GET** /Carriers/ |
*CarriersApi* | [**getCarriers**](docs/Api/CarriersApi.md#getcarriers) | **GET** /Carriers/getcarriers |
*CollectionCalendarApi* | [**getCollectionCalender**](docs/Api/CollectionCalendarApi.md#getcollectioncalender) | **GET** /CollectionCalendar/{shippingLocation}/{carrierReference} |
*ConsignmentCustomersApi* | [**getManifestFile**](docs/Api/ConsignmentCustomersApi.md#getmanifestfile) | **GET** /ConsignmentCustomers/manifest/{reference} |
*ConsignmentCustomersApi* | [**getManifests**](docs/Api/ConsignmentCustomersApi.md#getmanifests) | **GET** /ConsignmentCustomers/manifests |
*ConsignmentsApi* | [**addPackageToConsignment**](docs/Api/ConsignmentsApi.md#addpackagetoconsignment) | **POST** /Consignments/{consignmentReference}/addpackage |
*ConsignmentsApi* | [**addPackagesToAConsignment**](docs/Api/ConsignmentsApi.md#addpackagestoaconsignment) | **POST** /Consignments/{consignmentReference}/addpackages/{numberOfPackages} |
*ConsignmentsApi* | [**cancelAConsignment**](docs/Api/ConsignmentsApi.md#cancelaconsignment) | **PUT** /Consignments/{consignmentReference}/cancel |
*ConsignmentsApi* | [**createANewConsignment**](docs/Api/ConsignmentsApi.md#createanewconsignment) | **POST** /Consignments/ |
*ConsignmentsApi* | [**deAllocateTheSpecifiedConsignment**](docs/Api/ConsignmentsApi.md#deallocatethespecifiedconsignment) | **PUT** /Consignments/{consignmentReference}/deallocate |
*ConsignmentsApi* | [**getACountOfConsignments**](docs/Api/ConsignmentsApi.md#getacountofconsignments) | **GET** /Consignments/count |
*ConsignmentsApi* | [**getASummaryByCarrierInTheDatePeriod**](docs/Api/ConsignmentsApi.md#getasummarybycarrierinthedateperiod) | **GET** /Consignments/summary/courier |
*ConsignmentsApi* | [**getASummaryOfConsignmentsInDatePeriod**](docs/Api/ConsignmentsApi.md#getasummaryofconsignmentsindateperiod) | **GET** /Consignments/summary |
*ConsignmentsApi* | [**getASummaryOfLatePackagesInTheDatePeriod**](docs/Api/ConsignmentsApi.md#getasummaryoflatepackagesinthedateperiod) | **GET** /Consignments/summary/latepackages |
*ConsignmentsApi* | [**getCustomerManifestByReference**](docs/Api/ConsignmentsApi.md#getcustomermanifestbyreference) | **GET** /Consignments/customer/manifest/{manifestReference} |
*ConsignmentsApi* | [**getCustomsDocuments**](docs/Api/ConsignmentsApi.md#getcustomsdocuments) | **GET** /Consignments/docs/{consignmentReference} |
*ConsignmentsApi* | [**getManifests**](docs/Api/ConsignmentsApi.md#getmanifests) | **GET** /Consignments/customer/manifests |
*ConsignmentsApi* | [**getMultipleConsignmentDetails**](docs/Api/ConsignmentsApi.md#getmultipleconsignmentdetails) | **GET** /Consignments/{take}/{skip} |
*ConsignmentsApi* | [**getTheSpecifiedConsignmentDetails**](docs/Api/ConsignmentsApi.md#getthespecifiedconsignmentdetails) | **GET** /Consignments/{consignmentReference} |
*ConsignmentsApi* | [**getTheSpecifiedConsignmentDetailsByClientReference**](docs/Api/ConsignmentsApi.md#getthespecifiedconsignmentdetailsbyclientreference) | **GET** /Consignments/clientReference/{clientReference} |
*ConsignmentsApi* | [**getTheSpecifiedConsignmentDetailsWithMetadata**](docs/Api/ConsignmentsApi.md#getthespecifiedconsignmentdetailswithmetadata) | **GET** /Consignments/getconsignmentwithmetadata/{consignmentReference} |
*ConsignmentsApi* | [**getTheStatusOfTheSpecifiedConsignment**](docs/Api/ConsignmentsApi.md#getthestatusofthespecifiedconsignment) | **GET** /Consignments/{consignmentReference}/status |
*ConsignmentsApi* | [**getTheStatusOfTheSpecifiedConsignmentSByClientReference**](docs/Api/ConsignmentsApi.md#getthestatusofthespecifiedconsignmentsbyclientreference) | **GET** /Consignments/clientReference/{clientReference}/status |
*ConsignmentsApi* | [**manifestConsignments**](docs/Api/ConsignmentsApi.md#manifestconsignments) | **PUT** /Consignments/manifest |
*ConsignmentsApi* | [**removePackageFromConsignment**](docs/Api/ConsignmentsApi.md#removepackagefromconsignment) | **POST** /Consignments/{consignmentReference}/removepackage/{packageReference} |
*ConsignmentsApi* | [**updateConsignmentDetails**](docs/Api/ConsignmentsApi.md#updateconsignmentdetails) | **PUT** /Consignments/update |
*ConsignmentsApi* | [**updateConsignmentDetailsAlternativeRoute**](docs/Api/ConsignmentsApi.md#updateconsignmentdetailsalternativeroute) | **PUT** /Consignments/ |
*DeliveryOptionsApi* | [**getDeliveryOptionDetails**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptiondetails) | **GET** /deliveryoptions/details/{reference} |
*DeliveryOptionsApi* | [**getDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptions) | **POST** /deliveryoptions/ |
*DeliveryOptionsApi* | [**getDeliveryOptionsForExistingConsignment**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptionsforexistingconsignment) | **GET** /deliveryoptions/consignment/{consignmentReference} |
*DeliveryOptionsApi* | [**getDeliveryOptionsSummary**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptionssummary) | **POST** /deliveryoptions/summary |
*DeliveryOptionsApi* | [**getExistingDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getexistingdeliveryoptions) | **GET** /deliveryoptions/{reference} |
*DeliveryOptionsApi* | [**getPickupOptions**](docs/Api/DeliveryOptionsApi.md#getpickupoptions) | **POST** /deliveryoptions/pickupoptions |
*DeliveryOptionsApi* | [**getPickupOptionsForExistingConsignment**](docs/Api/DeliveryOptionsApi.md#getpickupoptionsforexistingconsignment) | **GET** /deliveryoptions/pickupOptions/consignment/{consignmentReference} |
*DeliveryOptionsApi* | [**heartbeat**](docs/Api/DeliveryOptionsApi.md#heartbeat) | **POST** /deliveryoptions/heartbeat |
*DeliveryOptionsApi* | [**reservePickupLocation**](docs/Api/DeliveryOptionsApi.md#reservepickuplocation) | **POST** /deliveryoptions/reserve/{pickupOptionReference} |
*DeliveryOptionsApi* | [**selectDeliveryOption**](docs/Api/DeliveryOptionsApi.md#selectdeliveryoption) | **POST** /deliveryoptions/select/{reference} |
*DocumentsApi* | [**getLabelsForConsignment**](docs/Api/DocumentsApi.md#getlabelsforconsignment) | **GET** /documents/labels/{consignmentReference} |
*ItemsApi* | [**addItem**](docs/Api/ItemsApi.md#additem) | **PUT** /items/{packageReference} |
*ItemsApi* | [**getItemByReference**](docs/Api/ItemsApi.md#getitembyreference) | **GET** /items/{itemReference} |
*ItemsApi* | [**getItemsByPackage**](docs/Api/ItemsApi.md#getitemsbypackage) | **GET** /items/package/{packageReference} |
*ItemsApi* | [**removeItemFromPackage**](docs/Api/ItemsApi.md#removeitemfrompackage) | **DELETE** /items/{packageReference}/{itemReference} |
*ItemsApi* | [**setCustomerProvidedReferenceByLabelBarcode**](docs/Api/ItemsApi.md#setcustomerprovidedreferencebylabelbarcode) | **PUT** /items/{labelBarcode}/setCustomerProvidedReference |
*LabelGenerationApi* | [**getLabelsByConsignmentReference**](docs/Api/LabelGenerationApi.md#getlabelsbyconsignmentreference) | **GET** /labels/{consignmentReference} |
*LabelGenerationApi* | [**getLabelsByPackageReference**](docs/Api/LabelGenerationApi.md#getlabelsbypackagereference) | **GET** /labels/{consignmentReference}/{packageReference} |
*LateConsignmentsApi* | [**getLateConsignmentsFromCarrierPointOfView**](docs/Api/LateConsignmentsApi.md#getlateconsignmentsfromcarrierpointofview) | **GET** /lateconsignments/carrierlate/{dateFrom}/{dateTo} |
*LateConsignmentsApi* | [**getLateConsignmentsFromCustomerPointOfView**](docs/Api/LateConsignmentsApi.md#getlateconsignmentsfromcustomerpointofview) | **GET** /lateconsignments/customer/{dateFrom}/{dateTo} |
*PackageSizesApi* | [**createPackageSize**](docs/Api/PackageSizesApi.md#createpackagesize) | **POST** /packagesizes/ |
*PackageSizesApi* | [**deletePackageSize**](docs/Api/PackageSizesApi.md#deletepackagesize) | **DELETE** /packagesizes/{packageSizeReference} |
*PackageSizesApi* | [**getDefaultPackageSize**](docs/Api/PackageSizesApi.md#getdefaultpackagesize) | **GET** /packagesizes/default |
*PackageSizesApi* | [**getPackageSizes**](docs/Api/PackageSizesApi.md#getpackagesizes) | **GET** /packagesizes/ |
*PackageSizesApi* | [**setDefaultPackageSize**](docs/Api/PackageSizesApi.md#setdefaultpackagesize) | **PUT** /packagesizes/{packageSizeReference}/default |
*PackageSizesApi* | [**updatePackageSize**](docs/Api/PackageSizesApi.md#updatepackagesize) | **PUT** /packagesizes/{packageSizeReference} |
*PackagesApi* | [**removeAPackageFromAConsignment**](docs/Api/PackagesApi.md#removeapackagefromaconsignment) | **DELETE** /Packages/{packageReference} |
*PackagesApi* | [**splitAPackageIntoMultiplePackages**](docs/Api/PackagesApi.md#splitapackageintomultiplepackages) | **PUT** /Packages/{packageReference}/split |
*PackagesApi* | [**updateAnExistingPackage**](docs/Api/PackagesApi.md#updateanexistingpackage) | **PUT** /Packages/{packageReference} |
*QuotesApi* | [**createQuoteForAConsignment**](docs/Api/QuotesApi.md#createquoteforaconsignment) | **POST** /quotes/ |
*QuotesApi* | [**getAPreviouslyGeneratedQuote**](docs/Api/QuotesApi.md#getapreviouslygeneratedquote) | **GET** /quotes/{quoteRequestReference} |
*QuotesApi* | [**getAQuoteForAnExistingConsignment**](docs/Api/QuotesApi.md#getaquoteforanexistingconsignment) | **GET** /quotes/consignment/{consignmentReference} |
*QuotesProductionApi* | [**getAPreviouslyGeneratedQuote**](docs/Api/QuotesProductionApi.md#getapreviouslygeneratedquote) | **GET** /Prod/Quotes/{quoteRequestReference} |
*QuotesProductionApi* | [**getAQuoteForAnExistingConsignment**](docs/Api/QuotesProductionApi.md#getaquoteforanexistingconsignment) | **GET** /Prod/Quotes/consignment/{consignmentReference} |
*RolesApi* | [**addAccountToRole**](docs/Api/RolesApi.md#addaccounttorole) | **PUT** /roles/{roleReference}/accounts/{accountReference} |
*RolesApi* | [**createCustomRole**](docs/Api/RolesApi.md#createcustomrole) | **POST** /roles/custom |
*RolesApi* | [**deleteRole**](docs/Api/RolesApi.md#deleterole) | **DELETE** /roles/{roleReference} |
*RolesApi* | [**getAccountsInRole**](docs/Api/RolesApi.md#getaccountsinrole) | **GET** /roles/{roleReference}/accounts |
*RolesApi* | [**removeRoleFromAccount**](docs/Api/RolesApi.md#removerolefromaccount) | **DELETE** /roles/{roleReference}/accounts/{accountReference} |
*RolesApi* | [**updateRole**](docs/Api/RolesApi.md#updaterole) | **PUT** /roles/ |
*SecurityApi* | [**changePassword**](docs/Api/SecurityApi.md#changepassword) | **PUT** /Security/ChangePassword |
*SecurityApi* | [**createPasswordResetToken**](docs/Api/SecurityApi.md#createpasswordresettoken) | **POST** /Security/CreatePasswordReset |
*SecurityApi* | [**getAllPermissions**](docs/Api/SecurityApi.md#getallpermissions) | **GET** /Security/permissions |
*SecurityApi* | [**setPassword**](docs/Api/SecurityApi.md#setpassword) | **PUT** /Security/SetPassword |
*SecurityApi* | [**signOut**](docs/Api/SecurityApi.md#signout) | **PUT** /Security/SignOut |
*ServiceGroupsApi* | [**createServiceGroup**](docs/Api/ServiceGroupsApi.md#createservicegroup) | **POST** /servicegroups/ |
*ServiceGroupsApi* | [**deleteServiceGroup**](docs/Api/ServiceGroupsApi.md#deleteservicegroup) | **DELETE** /servicegroups/{serviceGroupReference} |
*ServiceGroupsApi* | [**getServiceGroup**](docs/Api/ServiceGroupsApi.md#getservicegroup) | **GET** /servicegroups/{serviceGroupReference} |
*ServiceGroupsApi* | [**getServiceGroupSummaries**](docs/Api/ServiceGroupsApi.md#getservicegroupsummaries) | **GET** /servicegroups/summaries |
*ServiceGroupsApi* | [**getServiceGroupSummary**](docs/Api/ServiceGroupsApi.md#getservicegroupsummary) | **GET** /servicegroups/summary/{serviceGroupReference} |
*ServiceGroupsApi* | [**getServiceGroups**](docs/Api/ServiceGroupsApi.md#getservicegroups) | **GET** /servicegroups/ |
*ServiceGroupsApi* | [**updateServiceGroup**](docs/Api/ServiceGroupsApi.md#updateservicegroup) | **PUT** /servicegroups/{serviceGroupReference} |
*ShippingLocationsApi* | [**getAssignedShippingLocations**](docs/Api/ShippingLocationsApi.md#getassignedshippinglocations) | **GET** /shippingLocations/assigned |
*ShippingLocationsApi* | [**getShippingLocations**](docs/Api/ShippingLocationsApi.md#getshippinglocations) | **GET** /shippingLocations/ |
*StaticDataApi* | [**getCountries**](docs/Api/StaticDataApi.md#getcountries) | **GET** /staticdata/countries |
*StaticDataApi* | [**getCurrencies**](docs/Api/StaticDataApi.md#getcurrencies) | **GET** /staticdata/currencies |
*StaticDataApi* | [**getPermissions**](docs/Api/StaticDataApi.md#getpermissions) | **GET** /staticdata/permissions |
*StaticDataApi* | [**getTimezones**](docs/Api/StaticDataApi.md#gettimezones) | **GET** /staticdata/timezones |
*StaticDataApi* | [**getTitles**](docs/Api/StaticDataApi.md#gettitles) | **GET** /staticdata/titles |
*TrackingApi* | [**getFlattenedTrackingEvents**](docs/Api/TrackingApi.md#getflattenedtrackingevents) | **GET** /tracking/flattened/{consignmentReference} |
*TrackingApi* | [**getTrackingEventsByClientReference**](docs/Api/TrackingApi.md#gettrackingeventsbyclientreference) | **GET** /tracking/clientreference/{clientReference} |
*TrackingApi* | [**getTrackingEventsByConsignmentReference**](docs/Api/TrackingApi.md#gettrackingeventsbyconsignmentreference) | **GET** /tracking/{consignmentReference} |


## Credits

- [Chris Hemmings](https://github.com/chrishemmings)
- [All Contributors](https://github.com/chrishemmings/electio-client/contributors)


## License

The MIT License (MIT). Please see [License File](https://github.com/chrishemmings/election-client/blob/master/LICENSE) for more information.
