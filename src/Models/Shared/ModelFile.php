<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class ModelFile
{
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('format')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $format;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('numberOfSamples')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $numberOfSamples;
    
	#[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $size;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->format = "";
		$this->id = "";
		$this->name = "";
		$this->numberOfSamples = 0;
		$this->size = 0;
	}
}
