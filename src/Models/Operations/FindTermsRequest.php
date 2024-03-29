<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class FindTermsRequest
{
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=partOfSpeech')]
    public ?PartOfSpeech $partOfSpeech = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortField')]
    public ?QueryParamSortField $sortField = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sortOrder')]
    public ?QueryParamSortOrder $sortOrder = null;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tags')]
    public ?array $tags = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=term')]
    public ?string $term = null;
    
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=type')]
    public ?Type $type = null;
    
	public function __construct()
	{
		$this->limit = null;
		$this->offset = null;
		$this->organizationId = null;
		$this->partOfSpeech = null;
		$this->sortField = null;
		$this->sortOrder = null;
		$this->tags = null;
		$this->teamId = 0;
		$this->term = null;
		$this->type = null;
	}
}
