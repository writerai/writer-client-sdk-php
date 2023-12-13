<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class TermTagResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('parentTagId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $parentTagId;
    
	#[\JMS\Serializer\Annotation\SerializedName('tag')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $tag;
    
	#[\JMS\Serializer\Annotation\SerializedName('termId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termId;
    
	public function __construct()
	{
		$this->id = 0;
		$this->parentTagId = 0;
		$this->tag = "";
		$this->termId = 0;
	}
}
