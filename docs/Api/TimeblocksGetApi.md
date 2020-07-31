# Swagger\Client\TimeblocksGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TimeblocksGet**](TimeblocksGetApi.md#v3timeblocksget) | **GET** /v3/timeblocks | Retrieves all EPG time blocks.
[**v3TimeblocksIdGet**](TimeblocksGetApi.md#v3timeblocksidget) | **GET** /v3/timeblocks/{id} | Retrieves a single time block with the given identifier.

# **v3TimeblocksGet**
> \Swagger\Client\Model\ResponseTimeBlock[] v3TimeblocksGet()

Retrieves all EPG time blocks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TimeblocksGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3TimeblocksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeblocksGetApi->v3TimeblocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponseTimeBlock[]**](../Model/ResponseTimeBlock.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3TimeblocksIdGet**
> \Swagger\Client\Model\ResponseTimeBlock v3TimeblocksIdGet($id)

Retrieves a single time block with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TimeblocksGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the time block.

try {
    $result = $apiInstance->v3TimeblocksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeblocksGetApi->v3TimeblocksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the time block. |

### Return type

[**\Swagger\Client\Model\ResponseTimeBlock**](../Model/ResponseTimeBlock.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

