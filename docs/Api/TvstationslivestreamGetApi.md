# Swagger\Client\TvstationslivestreamGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TvstationslivestreamTvStationIdLivestreamGet**](TvstationslivestreamGetApi.md#v3tvstationslivestreamtvstationidlivestreamget) | **GET** /v3/tvstationslivestream/{tvStationId}/livestream | Returns the live streaming url for the given TV station in all possible formats.

# **v3TvstationslivestreamTvStationIdLivestreamGet**
> \Swagger\Client\Model\LiveStreamUrls v3TvstationslivestreamTvStationIdLivestreamGet($tv_station_id)

Returns the live streaming url for the given TV station in all possible formats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvstationslivestreamGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tv_station_id = 56; // int | The TV station identifier.

try {
    $result = $apiInstance->v3TvstationslivestreamTvStationIdLivestreamGet($tv_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvstationslivestreamGetApi->v3TvstationslivestreamTvStationIdLivestreamGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tv_station_id** | **int**| The TV station identifier. |

### Return type

[**\Swagger\Client\Model\LiveStreamUrls**](../Model/LiveStreamUrls.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

