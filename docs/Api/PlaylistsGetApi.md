# Swagger\Client\PlaylistsGetApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3PlaylistsCountGet**](PlaylistsGetApi.md#v3playlistscountget) | **GET** /v3/playlists/count | Retrieves the number of own and followed playlists.
[**v3PlaylistsGet**](PlaylistsGetApi.md#v3playlistsget) | **GET** /v3/playlists | Gets the playlists for the current account.
[**v3PlaylistsPlaylistIdGet**](PlaylistsGetApi.md#v3playlistsplaylistidget) | **GET** /v3/playlists/{playlistId} | Gets the details of the playlist specified by the id.
[**v3PlaylistsPlaylistIdItemsGet**](PlaylistsGetApi.md#v3playlistsplaylistiditemsget) | **GET** /v3/playlists/{playlistId}/items | Gets the items for the playlist.
[**v3PlaylistsWatchLaterGet**](PlaylistsGetApi.md#v3playlistswatchlaterget) | **GET** /v3/playlists/watch-later | Gets the playlist \&quot;watch later\&quot; for the current account.

# **v3PlaylistsCountGet**
> \Swagger\Client\Model\ResponsePlaylistCount v3PlaylistsCountGet()

Retrieves the number of own and followed playlists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->v3PlaylistsCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsGetApi->v3PlaylistsCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ResponsePlaylistCount**](../Model/ResponsePlaylistCount.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsGet**
> \Swagger\Client\Model\ResponsePlaylist[] v3PlaylistsGet($fields, $is_public, $playlist_ids, $playlist_types, $sort)

Gets the playlists for the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \"id, telecastid\" are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid
$is_public = true; // bool | 
$playlist_ids = array(56); // int[] | A list of playlist ids.
$playlist_types = array(56); // int[] | A comma-separated list of playlist types.    Values:    1 = The special playlist \"Watch later\" (Später ansehen).    2 = A playlist created by the user
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    playlisttype    Default sorting:    +name

try {
    $result = $apiInstance->v3PlaylistsGet($fields, $is_public, $playlist_ids, $playlist_types, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsGetApi->v3PlaylistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \&quot;id, telecastid\&quot; are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid | [optional] [default to [&quot;fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid&quot;]]
 **is_public** | **bool**|  | [optional]
 **playlist_ids** | [**int[]**](../Model/int.md)| A list of playlist ids. | [optional]
 **playlist_types** | [**int[]**](../Model/int.md)| A comma-separated list of playlist types.    Values:    1 &#x3D; The special playlist \&quot;Watch later\&quot; (Später ansehen).    2 &#x3D; A playlist created by the user | [optional]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    name    playlisttype    Default sorting:    +name | [optional]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist[]**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdGet**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsPlaylistIdGet($playlist_id, $fields)

Gets the details of the playlist specified by the id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$fields = array("[\"fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \"id, telecastid\" are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdGet($playlist_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsGetApi->v3PlaylistsPlaylistIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \&quot;id, telecastid\&quot; are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid | [optional] [default to [&quot;fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid&quot;]]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsPlaylistIdItemsGet**
> \Swagger\Client\Model\ResponsePlaylistItem[] v3PlaylistsPlaylistIdItemsGet($playlist_id, $fields)

Gets the items for the playlist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 56; // int | The playlist identifier.
$fields = array("[\"fulltitle, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"telecastid\" is always transmitted.    _The allowed field values:_    fulltitle,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid

try {
    $result = $apiInstance->v3PlaylistsPlaylistIdItemsGet($playlist_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsGetApi->v3PlaylistsPlaylistIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **playlist_id** | **int**| The playlist identifier. |
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;telecastid\&quot; is always transmitted.    _The allowed field values:_    fulltitle,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid | [optional] [default to [&quot;fulltitle, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid&quot;]]

### Return type

[**\Swagger\Client\Model\ResponsePlaylistItem[]**](../Model/ResponsePlaylistItem.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3PlaylistsWatchLaterGet**
> \Swagger\Client\Model\ResponsePlaylist v3PlaylistsWatchLaterGet($fields)

Gets the playlist \"watch later\" for the current account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PlaylistsGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("[\"fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \"id, telecastid\" are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid

try {
    $result = $apiInstance->v3PlaylistsWatchLaterGet($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsGetApi->v3PlaylistsWatchLaterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The fields \&quot;id, telecastid\&quot; are always transmitted.    _The allowed field values:_    fulltitle,    id,    ispublic,    itemscount,    lasttelecastid,    name,    playlisttype,    record,    record.adfreeavailable,    record.adfreelength,    record.channels,    record.channels.id,    record.channels.name,    record.createdate,    record.defect.adcut.availablelength,    record.defect.adcut.expectedlength,    record.defect.adcut.istelecastendset,    record.defect.adcut.istelecaststartset,    record.defect.encoding.followuptime.availablelength,    record.defect.encoding.followuptime.expectedlength,    record.defect.encoding.leadtime.availablelength,    record.defect.encoding.leadtime.expectedlength,    record.defect.encoding.telecast.availablelength,    record.defect.encoding.telecast.expectedlength,    record.enddate,    record.formats,    record.formats.cutvideosize,    record.formats.recordformat.id,    record.formats.recordformat.name,    record.formats.recordstate.id,    record.formats.recordstate.name,    record.formats.recordstatemessage,    record.formats.retentiondate,    record.formats.uncutvideosize,    record.isadcutenabled,    record.playlists.id,    record.playlists.name,    record.resumepositions,    record.resumepositions.adfree,    record.resumepositions.default,    record.startdate,    record.tags.key,    record.tags.value,    record.updatedate,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.existsrecord,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid | [optional] [default to [&quot;fulltitle, id, ispublic, itemscount, lasttelecastid, name, playlisttype, record, record.adfreeavailable, record.adfreelength, record.channels, record.channels.id, record.channels.name, record.createdate, record.defect.adcut.availablelength, record.defect.adcut.expectedlength, record.defect.adcut.istelecastendset, record.defect.adcut.istelecaststartset, record.defect.encoding.followuptime.availablelength, record.defect.encoding.followuptime.expectedlength, record.defect.encoding.leadtime.availablelength, record.defect.encoding.leadtime.expectedlength, record.defect.encoding.telecast.availablelength, record.defect.encoding.telecast.expectedlength, record.enddate, record.formats, record.formats.cutvideosize, record.formats.recordformat.id, record.formats.recordformat.name, record.formats.recordstate.id, record.formats.recordstate.name, record.formats.recordstatemessage, record.formats.retentiondate, record.formats.uncutvideosize, record.isadcutenabled, record.playlists.id, record.playlists.name, record.resumepositions, record.resumepositions.adfree, record.resumepositions.default, record.startdate, record.tags.key, record.tags.value, record.updatedate, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.existsrecord, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid&quot;]]

### Return type

[**\Swagger\Client\Model\ResponsePlaylist**](../Model/ResponsePlaylist.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

