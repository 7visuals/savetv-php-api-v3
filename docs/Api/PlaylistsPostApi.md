# Swagger\Client\PlaylistsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3PlaylistsFollowPost**](PlaylistsPostApi.md#v3playlistsfollowpost) | **POST** /v3/playlists/follow | Adds the playlists of another accounts to the own saved (followed) playlists.
[**v3PlaylistsPlaylistIdFollowPost**](PlaylistsPostApi.md#v3playlistsplaylistidfollowpost) | **POST** /v3/playlists/{playlistId}/follow | Add the playlist of another account to the own saved (followed) playlists.
[**v3PlaylistsPlaylistIdItemsPositionsPost**](PlaylistsPostApi.md#v3playlistsplaylistiditemspositionspost) | **POST** /v3/playlists/{playlistId}/items/positions | Sets the positions off all playlist items.
[**v3PlaylistsPlaylistIdItemsPost**](PlaylistsPostApi.md#v3playlistsplaylistiditemspost) | **POST** /v3/playlists/{playlistId}/items | Appends the given telecasts to the playlist.
[**v3PlaylistsPlaylistIdItemsTelecastIdPositionsPositionPost**](PlaylistsPostApi.md#v3playlistsplaylistiditemstelecastidpositionspositionpost) | **POST** /v3/playlists/{playlistId}/items/{telecastId}/positions/{position} | Sets the given telecast at the given index in the playlist.
[**v3PlaylistsPlaylistIdItemsTelecastIdPost**](PlaylistsPostApi.md#v3playlistsplaylistiditemstelecastidpost) | **POST** /v3/playlists/{playlistId}/items/{telecastId} | Appends the given telecast to the playlist.
[**v3PlaylistsPlaylistIdItemsTelecastIdViewPost**](PlaylistsPostApi.md#v3playlistsplaylistiditemstelecastidviewpost) | **POST** /v3/playlists/{playlistId}/items/{telecastId}/view | Sets the given telecast of the given the playlist as last viewed. This telecast will be used as start video when the playlist is resumed.
[**v3PlaylistsPlaylistIdPost**](PlaylistsPostApi.md#v3playlistsplaylistidpost) | **POST** /v3/playlists/{playlistId} | Updates an existing playlist.
[**v3PlaylistsPost**](PlaylistsPostApi.md#v3playlistspost) | **POST** /v3/playlists | Creates a new  playlist.
[**v3PlaylistsWatchLaterItemsPost**](PlaylistsPostApi.md#v3playlistswatchlateritemspost) | **POST** /v3/playlists/watch-later/items | Appends the given telecasts to the default playlist \&quot;Sp�ter ansehen\&quot;.
[**v3PlaylistsWatchLaterItemsTelecastIdPost**](PlaylistsPostApi.md#v3playlistswatchlateritemstelecastidpost) | **POST** /v3/playlists/watch-later/items/{telecastId} | Appends the given telecast to the default playlist \&quot;Später ansehen\&quot;.

# **v3PlaylistsFollowPost**
> v3PlaylistsFollowPost($body)

Adds the playlists of another accounts to the own saved (followed) playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestPlaylistIdList(); // \Swagger\Client\Model\RequestPlaylistIdList | The playlist identifier list.

try {
    $apiInstance->v3PlaylistsFollowPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsFollowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestPlaylistIdList**](../Model/RequestPlaylistIdList.md)| The playlist identifier list. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsFollowPost**
> v3PlaylistsFollowPost($playlist_ids)

Adds the playlists of another accounts to the own saved (followed) playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_ids = array(56); // int[] | 

try {
    $apiInstance->v3PlaylistsFollowPost($playlist_ids);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsFollowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdFollowPost**
> v3PlaylistsPlaylistIdFollowPost($playlist_id)

Add the playlist of another account to the own saved (followed) playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.

try {
    $apiInstance->v3PlaylistsPlaylistIdFollowPost($playlist_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdFollowPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsPositionsPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsPlaylistIdItemsPositionsPost($playlist_id, $body)

Sets the positions off all playlist items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The identifier.
$body = new \Swagger\Client\Model\RequestTelecastIdList(); // \Swagger\Client\Model\RequestTelecastIdList | The telecast identifier list.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsPositionsPost($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsPositionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The identifier. |
 **body** | [**\Swagger\Client\Model\RequestTelecastIdList**](../Model/RequestTelecastIdList.md)| The telecast identifier list. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsPositionsPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsPlaylistIdItemsPositionsPost($playlist_id, $telecast_ids)

Sets the positions off all playlist items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The identifier.
$telecast_ids = array(56); // int[] | 

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsPositionsPost($playlist_id, $telecast_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsPositionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The identifier. |
 **telecast_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsPlaylistIdItemsPost($playlist_id, $telecast_ids)

Appends the given telecasts to the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$telecast_ids = array(56); // int[] | A comma separated list of telecast identifiers.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsPost($playlist_id, $telecast_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **telecast_ids** | [**int[]**](../Model/int.md)| A comma separated list of telecast identifiers. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsTelecastIdPositionsPositionPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsPlaylistIdItemsTelecastIdPositionsPositionPost($playlist_id, $position, $telecast_id)

Sets the given telecast at the given index in the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$position = 56; // int | The target position.
$telecast_id = 56; // int | The telecast identifier.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsTelecastIdPositionsPositionPost($playlist_id, $position, $telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsTelecastIdPositionsPositionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **position** | **int**| The target position. |
 **telecast_id** | **int**| The telecast identifier. |

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsTelecastIdPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation v3PlaylistsPlaylistIdItemsTelecastIdPost($playlist_id, $telecast_id)

Appends the given telecast to the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$telecast_id = 56; // int | The telecast identifier.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsTelecastIdPost($playlist_id, $telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsTelecastIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **telecast_id** | **int**| The telecast identifier. |

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsTelecastIdViewPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation v3PlaylistsPlaylistIdItemsTelecastIdViewPost($playlist_id, $telecast_id)

Sets the given telecast of the given the playlist as last viewed. This telecast will be used as start video when the playlist is resumed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$telecast_id = 56; // int | The telecast identifier.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsTelecastIdViewPost($playlist_id, $telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdItemsTelecastIdViewPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **telecast_id** | **int**| The telecast identifier. |

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdPost**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsPlaylistIdPost($playlist_id, $body)

Updates an existing playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$body = new \Swagger\Client\Model\RequestPlaylist(); // \Swagger\Client\Model\RequestPlaylist | The new data for the existing playlist.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdPost($playlist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **body** | [**\Swagger\Client\Model\RequestPlaylist**](../Model/RequestPlaylist.md)| The new data for the existing playlist. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdPost**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsPlaylistIdPost($playlist_id, $name, $is_public)

Updates an existing playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$name = "name_example"; // string | 
$is_public = true; // bool | 

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdPost($playlist_id, $name, $is_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPlaylistIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **name** | **string**|  | [optional]
 **is_public** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPost**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsPost($body)

Creates a new  playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestPlaylist(); // \Swagger\Client\Model\RequestPlaylist | The data for the new playlist.

try {
    $result = $apiInstance->v3PlaylistsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestPlaylist**](../Model/RequestPlaylist.md)| The data for the new playlist. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPost**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsPost($name, $is_public)

Creates a new  playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$is_public = true; // bool | 

try {
    $result = $apiInstance->v3PlaylistsPost($name, $is_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **is_public** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsWatchLaterItemsPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsWatchLaterItemsPost($body)

Appends the given telecasts to the default playlist \"Sp�ter ansehen\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestTelecastIdList(); // \Swagger\Client\Model\RequestTelecastIdList | The new playlist item.

try {
    $result = $apiInstance->v3PlaylistsWatchLaterItemsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsWatchLaterItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestTelecastIdList**](../Model/RequestTelecastIdList.md)| The new playlist item. | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsWatchLaterItemsPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsWatchLaterItemsPost($telecast_ids)

Appends the given telecasts to the default playlist \"Sp�ter ansehen\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_ids = array(56); // int[] | 

try {
    $result = $apiInstance->v3PlaylistsWatchLaterItemsPost($telecast_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsWatchLaterItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation[]**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsWatchLaterItemsTelecastIdPost**
> \Swagger\Client\Model\ResponsePlaylistItemOperation v3PlaylistsWatchLaterItemsTelecastIdPost($telecast_id)

Appends the given telecast to the default playlist \"Später ansehen\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier.

try {
    $result = $apiInstance->v3PlaylistsWatchLaterItemsTelecastIdPost($telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsPostApi->v3PlaylistsWatchLaterItemsTelecastIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier. |

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItemOperation**](../Model/ResponsePlaylistItemOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

