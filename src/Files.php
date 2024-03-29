<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class Files 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Delete file
     * 
     * @param \WriterAi\SDK\Models\Operations\DeleteFileRequest $request
     * @return \WriterAi\SDK\Models\Operations\DeleteFileResponse
     */
	public function delete(
        ?\WriterAi\SDK\Models\Operations\DeleteFileRequest $request,
    ): \WriterAi\SDK\Models\Operations\DeleteFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/file/{fileId}', \WriterAi\SDK\Models\Operations\DeleteFileRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\DeleteFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->object = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Operations\DeleteFileResponseBody', 'json');
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
     * Get file
     * 
     * @param \WriterAi\SDK\Models\Operations\GetFileRequest $request
     * @return \WriterAi\SDK\Models\Operations\GetFileResponse
     */
	public function get(
        ?\WriterAi\SDK\Models\Operations\GetFileRequest $request,
    ): \WriterAi\SDK\Models\Operations\GetFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/file/{fileId}', \WriterAi\SDK\Models\Operations\GetFileRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\GetFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->modelFile = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ModelFile', 'json');
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
     * List files
     * 
     * @param \WriterAi\SDK\Models\Operations\ListFilesRequest $request
     * @return \WriterAi\SDK\Models\Operations\ListFilesResponse
     */
	public function list(
        ?\WriterAi\SDK\Models\Operations\ListFilesRequest $request,
    ): \WriterAi\SDK\Models\Operations\ListFilesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/file', \WriterAi\SDK\Models\Operations\ListFilesRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\ListFilesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->modelFilesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ModelFilesResponse', 'json');
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
     * Upload file
     * 
     * @param \WriterAi\SDK\Models\Operations\UploadFileRequest $request
     * @return \WriterAi\SDK\Models\Operations\UploadFileResponse
     */
	public function upload(
        \WriterAi\SDK\Models\Operations\UploadFileRequest $request,
    ): \WriterAi\SDK\Models\Operations\UploadFileResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/file', \WriterAi\SDK\Models\Operations\UploadFileRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "uploadModelFileRequest", "multipart");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\UploadFileResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->modelFile = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ModelFile', 'json');
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