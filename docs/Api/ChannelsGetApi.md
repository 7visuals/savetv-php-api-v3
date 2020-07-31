# Swagger\Client\ChannelsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3ChannelsChannelIdGet**](ChannelsGetApi.md#v3channelschannelidget) | **GET** /v3/channels/{channelId} | Retrieves a single channel with the given identifier.
[**v3ChannelsChannelIdTelecastsGet**](ChannelsGetApi.md#v3channelschannelidtelecastsget) | **GET** /v3/channels/{channelId}/telecasts | Retrieves the telecasts that matches the channel criteria.
[**v3ChannelsChannelIdTelecastsTelecastIdGet**](ChannelsGetApi.md#v3channelschannelidtelecaststelecastidget) | **GET** /v3/channels/{channelId}/telecasts/{telecastId} | Retrieves the telecasts that matches the channel criteria.
[**v3ChannelsCountGet**](ChannelsGetApi.md#v3channelscountget) | **GET** /v3/channels/count | Retrieves the number of channels for the current account.
[**v3ChannelsGet**](ChannelsGetApi.md#v3channelsget) | **GET** /v3/channels | Retrieves the channels for the current account.

# **v3ChannelsChannelIdGet**
> \Swagger\Client\Model\Channel v3ChannelsChannelIdGet($channel_id, $fields)

Retrieves a single channel with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | The channel identifier.
$fields = array("[\"channelscope, channeltype, counttelecasts, id, imageurl100, imageurl250, imageurl500, name, searchquery, star.id, star.name, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.name, tvsubcategory.id, tvsubcategory.name\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \"channeltype, id\" are always transmitted.    _The allowed field values:_    channelscope,    channeltype,    counttelecasts,    id,    imageurl100,    imageurl250,    imageurl500,    name,    searchquery,    star.id,    star.name,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.name,    tvsubcategory.id,    tvsubcategory.name

try {
    $result = $apiInstance->v3ChannelsChannelIdGet($channel_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGetApi->v3ChannelsChannelIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| The channel identifier. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \&quot;channeltype, id\&quot; are always transmitted.    _The allowed field values:_    channelscope,    channeltype,    counttelecasts,    id,    imageurl100,    imageurl250,    imageurl500,    name,    searchquery,    star.id,    star.name,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.name,    tvsubcategory.id,    tvsubcategory.name | [optional] [default to [&quot;channelscope, channeltype, counttelecasts, id, imageurl100, imageurl250, imageurl500, name, searchquery, star.id, star.name, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.name, tvsubcategory.id, tvsubcategory.name&quot;]]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsChannelIdTelecastsGet**
> \Swagger\Client\Model\ResponsePagedTelecastList v3ChannelsChannelIdTelecastsGet($channel_id, $fields, $limit, $no_paging_header, $offset, $sort)

Retrieves the telecasts that matches the channel criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | The channel identifier.
$fields = array("[\"characterization, commentator, country, createdate, description, director, enddate, episode, existsrecord, guests, id, imageurl100, imageurl250, imageurl500, interpret, isblackwhite, ishighlight, isomitted, moderator, originaltitle, rating, roles, roles.rolename, roles.starid, roles.starname, slug, startdate, subject, subtitle, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.largelogourl, tvstation.name, tvstation.smalllogourl, tvsubcategory.id, tvsubcategory.name, updatedate, voluntaryselfregulationofthemovieindustry, year\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    characterization,    commentator,    country,    createdate,    description,    director,    enddate,    episode,    existsrecord,    guests,    id,    imageurl100,    imageurl250,    imageurl500,    interpret,    isblackwhite,    ishighlight,    isomitted,    moderator,    originaltitle,    rating,    roles,    roles.rolename,    roles.starid,    roles.starname,    slug,    startdate,    subject,    subtitle,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.largelogourl,    tvstation.name,    tvstation.smalllogourl,    tvsubcategory.id,    tvsubcategory.name,    updatedate,    voluntaryselfregulationofthemovieindustry,    year
$limit = 56; // int | Sets the maximum number of items in result set.    The default value: 50.    The maximum allowed value: 2000.
$no_paging_header = true; // bool | By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values
$offset = 56; // int | Sets the number of data items that are skipped in the result set.    The default value: 0.
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    category    episode    startdate    subcategory    subtitle    title    tvstationposition    year    Default sorting:    +startdate,+tvstationposition

try {
    $result = $apiInstance->v3ChannelsChannelIdTelecastsGet($channel_id, $fields, $limit, $no_paging_header, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGetApi->v3ChannelsChannelIdTelecastsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| The channel identifier. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    characterization,    commentator,    country,    createdate,    description,    director,    enddate,    episode,    existsrecord,    guests,    id,    imageurl100,    imageurl250,    imageurl500,    interpret,    isblackwhite,    ishighlight,    isomitted,    moderator,    originaltitle,    rating,    roles,    roles.rolename,    roles.starid,    roles.starname,    slug,    startdate,    subject,    subtitle,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.largelogourl,    tvstation.name,    tvstation.smalllogourl,    tvsubcategory.id,    tvsubcategory.name,    updatedate,    voluntaryselfregulationofthemovieindustry,    year | [optional] [default to [&quot;characterization, commentator, country, createdate, description, director, enddate, episode, existsrecord, guests, id, imageurl100, imageurl250, imageurl500, interpret, isblackwhite, ishighlight, isomitted, moderator, originaltitle, rating, roles, roles.rolename, roles.starid, roles.starname, slug, startdate, subject, subtitle, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.largelogourl, tvstation.name, tvstation.smalllogourl, tvsubcategory.id, tvsubcategory.name, updatedate, voluntaryselfregulationofthemovieindustry, year&quot;]]
 **limit** | **int**| Sets the maximum number of items in result set.    The default value: 50.    The maximum allowed value: 2000. | [optional]
 **no_paging_header** | **bool**| By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values | [optional]
 **offset** | **int**| Sets the number of data items that are skipped in the result set.    The default value: 0. | [optional]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    category    episode    startdate    subcategory    subtitle    title    tvstationposition    year    Default sorting:    +startdate,+tvstationposition | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePagedTelecastList**](../Model/ResponsePagedTelecastList.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsChannelIdTelecastsTelecastIdGet**
> \Swagger\Client\Model\ResponsePagedTelecastList v3ChannelsChannelIdTelecastsTelecastIdGet($channel_id, $telecast_id, $fields)

Retrieves the telecasts that matches the channel criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | The identifier of the channel.
$telecast_id = 56; // int | The identifier of the telecast.
$fields = array("[\"characterization, commentator, country, createdate, description, director, enddate, episode, existsrecord, guests, id, imageurl100, imageurl250, imageurl500, interpret, isblackwhite, ishighlight, isomitted, moderator, originaltitle, rating, roles, roles.rolename, roles.starid, roles.starname, slug, startdate, subject, subtitle, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.largelogourl, tvstation.name, tvstation.smalllogourl, tvsubcategory.id, tvsubcategory.name, updatedate, voluntaryselfregulationofthemovieindustry, year\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    characterization,    commentator,    country,    createdate,    description,    director,    enddate,    episode,    existsrecord,    guests,    id,    imageurl100,    imageurl250,    imageurl500,    interpret,    isblackwhite,    ishighlight,    isomitted,    moderator,    originaltitle,    rating,    roles,    roles.rolename,    roles.starid,    roles.starname,    slug,    startdate,    subject,    subtitle,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.largelogourl,    tvstation.name,    tvstation.smalllogourl,    tvsubcategory.id,    tvsubcategory.name,    updatedate,    voluntaryselfregulationofthemovieindustry,    year

try {
    $result = $apiInstance->v3ChannelsChannelIdTelecastsTelecastIdGet($channel_id, $telecast_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGetApi->v3ChannelsChannelIdTelecastsTelecastIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| The identifier of the channel. |
 **telecast_id** | **int**| The identifier of the telecast. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    characterization,    commentator,    country,    createdate,    description,    director,    enddate,    episode,    existsrecord,    guests,    id,    imageurl100,    imageurl250,    imageurl500,    interpret,    isblackwhite,    ishighlight,    isomitted,    moderator,    originaltitle,    rating,    roles,    roles.rolename,    roles.starid,    roles.starname,    slug,    startdate,    subject,    subtitle,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.largelogourl,    tvstation.name,    tvstation.smalllogourl,    tvsubcategory.id,    tvsubcategory.name,    updatedate,    voluntaryselfregulationofthemovieindustry,    year | [optional] [default to [&quot;characterization, commentator, country, createdate, description, director, enddate, episode, existsrecord, guests, id, imageurl100, imageurl250, imageurl500, interpret, isblackwhite, ishighlight, isomitted, moderator, originaltitle, rating, roles, roles.rolename, roles.starid, roles.starname, slug, startdate, subject, subtitle, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.largelogourl, tvstation.name, tvstation.smalllogourl, tvsubcategory.id, tvsubcategory.name, updatedate, voluntaryselfregulationofthemovieindustry, year&quot;]]

### Return type

[**\Swagger\Client\Model\ResponsePagedTelecastList**](../Model/ResponsePagedTelecastList.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsCountGet**
> \Swagger\Client\Model\ResponseChannelCount v3ChannelsCountGet()

Retrieves the number of channels for the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3ChannelsCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGetApi->v3ChannelsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponseChannelCount**](../Model/ResponseChannelCount.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsGet**
> \Swagger\Client\Model\ResponseChannel[] v3ChannelsGet($channel_scope, $fields, $sort)

Retrieves the channels for the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_scope = new \Swagger\Client\Model\RequestChannelScope(); // \Swagger\Client\Model\RequestChannelScope | The channel scope determines which channels will be returned.    Values:    0 = Selects all channels    1 = Selects only standard channels    2 = Selects only channels created by Catch All    The default value: 0
$fields = array("[\"channelscope, channeltype, counttelecasts, id, imageurl100, imageurl250, imageurl500, name, searchquery, star.id, star.name, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.name, tvsubcategory.id, tvsubcategory.name\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \"channeltype, id\" are always transmitted.    _The allowed field values:_    channelscope,    channeltype,    counttelecasts,    id,    imageurl100,    imageurl250,    imageurl500,    name,    searchquery,    star.id,    star.name,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.name,    tvsubcategory.id,    tvsubcategory.name
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    Default sorting:    +name

try {
    $result = $apiInstance->v3ChannelsGet($channel_scope, $fields, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsGetApi->v3ChannelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_scope** | [**\Swagger\Client\Model\RequestChannelScope**](../Model/.md)| The channel scope determines which channels will be returned.    Values:    0 &#x3D; Selects all channels    1 &#x3D; Selects only standard channels    2 &#x3D; Selects only channels created by Catch All    The default value: 0 | [optional]
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \&quot;channeltype, id\&quot; are always transmitted.    _The allowed field values:_    channelscope,    channeltype,    counttelecasts,    id,    imageurl100,    imageurl250,    imageurl500,    name,    searchquery,    star.id,    star.name,    title,    tvcategory.id,    tvcategory.name,    tvstation.id,    tvstation.isrecordable,    tvstation.name,    tvsubcategory.id,    tvsubcategory.name | [optional] [default to [&quot;channelscope, channeltype, counttelecasts, id, imageurl100, imageurl250, imageurl500, name, searchquery, star.id, star.name, title, tvcategory.id, tvcategory.name, tvstation.id, tvstation.isrecordable, tvstation.name, tvsubcategory.id, tvsubcategory.name&quot;]]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    Default sorting:    +name | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannel[]**](../Model/ResponseChannel.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

