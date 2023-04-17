<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class GenerateContentRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \WriterAi\SDK\Models\Shared\GenerateTemplateRequest $generateTemplateRequest;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	public function __construct()
	{
		$this->generateTemplateRequest = new \WriterAi\SDK\Models\Shared\GenerateTemplateRequest();
		$this->organizationId = null;
		$this->teamId = 0;
	}
}
