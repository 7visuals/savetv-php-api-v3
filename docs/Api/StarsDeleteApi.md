# Swagger\Client\StarsDeleteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3StarsNotificationsUuidDelete**](StarsDeleteApi.md#v3starsnotificationsuuiddelete) | **DELETE** /v3/stars/notifications/{uuid} | Removes the subscription for a star notifications (alerts).

# **v3StarsNotificationsUuidDelete**
> v3StarsNotificationsUuidDelete($uuid, $mail_cancellation_reason_id)

Removes the subscription for a star notifications (alerts).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StarsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | The UUID.
$mail_cancellation_reason_id = 56; // int | 

try {
    $apiInstance->v3StarsNotificationsUuidDelete($uuid, $mail_cancellation_reason_id);
} catch (Exception $e) {
    echo 'Exception when calling StarsDeleteApi->v3StarsNotificationsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| The UUID. |
 **mail_cancellation_reason_id** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

