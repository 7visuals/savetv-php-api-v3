# Swagger\Client\ChanneltimeframesGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3ChanneltimeframesGet**](ChanneltimeframesGetApi.md#v3channeltimeframesget) | **GET** /v3/channeltimeframes | Retrieves all available channel time frames.
[**v3ChanneltimeframesIdGet**](ChanneltimeframesGetApi.md#v3channeltimeframesidget) | **GET** /v3/channeltimeframes/{id} | Retrieves a single channel time frame with the given identifier.

# **v3ChanneltimeframesGet**
> \Swagger\Client\Model\ResponseChannelTimeFrame[] v3ChanneltimeframesGet($fields)

Retrieves all available channel time frames.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChanneltimeframesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"endtime, id, name, starttime\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    endtime,    id,    name,    starttime

try {
    $result = $apiInstance->v3ChanneltimeframesGet($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChanneltimeframesGetApi->v3ChanneltimeframesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    endtime,    id,    name,    starttime | [optional] [default to [&quot;endtime, id, name, starttime&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseChannelTimeFrame[]**](../Model/ResponseChannelTimeFrame.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChanneltimeframesIdGet**
> \Swagger\Client\Model\ResponseChannelTimeFrame v3ChanneltimeframesIdGet($id, $fields)

Retrieves a single channel time frame with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChanneltimeframesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the channel time frame.
$fields = array("[\"endtime, id, name, starttime\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    endtime,    id,    name,    starttime

try {
    $result = $apiInstance->v3ChanneltimeframesIdGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChanneltimeframesGetApi->v3ChanneltimeframesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the channel time frame. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    endtime,    id,    name,    starttime | [optional] [default to [&quot;endtime, id, name, starttime&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseChannelTimeFrame**](../Model/ResponseChannelTimeFrame.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

