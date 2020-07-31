# Swagger\Client\PlaylistsDeleteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3PlaylistsDelete**](PlaylistsDeleteApi.md#v3playlistsdelete) | **DELETE** /v3/playlists | Deletes the playlists specified by the identifiers.
[**v3PlaylistsFollowDelete**](PlaylistsDeleteApi.md#v3playlistsfollowdelete) | **DELETE** /v3/playlists/follow | Removes the playlists from the saved (followed) playlists.
[**v3PlaylistsPlaylistIdDelete**](PlaylistsDeleteApi.md#v3playlistsplaylistiddelete) | **DELETE** /v3/playlists/{playlistId} | Deletes the playlist specified by the identifier.
[**v3PlaylistsPlaylistIdFollowDelete**](PlaylistsDeleteApi.md#v3playlistsplaylistidfollowdelete) | **DELETE** /v3/playlists/{playlistId}/follow | Remove the playlist from the saved (followed) playlists.
[**v3PlaylistsPlaylistIdItemsDelete**](PlaylistsDeleteApi.md#v3playlistsplaylistiditemsdelete) | **DELETE** /v3/playlists/{playlistId}/items | Deletes the given telecasts from the playlist.
[**v3PlaylistsPlaylistIdItemsTelecastIdDelete**](PlaylistsDeleteApi.md#v3playlistsplaylistiditemstelecastiddelete) | **DELETE** /v3/playlists/{playlistId}/items/{telecastId} | Deletes the given telecast from the playlist.

# **v3PlaylistsDelete**
> v3PlaylistsDelete($playlist_ids)

Deletes the playlists specified by the identifiers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_ids = array(56); // int[] | A comma separated list of playlist identifiers.

try {
    $apiInstance->v3PlaylistsDelete($playlist_ids);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_ids** | [**int[]**](../Model/int.md)| A comma separated list of playlist identifiers. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsFollowDelete**
> v3PlaylistsFollowDelete($playlist_ids)

Removes the playlists from the saved (followed) playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_ids = array(56); // int[] | A comma separated list of playlist identifiers.

try {
    $apiInstance->v3PlaylistsFollowDelete($playlist_ids);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsFollowDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_ids** | [**int[]**](../Model/int.md)| A comma separated list of playlist identifiers. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdDelete**
> v3PlaylistsPlaylistIdDelete($playlist_id)

Deletes the playlist specified by the identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.

try {
    $apiInstance->v3PlaylistsPlaylistIdDelete($playlist_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsPlaylistIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **v3PlaylistsPlaylistIdFollowDelete**
> v3PlaylistsPlaylistIdFollowDelete($playlist_id)

Remove the playlist from the saved (followed) playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.

try {
    $apiInstance->v3PlaylistsPlaylistIdFollowDelete($playlist_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsPlaylistIdFollowDelete: ', $e->getMessage(), PHP_EOL;
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

# **v3PlaylistsPlaylistIdItemsDelete**
> \Swagger\Client\Model\ResponsePlaylistItemOperation[] v3PlaylistsPlaylistIdItemsDelete($playlist_id, $telecast_ids)

Deletes the given telecasts from the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$telecast_ids = array(56); // int[] | A comma separated list of telecast identifiers.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsDelete($playlist_id, $telecast_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsPlaylistIdItemsDelete: ', $e->getMessage(), PHP_EOL;
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

# **v3PlaylistsPlaylistIdItemsTelecastIdDelete**
> \Swagger\Client\Model\ResponsePlaylistItemOperation v3PlaylistsPlaylistIdItemsTelecastIdDelete($playlist_id, $telecast_id)

Deletes the given telecast from the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$telecast_id = 56; // int | The telecast identifier.

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsTelecastIdDelete($playlist_id, $telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsDeleteApi->v3PlaylistsPlaylistIdItemsTelecastIdDelete: ', $e->getMessage(), PHP_EOL;
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

