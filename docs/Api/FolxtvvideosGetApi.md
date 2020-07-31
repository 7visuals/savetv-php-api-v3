# Swagger\Client\FolxtvvideosGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3FolxtvvideosGet**](FolxtvvideosGetApi.md#v3folxtvvideosget) | **GET** /v3/folxtvvideos | Retrieves all erotic videos.
[**v3FolxtvvideosIdDownloadsRecordFormatGet**](FolxtvvideosGetApi.md#v3folxtvvideosiddownloadsrecordformatget) | **GET** /v3/folxtvvideos/{id}/downloads/{recordFormat} | Downloads the specified identifier.

# **v3FolxtvvideosGet**
> v3FolxtvvideosGet()

Retrieves all erotic videos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolxtvvideosGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->v3FolxtvvideosGet();
} catch (Exception $e) {
    echo 'Exception when calling FolxtvvideosGetApi->v3FolxtvvideosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3FolxtvvideosIdDownloadsRecordFormatGet**
> \Swagger\Client\Model\ResponseDownload v3FolxtvvideosIdDownloadsRecordFormatGet($id, $record_format, $streaming_url_scheme)

Downloads the specified identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\FolxtvvideosGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier.
$record_format = new \Swagger\Client\Model\RequestEroticRecordFormat(); // \Swagger\Client\Model\RequestEroticRecordFormat | The record format used for download.    Values:    4 = Mobile (480x270)    5 = SD (1024x576)    6 = HD (1280x720)    9 = Full-HD (1920x1280)
$streaming_url_scheme = "streaming_url_scheme_example"; // string | Allows to set the URL scheme for the streaming URL.    Values:    http    https    Default value is set according to API internal settings and may vary by client or over time.

try {
    $result = $apiInstance->v3FolxtvvideosIdDownloadsRecordFormatGet($id, $record_format, $streaming_url_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FolxtvvideosGetApi->v3FolxtvvideosIdDownloadsRecordFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier. |
 **record_format** | [**\Swagger\Client\Model\RequestEroticRecordFormat**](../Model/.md)| The record format used for download.    Values:    4 &#x3D; Mobile (480x270)    5 &#x3D; SD (1024x576)    6 &#x3D; HD (1280x720)    9 &#x3D; Full-HD (1920x1280) |
 **streaming_url_scheme** | **string**| Allows to set the URL scheme for the streaming URL.    Values:    http    https    Default value is set according to API internal settings and may vary by client or over time. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDownload**](../Model/ResponseDownload.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

