# Swagger\Client\UserGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3UserAccesscodeVerificationGet**](UserGetApi.md#v3useraccesscodeverificationget) | **GET** /v3/user/accesscode/verification | Validates the AccessCode
[**v3UserGet**](UserGetApi.md#v3userget) | **GET** /v3/user | Endpoint for getting the data of the requesting user.

# **v3UserAccesscodeVerificationGet**
> v3UserAccesscodeVerificationGet($access_code)

Validates the AccessCode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access_code = "access_code_example"; // string | 

try {
    $apiInstance->v3UserAccesscodeVerificationGet($access_code);
} catch (Exception $e) {
    echo 'Exception when calling UserGetApi->v3UserAccesscodeVerificationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_code** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3UserGet**
> \Swagger\Client\Model\ResponseUser v3UserGet($fields)

Endpoint for getting the data of the requesting user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"catchall.haspermission, contract.hasxlpackage, contract.hasxxlpackage, contract.iscancelled, contract.islocked, contract.isrunning, contract.packagename, erotic.isenabled, fullname, guard.isenabled, id, livestreaming.isenabled, playlists.allowed, recordbuffer.followuptime, recordbuffer.leadtime, recordformat.id, recordformat.name, retentiontime.daysdivx, retentiontime.daysh264hd, retentiontime.daysh264mobile, retentiontime.daysh264sd, retentiontime.hasextendedretentiontimepermission\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"id\" is always transmitted.    _The allowed field values:_    catchall.haspermission,    contract.hasxlpackage,    contract.hasxxlpackage,    contract.iscancelled,    contract.islocked,    contract.isrunning,    contract.packagename,    erotic.isenabled,    fullname,    guard.isenabled,    id,    livestreaming.isenabled,    playlists.allowed,    recordbuffer.followuptime,    recordbuffer.leadtime,    recordformat.id,    recordformat.name,    retentiontime.daysdivx,    retentiontime.daysh264hd,    retentiontime.daysh264mobile,    retentiontime.daysh264sd,    retentiontime.hasextendedretentiontimepermission

try {
    $result = $apiInstance->v3UserGet($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGetApi->v3UserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;id\&quot; is always transmitted.    _The allowed field values:_    catchall.haspermission,    contract.hasxlpackage,    contract.hasxxlpackage,    contract.iscancelled,    contract.islocked,    contract.isrunning,    contract.packagename,    erotic.isenabled,    fullname,    guard.isenabled,    id,    livestreaming.isenabled,    playlists.allowed,    recordbuffer.followuptime,    recordbuffer.leadtime,    recordformat.id,    recordformat.name,    retentiontime.daysdivx,    retentiontime.daysh264hd,    retentiontime.daysh264mobile,    retentiontime.daysh264sd,    retentiontime.hasextendedretentiontimepermission | [optional] [default to [&quot;catchall.haspermission, contract.hasxlpackage, contract.hasxxlpackage, contract.iscancelled, contract.islocked, contract.isrunning, contract.packagename, erotic.isenabled, fullname, guard.isenabled, id, livestreaming.isenabled, playlists.allowed, recordbuffer.followuptime, recordbuffer.leadtime, recordformat.id, recordformat.name, retentiontime.daysdivx, retentiontime.daysh264hd, retentiontime.daysh264mobile, retentiontime.daysh264sd, retentiontime.hasextendedretentiontimepermission&quot;]]

### Return type

[**\Swagger\Client\Model\ResponseUser**](../Model/ResponseUser.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

