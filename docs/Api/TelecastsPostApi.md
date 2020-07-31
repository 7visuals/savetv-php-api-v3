# Swagger\Client\TelecastsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3TelecastsTelecastIdRatingPost**](TelecastsPostApi.md#v3telecaststelecastidratingpost) | **POST** /v3/telecasts/{telecastId}/rating | Ratings the specified identifier.

# **v3TelecastsTelecastIdRatingPost**
> \Swagger\Client\Model\Rating v3TelecastsTelecastIdRatingPost($telecast_id, $body)

Ratings the specified identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TelecastsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier.
$body = new \Swagger\Client\Model\RequestTelecastRating(); // \Swagger\Client\Model\RequestTelecastRating | Sets the Rating for a Telecast. Range between 1 and 5.

try {
    $result = $apiInstance->v3TelecastsTelecastIdRatingPost($telecast_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelecastsPostApi->v3TelecastsTelecastIdRatingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier. |
 **body** | [**\Swagger\Client\Model\RequestTelecastRating**](../Model/RequestTelecastRating.md)| Sets the Rating for a Telecast. Range between 1 and 5. | [optional]

### Return type

[**\Swagger\Client\Model\Rating**](../Model/Rating.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3TelecastsTelecastIdRatingPost**
> \Swagger\Client\Model\Rating v3TelecastsTelecastIdRatingPost($telecast_id, $rating, $rating_deprecated)

Ratings the specified identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TelecastsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier.
$rating = 56; // int | 
$rating_deprecated = 56; // int | 

try {
    $result = $apiInstance->v3TelecastsTelecastIdRatingPost($telecast_id, $rating, $rating_deprecated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelecastsPostApi->v3TelecastsTelecastIdRatingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier. |
 **rating** | **int**|  | [optional]
 **rating_deprecated** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\Rating**](../Model/Rating.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

