# Swagger\Client\PlaylisttypesGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3PlaylisttypesGet**](PlaylisttypesGetApi.md#v3playlisttypesget) | **GET** /v3/playlisttypes | Gets details about the available playlist types.

# **v3PlaylisttypesGet**
> \Swagger\Client\Model\ResponsePlaylistType[] v3PlaylisttypesGet()

Gets details about the available playlist types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylisttypesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3PlaylisttypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylisttypesGetApi->v3PlaylisttypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponsePlaylistType[]**](../Model/ResponsePlaylistType.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

