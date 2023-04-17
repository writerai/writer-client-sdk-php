<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class TermMistake
{
	#[\JMS\Serializer\Annotation\SerializedName('caseSensitive')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $caseSensitive;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('mistake')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $mistake;
    
	#[\JMS\Serializer\Annotation\SerializedName('pos')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\TermMistakePosEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TermMistakePosEnum $pos = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('termBankId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termBankId;
    
	#[\JMS\Serializer\Annotation\SerializedName('termId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termId;
    
	public function __construct()
	{
		$this->caseSensitive = false;
		$this->id = null;
		$this->mistake = "";
		$this->pos = null;
		$this->termBankId = 0;
		$this->termId = 0;
	}
}
