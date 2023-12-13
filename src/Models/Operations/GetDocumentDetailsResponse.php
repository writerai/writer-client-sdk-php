<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


class GetDocumentDetailsResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
	
    public ?\WriterAi\SDK\Models\Shared\Document $document = null;
    
    /**
     * Bad Request
     * 
     * @var ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse
     */
	
    public ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse = null;
    
    /**
     * $headers
     * 
     * @var array<string, array<string>> $headers
     */
	
    public array $headers;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->document = null;
		$this->failResponse = null;
		$this->headers = [];
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
