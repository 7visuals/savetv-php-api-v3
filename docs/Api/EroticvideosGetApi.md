# Swagger\Client\EroticvideosGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3EroticvideosGet**](EroticvideosGetApi.md#v3eroticvideosget) | **GET** /v3/eroticvideos | Retrieves all erotic videos.
[**v3EroticvideosVideoIdDownloadsRecordFormatGet**](EroticvideosGetApi.md#v3eroticvideosvideoiddownloadsrecordformatget) | **GET** /v3/eroticvideos/{videoId}/downloads/{recordFormat} | Requests the download URL for a record.
[**v3EroticvideosVideoIdGet**](EroticvideosGetApi.md#v3eroticvideosvideoidget) | **GET** /v3/eroticvideos/{videoId} | Retrieves one erotic video.

# **v3EroticvideosGet**
> \Swagger\Client\Model\ResponseEroticVideo[] v3EroticvideosGet()

Retrieves all erotic videos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EroticvideosGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3EroticvideosGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EroticvideosGetApi->v3EroticvideosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponseEroticVideo[]**](../Model/ResponseEroticVideo.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3EroticvideosVideoIdDownloadsRecordFormatGet**
> \Swagger\Client\Model\ResponseDownload v3EroticvideosVideoIdDownloadsRecordFormatGet($record_format, $video_id, $streaming_url_scheme)

Requests the download URL for a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EroticvideosGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_format = new \Swagger\Client\Model\RequestEroticRecordFormat(); // \Swagger\Client\Model\RequestEroticRecordFormat | The record format used for download.    Values:    4 = Mobile (480x270)    5 = SD (1024x576)    6 = HD (1280x720)    9 = Full-HD (1920x1280)
$video_id = 56; // int | The identifier of the telecast.
$streaming_url_scheme = "streaming_url_scheme_example"; // string | Allows to set the URL scheme for the streaming URL.    Values:    http    https    Default value is set according to API internal settings and may vary by client or over time.

try {
    $result = $apiInstance->v3EroticvideosVideoIdDownloadsRecordFormatGet($record_format, $video_id, $streaming_url_scheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EroticvideosGetApi->v3EroticvideosVideoIdDownloadsRecordFormatGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_format** | [**\Swagger\Client\Model\RequestEroticRecordFormat**](../Model/.md)| The record format used for download.    Values:    4 &#x3D; Mobile (480x270)    5 &#x3D; SD (1024x576)    6 &#x3D; HD (1280x720)    9 &#x3D; Full-HD (1920x1280) |
 **video_id** | **int**| The identifier of the telecast. |
 **streaming_url_scheme** | **string**| Allows to set the URL scheme for the streaming URL.    Values:    http    https    Default value is set according to API internal settings and may vary by client or over time. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseDownload**](../Model/ResponseDownload.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3EroticvideosVideoIdGet**
> \Swagger\Client\Model\ResponseEroticVideo v3EroticvideosVideoIdGet($video_id)

Retrieves one erotic video.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\EroticvideosGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = 56; // int | The erotic video identifier.

try {
    $result = $apiInstance->v3EroticvideosVideoIdGet($video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EroticvideosGetApi->v3EroticvideosVideoIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| The erotic video identifier. |

### Return type

[**\Swagger\Client\Model\ResponseEroticVideo**](../Model/ResponseEroticVideo.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

