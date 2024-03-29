<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class ApprovedTermExtension
{
	#[\JMS\Serializer\Annotation\SerializedName('capitalize')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $capitalize;
    
	#[\JMS\Serializer\Annotation\SerializedName('fixCase')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $fixCase;
    
	#[\JMS\Serializer\Annotation\SerializedName('fixCommonMistakes')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $fixCommonMistakes;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('termId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termId;
    
	public function __construct()
	{
		$this->capitalize = false;
		$this->fixCase = false;
		$this->fixCommonMistakes = false;
		$this->id = null;
		$this->termId = 0;
	}
}
