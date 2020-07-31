# Swagger\Client\ChannelsDeleteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3ChannelsCatchallDelete**](ChannelsDeleteApi.md#v3channelscatchalldelete) | **DELETE** /v3/channels/catchall | Deletes all catch all channels for the current user.
[**v3ChannelsChannelIdDelete**](ChannelsDeleteApi.md#v3channelschanneliddelete) | **DELETE** /v3/channels/{channelId} | Deletes the channel with the given identifier.

# **v3ChannelsCatchallDelete**
> v3ChannelsCatchallDelete($record_handling)

Deletes all catch all channels for the current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_handling = new \Swagger\Client\Model\RequestChannelDeleteRecordHandling(); // \Swagger\Client\Model\RequestChannelDeleteRecordHandling | Sets the handling of the records created by the channel.     Default value: 0    Values:     0 = Keep all records    1 = Deletes programmed records only (state Requested)    2 = Deletes ready records only (state Ok, Failed)    3 = Deletes all records

try {
    $apiInstance->v3ChannelsCatchallDelete($record_handling);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsDeleteApi->v3ChannelsCatchallDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_handling** | [**\Swagger\Client\Model\RequestChannelDeleteRecordHandling**](../Model/.md)| Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3ChannelsChannelIdDelete**
> v3ChannelsChannelIdDelete($channel_id, $record_handling)

Deletes the channel with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | The channel identifier.
$record_handling = new \Swagger\Client\Model\RequestChannelDeleteRecordHandling(); // \Swagger\Client\Model\RequestChannelDeleteRecordHandling | Sets the handling of the records created by the channel.     Default value: 0    Values:     0 = Keep all records    1 = Deletes programmed records only (state Requested)    2 = Deletes ready records only (state Ok, Failed)    3 = Deletes all records

try {
    $apiInstance->v3ChannelsChannelIdDelete($channel_id, $record_handling);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsDeleteApi->v3ChannelsChannelIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel_id** | **int**| The channel identifier. |
 **record_handling** | [**\Swagger\Client\Model\RequestChannelDeleteRecordHandling**](../Model/.md)| Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

