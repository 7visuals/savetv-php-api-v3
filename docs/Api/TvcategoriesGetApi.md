# Swagger\Client\TvcategoriesGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TvcategoriesGet**](TvcategoriesGetApi.md#v3tvcategoriesget) | **GET** /v3/tvcategories | Retrieves all available TV categories.
[**v3TvcategoriesIdGet**](TvcategoriesGetApi.md#v3tvcategoriesidget) | **GET** /v3/tvcategories/{id} | Retrieves a single TV category with the given identifier.

# **v3TvcategoriesGet**
> \Swagger\Client\Model\ResponseTvCategory[] v3TvcategoriesGet($fields, $sort)

Retrieves all available TV categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvcategoriesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"id, name, tvsubcategories.id, tvsubcategories.name\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    id,    name,    tvsubcategories.id,    tvsubcategories.name
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority

try {
    $result = $apiInstance->v3TvcategoriesGet($fields, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvcategoriesGetApi->v3TvcategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    id,    name,    tvsubcategories.id,    tvsubcategories.name | [optional] [default to [&quot;id, name, tvsubcategories.id, tvsubcategories.name&quot;]]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority | [optional]

### Return type

[**\Swagger\Client\Model\ResponseTvCategory[]**](../Model/ResponseTvCategory.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3TvcategoriesIdGet**
> \Swagger\Client\Model\ResponseTvCategory v3TvcategoriesIdGet($id, $fields, $sort)

Retrieves a single TV category with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TvcategoriesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the TV category.
$fields = array("[\"id, name, tvsubcategories.id, tvsubcategories.name\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    id,    name,    tvsubcategories.id,    tvsubcategories.name
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority

try {
    $result = $apiInstance->v3TvcategoriesIdGet($id, $fields, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvcategoriesGetApi->v3TvcategoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the TV category. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    id,    name,    tvsubcategories.id,    tvsubcategories.name | [optional] [default to [&quot;id, name, tvsubcategories.id, tvsubcategories.name&quot;]]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    priority    Default sorting:    +priority | [optional]

### Return type

[**\Swagger\Client\Model\ResponseTvCategory**](../Model/ResponseTvCategory.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

