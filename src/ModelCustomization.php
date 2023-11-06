<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class ModelCustomization 
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
     * Create model customization
     * 
     * @param \WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest $request
     * @return \WriterAi\SDK\Models\Operations\CreateModelCustomizationResponse
     */
	public function create(
        \WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest $request,
    ): \WriterAi\SDK\Models\Operations\CreateModelCustomizationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/model/{modelId}/customization', \WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "createCustomizationRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\CreateModelCustomizationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->modelCustomization = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ModelCustomization', 'json');
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
     * Delete Model customization
     * 
     * @param \WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest $request
     * @return \WriterAi\SDK\Models\Operations\DeleteModelCustomizationResponse
     */
	public function delete(
        ?\WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest $request,
    ): \WriterAi\SDK\Models\Operations\DeleteModelCustomizationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/model/{modelId}/customization/{customizationId}', \WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\DeleteModelCustomizationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteModelCustomization200ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Operations\DeleteModelCustomization200ApplicationJSON', 'json');
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
     * Get model customization
     * 
     * @param \WriterAi\SDK\Models\Operations\GetModelCustomizationRequest $request
     * @return \WriterAi\SDK\Models\Operations\GetModelCustomizationResponse
     */
	public function get(
        ?\WriterAi\SDK\Models\Operations\GetModelCustomizationRequest $request,
    ): \WriterAi\SDK\Models\Operations\GetModelCustomizationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/model/{modelId}/customization/{customizationId}', \WriterAi\SDK\Models\Operations\GetModelCustomizationRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\GetModelCustomizationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->modelCustomization = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ModelCustomization', 'json');
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
     * List model customizations
     * 
     * @param \WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest $request
     * @return \WriterAi\SDK\Models\Operations\ListModelCustomizationsResponse
     */
	public function list(
        ?\WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest $request,
    ): \WriterAi\SDK\Models\Operations\ListModelCustomizationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/llm/organization/{organizationId}/model/{modelId}/customization', \WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \WriterAi\SDK\Models\Operations\ListModelCustomizationsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customizationsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\CustomizationsResponse', 'json');
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