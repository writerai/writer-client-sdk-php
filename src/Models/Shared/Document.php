<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class Document
{
	#[\JMS\Serializer\Annotation\SerializedName('access')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\DocumentAccess>')]
    public DocumentAccess $access;
    
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $content;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdUser')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\SimpleUser')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SimpleUser $createdUser = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('creationTime')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $creationTime;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('modificationTime')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $modificationTime;
    
	#[\JMS\Serializer\Annotation\SerializedName('modifiedUser')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\SimpleUser')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SimpleUser $modifiedUser = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('organizationId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $organizationId;
    
	#[\JMS\Serializer\Annotation\SerializedName('score')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $score;
    
	#[\JMS\Serializer\Annotation\SerializedName('teamId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $teamId;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	public function __construct()
	{
		$this->access = \WriterAi\SDK\Models\Shared\DocumentAccess::Private;
		$this->content = "";
		$this->createdUser = null;
		$this->creationTime = new \DateTime();
		$this->id = 0;
		$this->modificationTime = new \DateTime();
		$this->modifiedUser = null;
		$this->organizationId = 0;
		$this->score = 0;
		$this->teamId = 0;
		$this->title = "";
	}
}