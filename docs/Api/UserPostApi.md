# Swagger\Client\UserPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3UserAccesscodePost**](UserPostApi.md#v3useraccesscodepost) | **POST** /v3/user/accesscode | Updates the AccessCode.
[**v3UserCancellationReminderPost**](UserPostApi.md#v3usercancellationreminderpost) | **POST** /v3/user/cancellation-reminder | Creates the contract cancel reminder entry.
[**v3UserPasswordPost**](UserPostApi.md#v3userpasswordpost) | **POST** /v3/user/password | Updates the user&#x27;s password.
[**v3UserPost**](UserPostApi.md#v3userpost) | **POST** /v3/user | Endpoint for saving user settings.
[**v3UserUserlaneStatePost**](UserPostApi.md#v3useruserlanestatepost) | **POST** /v3/user/userlane-state | Creates the current state of the userlane for a specific user.
[**v3UserWebsiteLoginPost**](UserPostApi.md#v3userwebsiteloginpost) | **POST** /v3/user/website-login | Provides a link to the web site that allows direct login for the current active user.

# **v3UserAccesscodePost**
> v3UserAccesscodePost($body)

Updates the AccessCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestAccessCodeUpdate(); // \Swagger\Client\Model\RequestAccessCodeUpdate | The allowed range for the new code is between 0000 and 9999. The access code must have 4 digits. The old access code can also be the user password.

try {
    $apiInstance->v3UserAccesscodePost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserAccesscodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestAccessCodeUpdate**](../Model/RequestAccessCodeUpdate.md)| The allowed range for the new code is between 0000 and 9999. The access code must have 4 digits. The old access code can also be the user password. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserAccesscodePost**
> v3UserAccesscodePost($old_access_code, $new_access_code)

Updates the AccessCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_access_code = "old_access_code_example"; // string | 
$new_access_code = "new_access_code_example"; // string | 

try {
    $apiInstance->v3UserAccesscodePost($old_access_code, $new_access_code);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserAccesscodePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_access_code** | **string**|  | [optional]
 **new_access_code** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserCancellationReminderPost**
> v3UserCancellationReminderPost()

Creates the contract cancel reminder entry.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->v3UserCancellationReminderPost();
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserCancellationReminderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserPasswordPost**
> v3UserPasswordPost($body)

Updates the user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestUserPasswordUpdate(); // \Swagger\Client\Model\RequestUserPasswordUpdate | The user password.

try {
    $apiInstance->v3UserPasswordPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestUserPasswordUpdate**](../Model/RequestUserPasswordUpdate.md)| The user password. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserPasswordPost**
> v3UserPasswordPost($old_password, $new_password, $new_password_confirmation)

Updates the user's password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$old_password = "old_password_example"; // string | 
$new_password = "new_password_example"; // string | 
$new_password_confirmation = "new_password_confirmation_example"; // string | 

try {
    $apiInstance->v3UserPasswordPost($old_password, $new_password, $new_password_confirmation);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_password** | **string**|  | [optional]
 **new_password** | **string**|  | [optional]
 **new_password_confirmation** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserPost**
> v3UserPost($email, $guard_is_enabled, $record_buffer_follow_up_time, $record_buffer_lead_time)

Endpoint for saving user settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 
$guard_is_enabled = true; // bool | 
$record_buffer_follow_up_time = 56; // int | 
$record_buffer_lead_time = 56; // int | 

try {
    $apiInstance->v3UserPost($email, $guard_is_enabled, $record_buffer_follow_up_time, $record_buffer_lead_time);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]
 **guard_is_enabled** | **bool**|  | [optional]
 **record_buffer_follow_up_time** | **int**|  | [optional]
 **record_buffer_lead_time** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserUserlaneStatePost**
> v3UserUserlaneStatePost($body)

Creates the current state of the userlane for a specific user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestUserUserlaneState(); // \Swagger\Client\Model\RequestUserUserlaneState | The allowed range for the state is between 1 and 3.

try {
    $apiInstance->v3UserUserlaneStatePost($body);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserUserlaneStatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestUserUserlaneState**](../Model/RequestUserUserlaneState.md)| The allowed range for the state is between 1 and 3. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserUserlaneStatePost**
> v3UserUserlaneStatePost($userlane_id, $state)

Creates the current state of the userlane for a specific user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userlane_id = 56; // int | 
$state = 56; // int | 

try {
    $apiInstance->v3UserUserlaneStatePost($userlane_id, $state);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserUserlaneStatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userlane_id** | **int**|  | [optional]
 **state** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserWebsiteLoginPost**
> \Swagger\Client\Model\ResponseWebSiteLogin v3UserWebsiteLoginPost($host)

Provides a link to the web site that allows direct login for the current active user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$host = "host_example"; // string | 

try {
    $result = $apiInstance->v3UserWebsiteLoginPost($host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserPostApi->v3UserWebsiteLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **host** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseWebSiteLogin**](../Model/ResponseWebSiteLogin.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

