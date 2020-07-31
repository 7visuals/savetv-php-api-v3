# Swagger\Client\StarsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3StarsStarIdNotificationsPost**](StarsPostApi.md#v3starsstaridnotificationspost) | **POST** /v3/stars/{starId}/notifications | Creates a subscription for a star notifications (alerts).

# **v3StarsStarIdNotificationsPost**
> v3StarsStarIdNotificationsPost($star_id)

Creates a subscription for a star notifications (alerts).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StarsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$star_id = 56; // int | The star identifier.

try {
    $apiInstance->v3StarsStarIdNotificationsPost($star_id);
} catch (Exception $e) {
    echo 'Exception when calling StarsPostApi->v3StarsStarIdNotificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **star_id** | **int**| The star identifier. |

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

