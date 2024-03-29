<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class ContentCheckRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \WriterAi\SDK\Models\Shared\ContentRequest $contentRequest;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	public function __construct()
	{
		$this->contentRequest = new \WriterAi\SDK\Models\Shared\ContentRequest();
		$this->organizationId = null;
		$this->teamId = 0;
	}
}
