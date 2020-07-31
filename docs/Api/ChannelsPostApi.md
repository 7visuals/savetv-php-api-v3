# Swagger\Client\ChannelsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3ChannelsCatchallPost**](ChannelsPostApi.md#v3channelscatchallpost) | **POST** /v3/channels/catchall | Creates the catch all channels for the requested TV stations or for all TV stations.
[**v3ChannelsFulltextsearchPost**](ChannelsPostApi.md#v3channelsfulltextsearchpost) | **POST** /v3/channels/fulltextsearch | Creates a full text search channel.
[**v3ChannelsStarPost**](ChannelsPostApi.md#v3channelsstarpost) | **POST** /v3/channels/star | Creates a star channel.
[**v3ChannelsTelecastidsPost**](ChannelsPostApi.md#v3channelstelecastidspost) | **POST** /v3/channels/telecastids | Creates a channel by various telecast ids.
[**v3ChannelsTitlePost**](ChannelsPostApi.md#v3channelstitlepost) | **POST** /v3/channels/title | Creates a title channel.
[**v3ChannelsTvstationPost**](ChannelsPostApi.md#v3channelstvstationpost) | **POST** /v3/channels/tvstation | Creates a TV station channel.

# **v3ChannelsCatchallPost**
> \Swagger\Client\Model\ResponseChannel[] v3ChannelsCatchallPost($body)

Creates the catch all channels for the requested TV stations or for all TV stations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestCatchAllChannel(); // \Swagger\Client\Model\RequestCatchAllChannel | The catch all channel.

try {
    $result = $apiInstance->v3ChannelsCatchallPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsCatchallPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestCatchAllChannel**](../Model/RequestCatchAllChannel.md)| The catch all channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannel[]**](../Model/ResponseChannel.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsCatchallPost**
> \Swagger\Client\Model\ResponseChannel[] v3ChannelsCatchallPost($tv_station_ids, $fields)

Creates the catch all channels for the requested TV stations or for all TV stations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tv_station_ids = array(56); // int[] | 
$fields = array("fields_example"); // string[] | 

try {
    $result = $apiInstance->v3ChannelsCatchallPost($tv_station_ids, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsCatchallPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tv_station_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannel[]**](../Model/ResponseChannel.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsFulltextsearchPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsFulltextsearchPost($body)

Creates a full text search channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestFullTextSearchChannel(); // \Swagger\Client\Model\RequestFullTextSearchChannel | The full text search channel.

try {
    $result = $apiInstance->v3ChannelsFulltextsearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsFulltextsearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestFullTextSearchChannel**](../Model/RequestFullTextSearchChannel.md)| The full text search channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsFulltextsearchPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsFulltextsearchPost($search_query, $name)

Creates a full text search channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_query = "search_query_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->v3ChannelsFulltextsearchPost($search_query, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsFulltextsearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_query** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsStarPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsStarPost($body)

Creates a star channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestStarChannel(); // \Swagger\Client\Model\RequestStarChannel | The star channel.

try {
    $result = $apiInstance->v3ChannelsStarPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsStarPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestStarChannel**](../Model/RequestStarChannel.md)| The star channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsStarPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsStarPost($star_id, $name)

Creates a star channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$star_id = 56; // int | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->v3ChannelsStarPost($star_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsStarPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **int**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTelecastidsPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTelecastidsPost($body)

Creates a channel by various telecast ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestEditorialTelecastListChannel(); // \Swagger\Client\Model\RequestEditorialTelecastListChannel | The telecast ids channel.

try {
    $result = $apiInstance->v3ChannelsTelecastidsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTelecastidsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestEditorialTelecastListChannel**](../Model/RequestEditorialTelecastListChannel.md)| The telecast ids channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTelecastidsPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTelecastidsPost($list_id, $name)

Creates a channel by various telecast ids.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->v3ChannelsTelecastidsPost($list_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTelecastidsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTitlePost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTitlePost($body)

Creates a title channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestTitleChannel(); // \Swagger\Client\Model\RequestTitleChannel | The title channel.

try {
    $result = $apiInstance->v3ChannelsTitlePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTitlePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestTitleChannel**](../Model/RequestTitleChannel.md)| The title channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTitlePost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTitlePost($title, $name)

Creates a title channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$title = "title_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->v3ChannelsTitlePost($title, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTitlePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTvstationPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTvstationPost($body)

Creates a TV station channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestTvStationChannel(); // \Swagger\Client\Model\RequestTvStationChannel | The TV station channel.

try {
    $result = $apiInstance->v3ChannelsTvstationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTvstationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestTvStationChannel**](../Model/RequestTvStationChannel.md)| The TV station channel. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsTvstationPost**
> \Swagger\Client\Model\ResponseChannelBase v3ChannelsTvstationPost($tv_station_id, $channel_time_frame_id, $tv_category_id, $tv_sub_category_id, $name)

Creates a TV station channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tv_station_id = 56; // int | 
$channel_time_frame_id = 56; // int | 
$tv_category_id = 56; // int | 
$tv_sub_category_id = 56; // int | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->v3ChannelsTvstationPost($tv_station_id, $channel_time_frame_id, $tv_category_id, $tv_sub_category_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsPostApi->v3ChannelsTvstationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tv_station_id** | **int**|  | [optional]
 **channel_time_frame_id** | **int**|  | [optional]
 **tv_category_id** | **int**|  | [optional]
 **tv_sub_category_id** | **int**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseChannelBase**](../Model/ResponseChannelBase.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

