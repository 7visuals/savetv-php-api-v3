<?php
/**
 * TelecastsPostApi
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
 * TelecastsPostApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TelecastsPostApi
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
     * Operation v3TelecastsTelecastIdRatingPost
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  \Swagger\Client\Model\RequestTelecastRating $body Sets the Rating for a Telecast. Range between 1 and 5. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Rating
     */
    public function v3TelecastsTelecastIdRatingPost($telecast_id, $body = null)
    {
        list($response) = $this->v3TelecastsTelecastIdRatingPostWithHttpInfo($telecast_id, $body);
        return $response;
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostWithHttpInfo
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  \Swagger\Client\Model\RequestTelecastRating $body Sets the Rating for a Telecast. Range between 1 and 5. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Rating, HTTP status code, HTTP response headers (array of strings)
     */
    public function v3TelecastsTelecastIdRatingPostWithHttpInfo($telecast_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Rating';
        $request = $this->v3TelecastsTelecastIdRatingPostRequest($telecast_id, $body);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Rating',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostAsync
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  \Swagger\Client\Model\RequestTelecastRating $body Sets the Rating for a Telecast. Range between 1 and 5. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3TelecastsTelecastIdRatingPostAsync($telecast_id, $body = null)
    {
        return $this->v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo($telecast_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  \Swagger\Client\Model\RequestTelecastRating $body Sets the Rating for a Telecast. Range between 1 and 5. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo($telecast_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Rating';
        $request = $this->v3TelecastsTelecastIdRatingPostRequest($telecast_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'v3TelecastsTelecastIdRatingPost'
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  \Swagger\Client\Model\RequestTelecastRating $body Sets the Rating for a Telecast. Range between 1 and 5. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v3TelecastsTelecastIdRatingPostRequest($telecast_id, $body = null)
    {
        // verify the required parameter 'telecast_id' is set
        if ($telecast_id === null || (is_array($telecast_id) && count($telecast_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $telecast_id when calling v3TelecastsTelecastIdRatingPost'
            );
        }

        $resourcePath = '/v3/telecasts/{telecastId}/rating';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($telecast_id !== null) {
            $resourcePath = str_replace(
                '{' . 'telecastId' . '}',
                ObjectSerializer::toPathValue($telecast_id),
                $resourcePath
            );
        }

        // form params
        if ($rating !== null) {
            $formParams['rating'] = ObjectSerializer::toFormValue($rating);
        }
        // form params
        if ($rating_deprecated !== null) {
            $formParams['ratingDeprecated'] = ObjectSerializer::toFormValue($rating_deprecated);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/x.cf-json-base64']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/x.cf-json-base64'],
                ['application/json', 'application/x.cf-json-base64', 'application/x-www-form-urlencoded']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPost
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  int $rating rating (optional)
     * @param  int $rating_deprecated rating_deprecated (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Rating
     */
    public function v3TelecastsTelecastIdRatingPost($telecast_id, $rating = null, $rating_deprecated = null)
    {
        list($response) = $this->v3TelecastsTelecastIdRatingPostWithHttpInfo($telecast_id, $rating, $rating_deprecated);
        return $response;
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostWithHttpInfo
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  int $rating (optional)
     * @param  int $rating_deprecated (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Rating, HTTP status code, HTTP response headers (array of strings)
     */
    public function v3TelecastsTelecastIdRatingPostWithHttpInfo($telecast_id, $rating = null, $rating_deprecated = null)
    {
        $returnType = '\Swagger\Client\Model\Rating';
        $request = $this->v3TelecastsTelecastIdRatingPostRequest($telecast_id, $rating, $rating_deprecated);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Rating',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostAsync
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  int $rating (optional)
     * @param  int $rating_deprecated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3TelecastsTelecastIdRatingPostAsync($telecast_id, $rating = null, $rating_deprecated = null)
    {
        return $this->v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo($telecast_id, $rating, $rating_deprecated)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo
     *
     * Ratings the specified identifier.
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  int $rating (optional)
     * @param  int $rating_deprecated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v3TelecastsTelecastIdRatingPostAsyncWithHttpInfo($telecast_id, $rating = null, $rating_deprecated = null)
    {
        $returnType = '\Swagger\Client\Model\Rating';
        $request = $this->v3TelecastsTelecastIdRatingPostRequest($telecast_id, $rating, $rating_deprecated);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'v3TelecastsTelecastIdRatingPost'
     *
     * @param  int $telecast_id The identifier. (required)
     * @param  int $rating (optional)
     * @param  int $rating_deprecated (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function v3TelecastsTelecastIdRatingPostRequest($telecast_id, $rating = null, $rating_deprecated = null)
    {
        // verify the required parameter 'telecast_id' is set
        if ($telecast_id === null || (is_array($telecast_id) && count($telecast_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $telecast_id when calling v3TelecastsTelecastIdRatingPost'
            );
        }

        $resourcePath = '/v3/telecasts/{telecastId}/rating';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($telecast_id !== null) {
            $resourcePath = str_replace(
                '{' . 'telecastId' . '}',
                ObjectSerializer::toPathValue($telecast_id),
                $resourcePath
            );
        }

        // form params
        if ($rating !== null) {
            $formParams['rating'] = ObjectSerializer::toFormValue($rating);
        }
        // form params
        if ($rating_deprecated !== null) {
            $formParams['ratingDeprecated'] = ObjectSerializer::toFormValue($rating_deprecated);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/x.cf-json-base64']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/x.cf-json-base64'],
                ['application/json', 'application/x.cf-json-base64', 'application/x-www-form-urlencoded']
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
            'POST',
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