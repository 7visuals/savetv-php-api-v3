# Swagger\Client\StarsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3StarsGet**](StarsGetApi.md#v3starsget) | **GET** /v3/stars | Retrieves the stars that match the filter condition.
[**v3StarsStarIdGet**](StarsGetApi.md#v3starsstaridget) | **GET** /v3/stars/{starId} | Retrieves a single star with the given identifier.

# **v3StarsGet**
> \Swagger\Client\Model\ResponsePagedStarList v3StarsGet($fields, $has_birthday_today, $ids, $is_highlight, $limit, $no_paging_header, $offset, $plays_part_in_upcoming_telecast, $q, $sort)

Retrieves the stars that match the filter condition.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StarsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"alternativename, awards, awards.count, awards.name, birthdate, birthplace, dateofdeath, description, height, id, imageurls100, imageurls250, imageurls500, ishighlight, links, links.title, links.url, name, nickname, placeofdeath\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    alternativename,    awards,    awards.count,    awards.name,    birthdate,    birthplace,    dateofdeath,    description,    height,    id,    imageurls100,    imageurls250,    imageurls500,    ishighlight,    links,    links.title,    links.url,    name,    nickname,    placeofdeath
$has_birthday_today = true; // bool | Determines whether the star must have birthday today or not.
$ids = array(56); // int[] | A comma-separated list of star identifiers.
$is_highlight = true; // bool | Determines whether the star is marked as important star or not.
$limit = 56; // int | Sets the maximum number of items in result set.    The default value: 20.    The maximum allowed value: 500.
$no_paging_header = true; // bool | By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values
$offset = 56; // int | Sets the number of data items that are skipped in the result set.    The default value: 0.
$plays_part_in_upcoming_telecast = true; // bool | Determines whether the star plays in a telecast within the future EPG.
$q = "q_example"; // string | The search text used for a text search.
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    position    Default sorting:    +name

try {
    $result = $apiInstance->v3StarsGet($fields, $has_birthday_today, $ids, $is_highlight, $limit, $no_paging_header, $offset, $plays_part_in_upcoming_telecast, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarsGetApi->v3StarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    alternativename,    awards,    awards.count,    awards.name,    birthdate,    birthplace,    dateofdeath,    description,    height,    id,    imageurls100,    imageurls250,    imageurls500,    ishighlight,    links,    links.title,    links.url,    name,    nickname,    placeofdeath | [optional] [default to [&quot;alternativename, awards, awards.count, awards.name, birthdate, birthplace, dateofdeath, description, height, id, imageurls100, imageurls250, imageurls500, ishighlight, links, links.title, links.url, name, nickname, placeofdeath&quot;]]
 **has_birthday_today** | **bool**| Determines whether the star must have birthday today or not. | [optional]
 **ids** | [**int[]**](../Model/int.md)| A comma-separated list of star identifiers. | [optional]
 **is_highlight** | **bool**| Determines whether the star is marked as important star or not. | [optional]
 **limit** | **int**| Sets the maximum number of items in result set.    The default value: 20.    The maximum allowed value: 500. | [optional]
 **no_paging_header** | **bool**| By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values | [optional]
 **offset** | **int**| Sets the number of data items that are skipped in the result set.    The default value: 0. | [optional]
 **plays_part_in_upcoming_telecast** | **bool**| Determines whether the star plays in a telecast within the future EPG. | [optional]
 **q** | **string**| The search text used for a text search. | [optional]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    position    Default sorting:    +name | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePagedStarList**](../Model/ResponsePagedStarList.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3StarsStarIdGet**
> \Swagger\Client\Model\ResponseStar v3StarsStarIdGet($star_id, $fields)

Retrieves a single star with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StarsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$star_id = 56; // int | The identifier of the star.
$fields = array("[\"alternativename, awards, awards.count, awards.name, birthdate, birthplace, dateofdeath, description, height, id, imageurls100, imageurls250, imageurls500, ishighlight, links, links.title, links.url, name, nickname, placeofdeath\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    alternativename,    awards,    awards.count,    awards.name,    birthdate,    birthplace,    dateofdeath,    description,    height,    id,    imageurls100,    imageurls250,    imageurls500,    ishighlight,    links,    links.title,    links.url,    name,    nickname,    placeofdeath

try {
    $result = $apiInstance->v3StarsStarIdGet($star_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarsGetApi->v3StarsStarIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **int**| The identifier of the star. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    alternativename,    awards,    awards.count,    awards.name,    birthdate,    birthplace,    dateofdeath,    description,    height,    id,    imageurls100,    imageurls250,    imageurls500,    ishighlight,    links,    links.title,    links.url,    name,    nickname,    placeofdeath | [optional] [default to [&quot;alternativename, awards, awards.count, awards.name, birthdate, birthplace, dateofdeath, description, height, id, imageurls100, imageurls250, imageurls500, ishighlight, links, links.title, links.url, name, nickname, placeofdeath&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseStar**](../Model/ResponseStar.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

