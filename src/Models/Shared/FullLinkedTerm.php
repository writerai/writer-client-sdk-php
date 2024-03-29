<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class FullLinkedTerm
{
	#[\JMS\Serializer\Annotation\SerializedName('approvedTermExtension')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\ApprovedTermExtension')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ApprovedTermExtension $approvedTermExtension = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('caseSensitive')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $caseSensitive;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('linkedTermId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $linkedTermId;
    
	#[\JMS\Serializer\Annotation\SerializedName('pos')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\Pos>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Pos $pos = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('term')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $term;
    
	#[\JMS\Serializer\Annotation\SerializedName('termId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termId;
    
	public function __construct()
	{
		$this->approvedTermExtension = null;
		$this->caseSensitive = false;
		$this->id = null;
		$this->linkedTermId = 0;
		$this->pos = null;
		$this->term = "";
		$this->termId = 0;
	}
}
