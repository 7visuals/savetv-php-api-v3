<?php
/**
 * ChannelsDeleteApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Web API v3
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ChannelsDeleteApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelsDeleteApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v3ChannelsCatchallDelete
     *
     * Deletes all catch all channels for the current user.
     *
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function v3ChannelsCatchallDelete($record_handling = null)
    {
        $this->v3ChannelsCatchallDeleteWithHttpInfo($record_handling);
    }

    /**
     * Operation v3ChannelsCatchallDeleteWithHttpInfo
     *
     * Deletes all catch all channels for the current user.
     *
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v3ChannelsCatchallDeleteWithHttpInfo($record_handling = null)
    {
        $returnType = '';
        $request = $this->v3ChannelsCatchallDeleteRequest($record_handling);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation v3ChannelsCatchallDeleteAsync
     *
     * Deletes all catch all channels for the current user.
     *
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3ChannelsCatchallDeleteAsync($record_handling = null)
    {
        return $this->v3ChannelsCatchallDeleteAsyncWithHttpInfo($record_handling)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v3ChannelsCatchallDeleteAsyncWithHttpInfo
     *
     * Deletes all catch all channels for the current user.
     *
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3ChannelsCatchallDeleteAsyncWithHttpInfo($record_handling = null)
    {
        $returnType = '';
        $request = $this->v3ChannelsCatchallDeleteRequest($record_handling);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v3ChannelsCatchallDelete'
     *
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v3ChannelsCatchallDeleteRequest($record_handling = null)
    {

        $resourcePath = '/v3/channels/catchall';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($record_handling !== null) {
            $queryParams['recordHandling'] = ObjectSerializer::toQueryValue($record_handling);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v3ChannelsChannelIdDelete
     *
     * Deletes the channel with the given identifier.
     *
     * @param  int $channel_id The channel identifier. (required)
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function v3ChannelsChannelIdDelete($channel_id, $record_handling = null)
    {
        $this->v3ChannelsChannelIdDeleteWithHttpInfo($channel_id, $record_handling);
    }

    /**
     * Operation v3ChannelsChannelIdDeleteWithHttpInfo
     *
     * Deletes the channel with the given identifier.
     *
     * @param  int $channel_id The channel identifier. (required)
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v3ChannelsChannelIdDeleteWithHttpInfo($channel_id, $record_handling = null)
    {
        $returnType = '';
        $request = $this->v3ChannelsChannelIdDeleteRequest($channel_id, $record_handling);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation v3ChannelsChannelIdDeleteAsync
     *
     * Deletes the channel with the given identifier.
     *
     * @param  int $channel_id The channel identifier. (required)
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3ChannelsChannelIdDeleteAsync($channel_id, $record_handling = null)
    {
        return $this->v3ChannelsChannelIdDeleteAsyncWithHttpInfo($channel_id, $record_handling)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v3ChannelsChannelIdDeleteAsyncWithHttpInfo
     *
     * Deletes the channel with the given identifier.
     *
     * @param  int $channel_id The channel identifier. (required)
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3ChannelsChannelIdDeleteAsyncWithHttpInfo($channel_id, $record_handling = null)
    {
        $returnType = '';
        $request = $this->v3ChannelsChannelIdDeleteRequest($channel_id, $record_handling);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v3ChannelsChannelIdDelete'
     *
     * @param  int $channel_id The channel identifier. (required)
     * @param  \Swagger\Client\Model\RequestChannelDeleteRecordHandling $record_handling Sets the handling of the records created by the channel.     Default value: 0    Values:     0 &#x3D; Keep all records    1 &#x3D; Deletes programmed records only (state Requested)    2 &#x3D; Deletes ready records only (state Ok, Failed)    3 &#x3D; Deletes all records (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v3ChannelsChannelIdDeleteRequest($channel_id, $record_handling = null)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null || (is_array($channel_id) && count($channel_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel_id when calling v3ChannelsChannelIdDelete'
            );
        }

        $resourcePath = '/v3/channels/{channelId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($record_handling !== null) {
            $queryParams['recordHandling'] = ObjectSerializer::toQueryValue($record_handling);
        }

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                '{' . 'channelId' . '}',
                ObjectSerializer::toPathValue($channel_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}