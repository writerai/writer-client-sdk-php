<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class GenerationModelInfoResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\GenerationModelInfoResponseTypeEnum>')]
    public GenerationModelInfoResponseTypeEnum $type;
    
	public function __construct()
	{
		$this->id = "";
		$this->name = "";
		$this->type = \WriterAi\SDK\Models\Shared\GenerationModelInfoResponseTypeEnum::GPT;
	}
}
