# Swagger\Client\CredentialsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3CredentialsResetMailPost**](CredentialsPostApi.md#v3credentialsresetmailpost) | **POST** /v3/credentials/reset-mail | Requests a password reset mail as an asynchronous operation.

# **v3CredentialsResetMailPost**
> v3CredentialsResetMailPost($body)

Requests a password reset mail as an asynchronous operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CredentialsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestPasswordResetMail(); // \Swagger\Client\Model\RequestPasswordResetMail | The password reset mail.

try {
    $apiInstance->v3CredentialsResetMailPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsPostApi->v3CredentialsResetMailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestPasswordResetMail**](../Model/RequestPasswordResetMail.md)| The password reset mail. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3CredentialsResetMailPost**
> v3CredentialsResetMailPost($user_name)

Requests a password reset mail as an asynchronous operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CredentialsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_name = "user_name_example"; // string | 

try {
    $apiInstance->v3CredentialsResetMailPost($user_name);
} catch (Exception $e) {
    echo 'Exception when calling CredentialsPostApi->v3CredentialsResetMailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

