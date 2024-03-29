<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class FindSnippetsRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;
    
    /**
     * $shortcuts
     * 
     * @var ?array<string> $shortcuts
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=shortcuts')]
    public ?array $shortcuts = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortField')]
    public ?SortField $sortField = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortOrder')]
    public ?SortOrder $sortOrder = null;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tags')]
    public ?array $tags = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	public function __construct()
	{
		$this->limit = null;
		$this->offset = null;
		$this->organizationId = null;
		$this->search = null;
		$this->shortcuts = null;
		$this->sortField = null;
		$this->sortOrder = null;
		$this->tags = null;
		$this->teamId = 0;
	}
}
