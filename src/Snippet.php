<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class Snippet 
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
     * Delete snippets
     * 
     * @param \WriterAi\SDK\Models\Operations\DeleteSnippetsRequest $request
     * @return \WriterAi\SDK\Models\Operations\DeleteSnippetsResponse
     */
	public function delete(
        \WriterAi\SDK\Models\Operations\DeleteSnippetsRequest $request,
    ): \WriterAi\SDK\Models\Operations\DeleteSnippetsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/snippet/organization/{organizationId}/team/{teamId}', \WriterAi\SDK\Models\Operations\DeleteSnippetsRequest::class, $request, $this->_globals);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\WriterAi\SDK\Models\Operations\DeleteSnippetsRequest::class, $request, $this->_globals));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\DeleteSnippetsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\DeleteResponse', 'json');
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
	
    /**
     * Find snippets
     * 
     * @param \WriterAi\SDK\Models\Operations\FindSnippetsRequest $request
     * @return \WriterAi\SDK\Models\Operations\FindSnippetsResponse
     */
	public function find(
        \WriterAi\SDK\Models\Operations\FindSnippetsRequest $request,
    ): \WriterAi\SDK\Models\Operations\FindSnippetsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/snippet/organization/{organizationId}/team/{teamId}', \WriterAi\SDK\Models\Operations\FindSnippetsRequest::class, $request, $this->_globals);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\WriterAi\SDK\Models\Operations\FindSnippetsRequest::class, $request, $this->_globals));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\FindSnippetsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paginatedResultSnippetWithUser = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\PaginatedResultSnippetWithUser', 'json');
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
	
    /**
     * Update snippets
     * 
     * @param \WriterAi\SDK\Models\Operations\UpdateSnippetsRequest $request
     * @return \WriterAi\SDK\Models\Operations\UpdateSnippetsResponse
     */
	public function update(
        \WriterAi\SDK\Models\Operations\UpdateSnippetsRequest $request,
    ): \WriterAi\SDK\Models\Operations\UpdateSnippetsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/snippet/organization/{organizationId}/team/{teamId}', \WriterAi\SDK\Models\Operations\UpdateSnippetsRequest::class, $request, $this->_globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "requestBody", "json");
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        
        $httpResponse = $this->_securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\UpdateSnippetsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->snippetWithUsers = $serializer->deserialize((string)$httpResponse->getBody(), 'array<WriterAi\SDK\Models\Shared\SnippetWithUser>', 'json');
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