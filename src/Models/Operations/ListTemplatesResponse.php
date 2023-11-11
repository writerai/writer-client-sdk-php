<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


class ListTemplatesResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Bad Request
     * 
     * @var ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse
     */
	
    public ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse = null;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	
    public ?\WriterAi\SDK\Models\Shared\TemplateDetailsResponse $templateDetailsResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->failResponse = null;
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->templateDetailsResponse = null;
	}
}
