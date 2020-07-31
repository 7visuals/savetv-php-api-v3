# Swagger\Client\TvstationgroupsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TvstationgroupsGet**](TvstationgroupsGetApi.md#v3tvstationgroupsget) | **GET** /v3/tvstationgroups | Retrieves all available TV stations groups.
[**v3TvstationgroupsIdGet**](TvstationgroupsGetApi.md#v3tvstationgroupsidget) | **GET** /v3/tvstationgroups/{id} | Retrieves a single TV station group with the given identifier.

# **v3TvstationgroupsGet**
> \Swagger\Client\Model\ResponseTvStationGroup[] v3TvstationgroupsGet($fields)

Retrieves all available TV stations groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvstationgroupsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"id, name, tvstations.homepageurl, tvstations.id, tvstations.largelogourl, tvstations.name, tvstations.smalllogourl\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    id,    name,    tvstations.homepageurl,    tvstations.id,    tvstations.largelogourl,    tvstations.name,    tvstations.smalllogourl

try {
    $result = $apiInstance->v3TvstationgroupsGet($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvstationgroupsGetApi->v3TvstationgroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    id,    name,    tvstations.homepageurl,    tvstations.id,    tvstations.largelogourl,    tvstations.name,    tvstations.smalllogourl | [optional] [default to [&quot;id, name, tvstations.homepageurl, tvstations.id, tvstations.largelogourl, tvstations.name, tvstations.smalllogourl&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseTvStationGroup[]**](../Model/ResponseTvStationGroup.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3TvstationgroupsIdGet**
> \Swagger\Client\Model\ResponseTvStationGroup v3TvstationgroupsIdGet($id, $fields)

Retrieves a single TV station group with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvstationgroupsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the TV station group.
$fields = array("[\"id, name, tvstations.homepageurl, tvstations.id, tvstations.largelogourl, tvstations.name, tvstations.smalllogourl\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    id,    name,    tvstations.homepageurl,    tvstations.id,    tvstations.largelogourl,    tvstations.name,    tvstations.smalllogourl

try {
    $result = $apiInstance->v3TvstationgroupsIdGet($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvstationgroupsGetApi->v3TvstationgroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the TV station group. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    id,    name,    tvstations.homepageurl,    tvstations.id,    tvstations.largelogourl,    tvstations.name,    tvstations.smalllogourl | [optional] [default to [&quot;id, name, tvstations.homepageurl, tvstations.id, tvstations.largelogourl, tvstations.name, tvstations.smalllogourl&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseTvStationGroup**](../Model/ResponseTvStationGroup.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

