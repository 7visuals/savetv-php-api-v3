# Swagger\Client\RecordsDeleteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v3RecordsDelete**](RecordsDeleteApi.md#v3recordsdelete) | **DELETE** /v3/records | Deletes the records that match the given filter.
[**v3RecordsTelecastIdDelete**](RecordsDeleteApi.md#v3recordstelecastiddelete) | **DELETE** /v3/records/{telecastId} | Deletes the record with the given identifier.
[**v3RecordsTelecastIdNotificationDelete**](RecordsDeleteApi.md#v3recordstelecastidnotificationdelete) | **DELETE** /v3/records/{telecastId}/notification | Unsubscribe from a record notification.
[**v3RecordsTelecastIdResumeDelete**](RecordsDeleteApi.md#v3recordstelecastidresumedelete) | **DELETE** /v3/records/{telecastId}/resume | Deletes the current stream position used for later resume.

# **v3RecordsDelete**
> \Swagger\Client\Model\ResponseRecordOperation[] v3RecordsDelete($ad_free_available, $channels, $day_of_weeks, $editorial_telecast_list_ids, $exact_title, $exact_titles, $excluded_telecast_ids, $excluded_tv_stations, $exclude_repeated_broadcasts, $fields, $fsk, $is_highlight, $last_update_date, $limit, $max_end_date, $max_start_date, $min_end_date, $min_start_date, $min_start_time_hour, $min_start_time_hour, $min_start_time_minute, $min_start_time_minute, $no_paging_header, $offset, $q, $record_formats, $record_states, $remove_deleted_telecasts, $search_text_scope, $sort, $star_ids, $tags, $telecast_ids, $time_block, $time_blocks, $tv_categories, $tv_stations, $tv_sub_categories)

Deletes the records that match the given filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_free_available = true; // bool | Determines wether the ad cut list is available.
$channels = array(56); // int[] | A comma-separated list of TV channel identifiers.
$day_of_weeks = array(new \Swagger\Client\Model\DayOfWeek()); // \Swagger\Client\Model\DayOfWeek[] | Selects only telecast whose start date matches the given day of weeks. The start date comparison is based on local time.    Values:    0 = Sunday    1 = Monday    2 = Tuesday    3 = Wednesday    4 = Thursday    5 = Friday    6 = Saturday
$editorial_telecast_list_ids = array("editorial_telecast_list_ids_example"); // string[] | Selects telecasts from an editorial maintained list.    Values:    stayathomeeducation    stayathomehighlights    stayathomekids    xmas2019
$exact_title = "exact_title_example"; // string | Selects only telecasts whose title matches exactly (but case insensitive) the given value.
$exact_titles = array("exact_titles_example"); // string[] | Selects only telecasts whose title matches exactly (but case insensitive) one of the given values.    When the parameter \"exactTitle\" is given too, the value of this parameter is ignored.    The titles are separated by a comma. Commas inside a title are escaped with \"\\,\" (1 back slash, 1 commma).    Example:    Title 1: Tatort    Title 2: Im Himmel, unter der Erde    Value: Tatort,Im Himmel\\, unter der Erde
$excluded_telecast_ids = array(56); // int[] | A comma-separated list of telecast identifiers that will be ignored even if the other filter criterias would match these telecasts.
$excluded_tv_stations = array(56); // int[] | A comma-separated list of TV station identifiers that must not match.
$exclude_repeated_broadcasts = true; // bool | 
$fields = array("[\"adfreeavailable, adfreelength, channels, channels.id, channels.name, createdate, defect.adcut.availablelength, defect.adcut.expectedlength, defect.adcut.istelecastendset, defect.adcut.istelecaststartset, defect.encoding.followuptime.availablelength, defect.encoding.followuptime.expectedlength, defect.encoding.leadtime.availablelength, defect.encoding.leadtime.expectedlength, defect.encoding.telecast.availablelength, defect.encoding.telecast.expectedlength, enddate, formats, formats.cutvideosize, formats.recordformat.id, formats.recordformat.name, formats.recordstate.id, formats.recordstate.name, formats.recordstatemessage, formats.retentiondate, formats.uncutvideosize, isadcutenabled, playlists.id, playlists.name, resumepositions, resumepositions.adfree, resumepositions.default, startdate, tags.key, tags.value, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid, updatedate\"]"); // string[] | Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \"telecastid\" is always transmitted.    _The allowed field values:_    adfreeavailable,    adfreelength,    channels,    channels.id,    channels.name,    createdate,    defect.adcut.availablelength,    defect.adcut.expectedlength,    defect.adcut.istelecastendset,    defect.adcut.istelecaststartset,    defect.encoding.followuptime.availablelength,    defect.encoding.followuptime.expectedlength,    defect.encoding.leadtime.availablelength,    defect.encoding.leadtime.expectedlength,    defect.encoding.telecast.availablelength,    defect.encoding.telecast.expectedlength,    enddate,    formats,    formats.cutvideosize,    formats.recordformat.id,    formats.recordformat.name,    formats.recordstate.id,    formats.recordstate.name,    formats.recordstatemessage,    formats.retentiondate,    formats.uncutvideosize,    isadcutenabled,    playlists.id,    playlists.name,    resumepositions,    resumepositions.adfree,    resumepositions.default,    startdate,    tags.key,    tags.value,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid,    updatedate
$fsk = array(56); // int[] | Selects only telecasts whose fsk matches the given value.    Values:    0 = Includes all ages from 0 to 5.    6 = Includes all ages from 6 to 11.    12 = Includes all ages from 12 to 15.    16 = Includes all ages from 16 to 17.    18 = Includes all ages from 18 and above.
$is_highlight = true; // bool | Determines whether the telecast must be an highlight or not.
$last_update_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Selects only records that was updated (finished, ad free available, changed record dates, ...) / created after the given date.    Date format: 2015-03-20 12:30:00Z
$limit = 56; // int | Sets the maximum number of items in result set.    The default value: 50.    The maximum allowed value: 5000.
$max_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The maximum end date of the telecast.    Date format: 2015-03-20 12:30:00Z
$max_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The maximum start date of the telecast.    Date format: 2015-03-20 12:30:00Z
$min_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The minimum end date of the telecast.    Date format: 2015-03-20 12:30:00Z
$min_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The minimum start date of the telecast.    Date format: 2015-03-20 12:30:00Z
$min_start_time_hour = 56; // int | 
$min_start_time_hour = 56; // int | 
$min_start_time_minute = 56; // int | 
$min_start_time_minute = 56; // int | 
$no_paging_header = true; // bool | By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values
$offset = 56; // int | Sets the number of data items that are skipped in the result set.    The default value: 0.
$q = "q_example"; // string | The search text used for a text search.
$record_formats = array(new \Swagger\Client\Model\RequestRecordFormat()); // \Swagger\Client\Model\RequestRecordFormat[] | A comma-separated list of record formats. Selects only telecasts that are available in the given formats.    Values:    4 = Mobile    5 = SD    6 = HD
$record_states = array(new \Swagger\Client\Model\RequestRecordState()); // \Swagger\Client\Model\RequestRecordState[] | A comma-separated list of record states.    Values:    1 = The user has requested the format.    2 = The format was successfully recorded or the recording process failed.    3 = The format was recorded and encoded successful and the user can download the format.    4 = The recording or encoding process produced errors. The user cannot download the format.    5 = The user has deleted the format.
$remove_deleted_telecasts = true; // bool | When set, deleted telecasts (and records) are removed from result set.    The default value is true.
$search_text_scope = new \Swagger\Client\Model\RequestSearchTextScope(); // \Swagger\Client\Model\RequestSearchTextScope | The scope defines the kind of the text search.    The default value is: 1    Values:1 = search in all texts    2 = search in title and subtitle
$sort = array(new \Swagger\Client\Model\SortDescription()); // \Swagger\Client\Model\SortDescription[] | Sets the sort properties. The values are comma-separated. To sort ascending add a \"+\" before the sort property, to sort descending add a \"-\" before the sort property.    When omitted, a default sorting is used.    Example: sort=+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    category    episode    random    startdate    subcategory    subtitle    title    tvstationposition    year    Default sorting:    +startdate
$star_ids = array(56); // int[] | A comma-separated list of star identifiers.
$tags = array("tags_example"); // string[] | A comma-separated list of tag keys.    Values:    record:guard = The record was adjusted by the guard.    record:manual = The record was created manually.    record:resume:0 = The record was partially seen and can be resumed at the last position. The record was seen with ad.    record:resume:1 = The record was partially seen and can be resumed at the last position. The record was seen without ad.    record:seen = The record was seen / downloaded.
$telecast_ids = array(56); // int[] | A comma-separated list of telecast identifiers.
$time_block = new \Swagger\Client\Model\RequestTimeBlock(); // \Swagger\Client\Model\RequestTimeBlock | A time block selects telecasts of one time range.    Values    1 = telecasts that start between 06:00 and 12:00, contains also the telecast that runs at 06:00    2 = telecasts that start between 06:00 and 12:00    3 = telecasts that start between 12:00 and 18:00    4 = telecasts that start between 18:00 and 00:00    5 = telecasts that start between 00:00 and 06:00    6 = telecasts that are running currently, one telecast per TV station    7 = telecasts that start after the currently running telecasts, one telecast per TV station    8 = telecasts that start between 20:15 and 20:30    9 = telecasts that start after 22:15
$time_blocks = array(new \Swagger\Client\Model\RequestTimeBlock()); // \Swagger\Client\Model\RequestTimeBlock[] | A list of time blocks that selects telecasts of one time range.    Values:    1 = telecasts that start between 06:00 and 12:00, contains also the telecast that runs at 06:00    2 = telecasts that start between 06:00 and 12:00    3 = telecasts that start between 12:00 and 18:00    4 = telecasts that start between 18:00 and 00:00    5 = telecasts that start between 00:00 and 06:00    6 = telecasts that are running currently, one telecast per TV station    7 = telecasts that start after the currently running telecasts, one telecast per TV station    8 = telecasts that start between 20:15 and 20:30    9 = telecasts that start after 22:15    6 + 7 must be used exclusively, all others can be combined.
$tv_categories = array(56); // int[] | A comma-separated list of TV category identifiers.
$tv_stations = array(56); // int[] | A comma-separated list of TV station identifiers.
$tv_sub_categories = array(56); // int[] | A comma-separated list of TV sub category identifiers.

try {
    $result = $apiInstance->v3RecordsDelete($ad_free_available, $channels, $day_of_weeks, $editorial_telecast_list_ids, $exact_title, $exact_titles, $excluded_telecast_ids, $excluded_tv_stations, $exclude_repeated_broadcasts, $fields, $fsk, $is_highlight, $last_update_date, $limit, $max_end_date, $max_start_date, $min_end_date, $min_start_date, $min_start_time_hour, $min_start_time_hour, $min_start_time_minute, $min_start_time_minute, $no_paging_header, $offset, $q, $record_formats, $record_states, $remove_deleted_telecasts, $search_text_scope, $sort, $star_ids, $tags, $telecast_ids, $time_block, $time_blocks, $tv_categories, $tv_stations, $tv_sub_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsDeleteApi->v3RecordsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_free_available** | **bool**| Determines wether the ad cut list is available. | [optional]
 **channels** | [**int[]**](../Model/int.md)| A comma-separated list of TV channel identifiers. | [optional]
 **day_of_weeks** | [**\Swagger\Client\Model\DayOfWeek[]**](../Model/\Swagger\Client\Model\DayOfWeek.md)| Selects only telecast whose start date matches the given day of weeks. The start date comparison is based on local time.    Values:    0 &#x3D; Sunday    1 &#x3D; Monday    2 &#x3D; Tuesday    3 &#x3D; Wednesday    4 &#x3D; Thursday    5 &#x3D; Friday    6 &#x3D; Saturday | [optional]
 **editorial_telecast_list_ids** | [**string[]**](../Model/string.md)| Selects telecasts from an editorial maintained list.    Values:    stayathomeeducation    stayathomehighlights    stayathomekids    xmas2019 | [optional]
 **exact_title** | **string**| Selects only telecasts whose title matches exactly (but case insensitive) the given value. | [optional]
 **exact_titles** | [**string[]**](../Model/string.md)| Selects only telecasts whose title matches exactly (but case insensitive) one of the given values.    When the parameter \&quot;exactTitle\&quot; is given too, the value of this parameter is ignored.    The titles are separated by a comma. Commas inside a title are escaped with \&quot;\\,\&quot; (1 back slash, 1 commma).    Example:    Title 1: Tatort    Title 2: Im Himmel, unter der Erde    Value: Tatort,Im Himmel\\, unter der Erde | [optional]
 **excluded_telecast_ids** | [**int[]**](../Model/int.md)| A comma-separated list of telecast identifiers that will be ignored even if the other filter criterias would match these telecasts. | [optional]
 **excluded_tv_stations** | [**int[]**](../Model/int.md)| A comma-separated list of TV station identifiers that must not match. | [optional]
 **exclude_repeated_broadcasts** | **bool**|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Selects the fields that will be transmitted in the response. The field names are comma-separated, case-insensitive and will be trimmed.    The field \&quot;telecastid\&quot; is always transmitted.    _The allowed field values:_    adfreeavailable,    adfreelength,    channels,    channels.id,    channels.name,    createdate,    defect.adcut.availablelength,    defect.adcut.expectedlength,    defect.adcut.istelecastendset,    defect.adcut.istelecaststartset,    defect.encoding.followuptime.availablelength,    defect.encoding.followuptime.expectedlength,    defect.encoding.leadtime.availablelength,    defect.encoding.leadtime.expectedlength,    defect.encoding.telecast.availablelength,    defect.encoding.telecast.expectedlength,    enddate,    formats,    formats.cutvideosize,    formats.recordformat.id,    formats.recordformat.name,    formats.recordstate.id,    formats.recordstate.name,    formats.recordstatemessage,    formats.retentiondate,    formats.uncutvideosize,    isadcutenabled,    playlists.id,    playlists.name,    resumepositions,    resumepositions.adfree,    resumepositions.default,    startdate,    tags.key,    tags.value,    telecast,    telecast.characterization,    telecast.commentator,    telecast.country,    telecast.createdate,    telecast.description,    telecast.director,    telecast.enddate,    telecast.episode,    telecast.guests,    telecast.hasmoved,    telecast.id,    telecast.imageurl100,    telecast.imageurl250,    telecast.imageurl500,    telecast.interpret,    telecast.isblackwhite,    telecast.ishighlight,    telecast.isomitted,    telecast.moderator,    telecast.originaltitle,    telecast.rating,    telecast.roles,    telecast.roles.rolename,    telecast.roles.starid,    telecast.roles.starname,    telecast.slug,    telecast.startdate,    telecast.subject,    telecast.subtitle,    telecast.title,    telecast.tvcategory.id,    telecast.tvcategory.name,    telecast.tvstation.id,    telecast.tvstation.isrecordable,    telecast.tvstation.largelogourl,    telecast.tvstation.name,    telecast.tvstation.smalllogourl,    telecast.tvsubcategory.id,    telecast.tvsubcategory.name,    telecast.updatedate,    telecast.voluntaryselfregulationofthemovieindustry,    telecast.year,    telecastid,    updatedate | [optional] [default to [&quot;adfreeavailable, adfreelength, channels, channels.id, channels.name, createdate, defect.adcut.availablelength, defect.adcut.expectedlength, defect.adcut.istelecastendset, defect.adcut.istelecaststartset, defect.encoding.followuptime.availablelength, defect.encoding.followuptime.expectedlength, defect.encoding.leadtime.availablelength, defect.encoding.leadtime.expectedlength, defect.encoding.telecast.availablelength, defect.encoding.telecast.expectedlength, enddate, formats, formats.cutvideosize, formats.recordformat.id, formats.recordformat.name, formats.recordstate.id, formats.recordstate.name, formats.recordstatemessage, formats.retentiondate, formats.uncutvideosize, isadcutenabled, playlists.id, playlists.name, resumepositions, resumepositions.adfree, resumepositions.default, startdate, tags.key, tags.value, telecast, telecast.characterization, telecast.commentator, telecast.country, telecast.createdate, telecast.description, telecast.director, telecast.enddate, telecast.episode, telecast.guests, telecast.hasmoved, telecast.id, telecast.imageurl100, telecast.imageurl250, telecast.imageurl500, telecast.interpret, telecast.isblackwhite, telecast.ishighlight, telecast.isomitted, telecast.moderator, telecast.originaltitle, telecast.rating, telecast.roles, telecast.roles.rolename, telecast.roles.starid, telecast.roles.starname, telecast.slug, telecast.startdate, telecast.subject, telecast.subtitle, telecast.title, telecast.tvcategory.id, telecast.tvcategory.name, telecast.tvstation.id, telecast.tvstation.isrecordable, telecast.tvstation.largelogourl, telecast.tvstation.name, telecast.tvstation.smalllogourl, telecast.tvsubcategory.id, telecast.tvsubcategory.name, telecast.updatedate, telecast.voluntaryselfregulationofthemovieindustry, telecast.year, telecastid, updatedate&quot;]]
 **fsk** | [**int[]**](../Model/int.md)| Selects only telecasts whose fsk matches the given value.    Values:    0 &#x3D; Includes all ages from 0 to 5.    6 &#x3D; Includes all ages from 6 to 11.    12 &#x3D; Includes all ages from 12 to 15.    16 &#x3D; Includes all ages from 16 to 17.    18 &#x3D; Includes all ages from 18 and above. | [optional]
 **is_highlight** | **bool**| Determines whether the telecast must be an highlight or not. | [optional]
 **last_update_date** | **\DateTime**| Selects only records that was updated (finished, ad free available, changed record dates, ...) / created after the given date.    Date format: 2015-03-20 12:30:00Z | [optional]
 **limit** | **int**| Sets the maximum number of items in result set.    The default value: 50.    The maximum allowed value: 5000. | [optional]
 **max_end_date** | **\DateTime**| The maximum end date of the telecast.    Date format: 2015-03-20 12:30:00Z | [optional]
 **max_start_date** | **\DateTime**| The maximum start date of the telecast.    Date format: 2015-03-20 12:30:00Z | [optional]
 **min_end_date** | **\DateTime**| The minimum end date of the telecast.    Date format: 2015-03-20 12:30:00Z | [optional]
 **min_start_date** | **\DateTime**| The minimum start date of the telecast.    Date format: 2015-03-20 12:30:00Z | [optional]
 **min_start_time_hour** | **int**|  | [optional]
 **min_start_time_hour** | **int**|  | [optional]
 **min_start_time_minute** | **int**|  | [optional]
 **min_start_time_minute** | **int**|  | [optional]
 **no_paging_header** | **bool**| By default, the response object is a plain list of items and the paging metadata is put into the header.    Example header:     X-Total-Count: 403    X-Paging-Offset: 0    X-Paging-Limit: 20    When set to true, the response object is a complex object that contains the paging meta data and the items in 2 separate properties. The header does not contain additional values | [optional]
 **offset** | **int**| Sets the number of data items that are skipped in the result set.    The default value: 0. | [optional]
 **q** | **string**| The search text used for a text search. | [optional]
 **record_formats** | [**\Swagger\Client\Model\RequestRecordFormat[]**](../Model/\Swagger\Client\Model\RequestRecordFormat.md)| A comma-separated list of record formats. Selects only telecasts that are available in the given formats.    Values:    4 &#x3D; Mobile    5 &#x3D; SD    6 &#x3D; HD | [optional]
 **record_states** | [**\Swagger\Client\Model\RequestRecordState[]**](../Model/\Swagger\Client\Model\RequestRecordState.md)| A comma-separated list of record states.    Values:    1 &#x3D; The user has requested the format.    2 &#x3D; The format was successfully recorded or the recording process failed.    3 &#x3D; The format was recorded and encoded successful and the user can download the format.    4 &#x3D; The recording or encoding process produced errors. The user cannot download the format.    5 &#x3D; The user has deleted the format. | [optional]
 **remove_deleted_telecasts** | **bool**| When set, deleted telecasts (and records) are removed from result set.    The default value is true. | [optional]
 **search_text_scope** | [**\Swagger\Client\Model\RequestSearchTextScope**](../Model/.md)| The scope defines the kind of the text search.    The default value is: 1    Values:1 &#x3D; search in all texts    2 &#x3D; search in title and subtitle | [optional]
 **sort** | [**\Swagger\Client\Model\SortDescription[]**](../Model/\Swagger\Client\Model\SortDescription.md)| Sets the sort properties. The values are comma-separated. To sort ascending add a \&quot;+\&quot; before the sort property, to sort descending add a \&quot;-\&quot; before the sort property.    When omitted, a default sorting is used.    Example: sort&#x3D;+prop1,-prop2    Sorts first by prop1 ascending then by prop2 descending.    Allowed sort properties:    category    episode    random    startdate    subcategory    subtitle    title    tvstationposition    year    Default sorting:    +startdate | [optional]
 **star_ids** | [**int[]**](../Model/int.md)| A comma-separated list of star identifiers. | [optional]
 **tags** | [**string[]**](../Model/string.md)| A comma-separated list of tag keys.    Values:    record:guard &#x3D; The record was adjusted by the guard.    record:manual &#x3D; The record was created manually.    record:resume:0 &#x3D; The record was partially seen and can be resumed at the last position. The record was seen with ad.    record:resume:1 &#x3D; The record was partially seen and can be resumed at the last position. The record was seen without ad.    record:seen &#x3D; The record was seen / downloaded. | [optional]
 **telecast_ids** | [**int[]**](../Model/int.md)| A comma-separated list of telecast identifiers. | [optional]
 **time_block** | [**\Swagger\Client\Model\RequestTimeBlock**](../Model/.md)| A time block selects telecasts of one time range.    Values    1 &#x3D; telecasts that start between 06:00 and 12:00, contains also the telecast that runs at 06:00    2 &#x3D; telecasts that start between 06:00 and 12:00    3 &#x3D; telecasts that start between 12:00 and 18:00    4 &#x3D; telecasts that start between 18:00 and 00:00    5 &#x3D; telecasts that start between 00:00 and 06:00    6 &#x3D; telecasts that are running currently, one telecast per TV station    7 &#x3D; telecasts that start after the currently running telecasts, one telecast per TV station    8 &#x3D; telecasts that start between 20:15 and 20:30    9 &#x3D; telecasts that start after 22:15 | [optional]
 **time_blocks** | [**\Swagger\Client\Model\RequestTimeBlock[]**](../Model/\Swagger\Client\Model\RequestTimeBlock.md)| A list of time blocks that selects telecasts of one time range.    Values:    1 &#x3D; telecasts that start between 06:00 and 12:00, contains also the telecast that runs at 06:00    2 &#x3D; telecasts that start between 06:00 and 12:00    3 &#x3D; telecasts that start between 12:00 and 18:00    4 &#x3D; telecasts that start between 18:00 and 00:00    5 &#x3D; telecasts that start between 00:00 and 06:00    6 &#x3D; telecasts that are running currently, one telecast per TV station    7 &#x3D; telecasts that start after the currently running telecasts, one telecast per TV station    8 &#x3D; telecasts that start between 20:15 and 20:30    9 &#x3D; telecasts that start after 22:15    6 + 7 must be used exclusively, all others can be combined. | [optional]
 **tv_categories** | [**int[]**](../Model/int.md)| A comma-separated list of TV category identifiers. | [optional]
 **tv_stations** | [**int[]**](../Model/int.md)| A comma-separated list of TV station identifiers. | [optional]
 **tv_sub_categories** | [**int[]**](../Model/int.md)| A comma-separated list of TV sub category identifiers. | [optional]

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation[]**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdDelete**
> \Swagger\Client\Model\ResponseRecordOperation v3RecordsTelecastIdDelete($telecast_id)

Deletes the record with the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier of the telecast.

try {
    $result = $apiInstance->v3RecordsTelecastIdDelete($telecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsDeleteApi->v3RecordsTelecastIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier of the telecast. |

### Return type

[**\Swagger\Client\Model\ResponseRecordOperation**](../Model/ResponseRecordOperation.md)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/x.cf-json-base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdNotificationDelete**
> v3RecordsTelecastIdNotificationDelete($telecast_id)

Unsubscribe from a record notification.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The identifier of the telecast.

try {
    $apiInstance->v3RecordsTelecastIdNotificationDelete($telecast_id);
} catch (Exception $e) {
    echo 'Exception when calling RecordsDeleteApi->v3RecordsTelecastIdNotificationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The identifier of the telecast. |

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v3RecordsTelecastIdResumeDelete**
> v3RecordsTelecastIdResumeDelete($telecast_id, $ad_free)

Deletes the current stream position used for later resume.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Default
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RecordsDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telecast_id = 56; // int | The record identifier.
$ad_free = true; // bool | 

try {
    $apiInstance->v3RecordsTelecastIdResumeDelete($telecast_id, $ad_free);
} catch (Exception $e) {
    echo 'Exception when calling RecordsDeleteApi->v3RecordsTelecastIdResumeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **telecast_id** | **int**| The record identifier. |
 **ad_free** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Default](../../README.md#Default)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

