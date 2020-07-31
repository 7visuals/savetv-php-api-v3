# Swagger\Client\RecordstatesGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3RecordstatesGet**](RecordstatesGetApi.md#v3recordstatesget) | **GET** /v3/recordstates | Retrieves all available record states.
[**v3RecordstatesIdGet**](RecordstatesGetApi.md#v3recordstatesidget) | **GET** /v3/recordstates/{id} | Retrieves a single record state with the given identifier.

# **v3RecordstatesGet**
> \Swagger\Client\Model\ResponseRecordState[] v3RecordstatesGet()

Retrieves all available record states.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordstatesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3RecordstatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordstatesGetApi->v3RecordstatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponseRecordState[]**](../Model/ResponseRecordState.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordstatesIdGet**
> \Swagger\Client\Model\ResponseRecordState v3RecordstatesIdGet($id)

Retrieves a single record state with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordstatesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The record state identifier.

try {
    $result = $apiInstance->v3RecordstatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordstatesGetApi->v3RecordstatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record state identifier. |

### Return type

[**\Swagger\Client\Model\ResponseRecordState**](../Model/ResponseRecordState.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

