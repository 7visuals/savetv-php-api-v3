# ResponseRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**telecast_id** | **int** |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**update_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_ad_cut_enabled** | **bool** |  | [optional] 
**ad_free_available** | **bool** |  | [optional] 
**ad_free_length** | **int** |  | [optional] 
**formats** | [**\Swagger\Client\Model\ResponseRecordRequestedFormat[]**](ResponseRecordRequestedFormat.md) |  | [optional] 
**channels** | [**\Swagger\Client\Model\ResponseChannelBase[]**](ResponseChannelBase.md) |  | [optional] 
**telecast** | [**AllOfResponseRecordTelecast**](AllOfResponseRecordTelecast.md) |  | [optional] 
**defect** | [**AllOfResponseRecordDefect**](AllOfResponseRecordDefect.md) |  | [optional] 
**tags** | [**\Swagger\Client\Model\ResponseTag[]**](ResponseTag.md) |  | [optional] 
**playlists** | [**\Swagger\Client\Model\ResponsePlaylistBase[]**](ResponsePlaylistBase.md) |  | [optional] 
**resume_positions** | [**AllOfResponseRecordResumePositions**](AllOfResponseRecordResumePositions.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

