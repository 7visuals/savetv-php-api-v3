# Swagger\Client\RecordsPostApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3RecordsPost**](RecordsPostApi.md#v3recordspost) | **POST** /v3/records | Creates new records or updates existing records with the given record buffer times.
[**v3RecordsTelecastIdPost**](RecordsPostApi.md#v3recordstelecastidpost) | **POST** /v3/records/{telecastId} | Creates a new record or updates an existing record with the given record buffer times.
[**v3RecordsTelecastIdResumePost**](RecordsPostApi.md#v3recordstelecastidresumepost) | **POST** /v3/records/{telecastId}/resume | Stores the current stream position for later resume.
[**v3RecordsTelecastIdTagsDownloadCompletedPost**](RecordsPostApi.md#v3recordstelecastidtagsdownloadcompletedpost) | **POST** /v3/records/{telecastId}/tags/download-completed | Creates a tag to mark the record as downloaded.

# **v3RecordsPost**
> \Swagger\Client\Model\ResponseRecordOperation[] v3RecordsPost($body)

Creates new records or updates existing records with the given record buffer times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\RequestRecordOrder(); // \Swagger\Client\Model\RequestRecordOrder | The record order.

try {
    $result = $apiInstance->v3RecordsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RequestRecordOrder**](../Model/RequestRecordOrder.md)| The record order. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation[]**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsPost**
> \Swagger\Client\Model\ResponseRecordOperation[] v3RecordsPost($telecast_ids, $follow_up_time, $lead_time)

Creates new records or updates existing records with the given record buffer times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_ids = array(56); // int[] | 
$follow_up_time = 56; // int | 
$lead_time = 56; // int | 

try {
    $result = $apiInstance->v3RecordsPost($telecast_ids, $follow_up_time, $lead_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **follow_up_time** | **int**|  | [optional]
 **lead_time** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation[]**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdPost**
> \Swagger\Client\Model\ResponseRecordOperation v3RecordsTelecastIdPost($telecast_id, $body)

Creates a new record or updates an existing record with the given record buffer times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier of the telecast.
$body = new \Swagger\Client\Model\RequestRecordBuffer(); // \Swagger\Client\Model\RequestRecordBuffer | The record buffer times.

try {
    $result = $apiInstance->v3RecordsTelecastIdPost($telecast_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsTelecastIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier of the telecast. |
 **body** | [**\Swagger\Client\Model\RequestRecordBuffer**](../Model/RequestRecordBuffer.md)| The record buffer times. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdPost**
> \Swagger\Client\Model\ResponseRecordOperation v3RecordsTelecastIdPost($telecast_id, $follow_up_time, $lead_time)

Creates a new record or updates an existing record with the given record buffer times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier of the telecast.
$follow_up_time = 56; // int | 
$lead_time = 56; // int | 

try {
    $result = $apiInstance->v3RecordsTelecastIdPost($telecast_id, $follow_up_time, $lead_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsTelecastIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier of the telecast. |
 **follow_up_time** | **int**|  | [optional]
 **lead_time** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdResumePost**
> v3RecordsTelecastIdResumePost($telecast_id, $body)

Stores the current stream position for later resume.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The record identifier.
$body = new \Swagger\Client\Model\RequestSetRecordResume(); // \Swagger\Client\Model\RequestSetRecordResume | The record resume.

try {
    $apiInstance->v3RecordsTelecastIdResumePost($telecast_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsTelecastIdResumePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The record identifier. |
 **body** | [**\Swagger\Client\Model\RequestSetRecordResume**](../Model/RequestSetRecordResume.md)| The record resume. | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdResumePost**
> v3RecordsTelecastIdResumePost($telecast_id, $position, $ad_free)

Stores the current stream position for later resume.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The record identifier.
$position = 56; // int | 
$ad_free = true; // bool | 

try {
    $apiInstance->v3RecordsTelecastIdResumePost($telecast_id, $position, $ad_free);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsTelecastIdResumePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The record identifier. |
 **position** | **int**|  | [optional]
 **ad_free** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: application/json, application/x.cf-json-base64, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdTagsDownloadCompletedPost**
> v3RecordsTelecastIdTagsDownloadCompletedPost($telecast_id)

Creates a tag to mark the record as downloaded.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsPostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The telecast identifier.

try {
    $apiInstance->v3RecordsTelecastIdTagsDownloadCompletedPost($telecast_id);
} catch (Exception $e) {
    echo 'Exception when calling RecordsPostApi->v3RecordsTelecastIdTagsDownloadCompletedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The telecast identifier. |

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

