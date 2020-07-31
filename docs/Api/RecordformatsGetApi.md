# Swagger\Client\RecordformatsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3RecordformatsGet**](RecordformatsGetApi.md#v3recordformatsget) | **GET** /v3/recordformats | Retrieves all available record formats.
[**v3RecordformatsIdGet**](RecordformatsGetApi.md#v3recordformatsidget) | **GET** /v3/recordformats/{id} | Retrieves a single record format with the given identifier.

# **v3RecordformatsGet**
> \Swagger\Client\Model\ResponseRecordFormat[] v3RecordformatsGet($sort)

Retrieves all available record formats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordformatsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority

try {
    $result = $apiInstance->v3RecordformatsGet($sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordformatsGetApi->v3RecordformatsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordFormat[]**](../Model/ResponseRecordFormat.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordformatsIdGet**
> \Swagger\Client\Model\ResponseRecordFormat v3RecordformatsIdGet($id)

Retrieves a single record format with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordformatsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the record format.

try {
    $result = $apiInstance->v3RecordformatsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordformatsGetApi->v3RecordformatsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the record format. |

### Return type

[**\Swagger\Client\Model\ResponseRecordFormat**](../Model/ResponseRecordFormat.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

