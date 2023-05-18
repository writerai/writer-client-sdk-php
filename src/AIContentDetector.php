<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class AIContentDetector 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;
	/** @var array<string, array<string, array<string, string>>> */
	private array $_globals;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 * @param array<string, array<string, array<string, string>>> $globals
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion, array $globals)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
		$this->_globals = $globals;
	}
	
    /**
     * Content detector api
     * 
     * @param \WriterAi\SDK\Models\Operations\DetectContentRequest $request
     * @return \WriterAi\SDK\Models\Operations\DetectContentResponse
     */
	public function detect(
        \WriterAi\SDK\Models\Operations\DetectContentRequest $request,
    ): \WriterAi\SDK\Models\Operations\DetectContentResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/content/organization/{organizationId}/detect', \WriterAi\SDK\Models\Operations\DetectContentRequest::class, $request, $this->_globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "contentDetectorRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s', $this->_language, $this->_sdkVersion, $this->_genVersion);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\DetectContentResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->contentDetectorResponses = $serializer->deserialize((string)$httpResponse->getBody(), 'array<WriterAi\SDK\Models\Shared\ContentDetectorResponse>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->failResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\FailResponse', 'json');
            }
        }

        return $response;
    }
}