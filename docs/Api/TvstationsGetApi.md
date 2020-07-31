# Swagger\Client\TvstationsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TvstationsGet**](TvstationsGetApi.md#v3tvstationsget) | **GET** /v3/tvstations | Retrieves all available TV stations.
[**v3TvstationsTvstationIdGet**](TvstationsGetApi.md#v3tvstationstvstationidget) | **GET** /v3/tvstations/{tvstationId} | Retrieves a single TV station with the given identifier.

# **v3TvstationsGet**
> \Swagger\Client\Model\ResponseTvStation[] v3TvstationsGet($fields, $has_live_stream, $is_recordable, $sort)

Retrieves all available TV stations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvstationsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"homepageurl, id, isrecordable, largelogourl, livestream, name, smalllogourl\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    homepageurl,    id,    isrecordable,    largelogourl,    livestream,    name,    smalllogourl
$has_live_stream = true; // bool | Select only TV stations that provide / provide not a live stream.
$is_recordable = true; // bool | Select only TV station that are / ar not recordable.
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority

try {
    $result = $apiInstance->v3TvstationsGet($fields, $has_live_stream, $is_recordable, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvstationsGetApi->v3TvstationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    homepageurl,    id,    isrecordable,    largelogourl,    livestream,    name,    smalllogourl | [optional] [default to [&quot;homepageurl, id, isrecordable, largelogourl, livestream, name, smalllogourl&quot;]]
 **has_live_stream** | **bool**| Select only TV stations that provide / provide not a live stream. | [optional]
 **is_recordable** | **bool**| Select only TV station that are / ar not recordable. | [optional]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority | [optional]

### Return type

[**\Swagger\Client\Model\ResponseTvStation[]**](../Model/ResponseTvStation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3TvstationsTvstationIdGet**
> \Swagger\Client\Model\ResponseTvStation v3TvstationsTvstationIdGet($tvstation_id, $fields)

Retrieves a single TV station with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvstationsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tvstation_id = 56; // int | The identifier of the TV station.
$fields = array("[\"homepageurl, id, isrecordable, largelogourl, livestream, name, smalllogourl\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    homepageurl,    id,    isrecordable,    largelogourl,    livestream,    name,    smalllogourl

try {
    $result = $apiInstance->v3TvstationsTvstationIdGet($tvstation_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvstationsGetApi->v3TvstationsTvstationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tvstation_id** | **int**| The identifier of the TV station. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    homepageurl,    id,    isrecordable,    largelogourl,    livestream,    name,    smalllogourl | [optional] [default to [&quot;homepageurl, id, isrecordable, largelogourl, livestream, name, smalllogourl&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseTvStation**](../Model/ResponseTvStation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

