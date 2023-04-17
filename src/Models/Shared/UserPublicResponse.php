<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class UserPublicResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('accountStatus')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\UserPublicResponseAccountStatusEnum>')]
    public UserPublicResponseAccountStatusEnum $accountStatus;
    
	#[\JMS\Serializer\Annotation\SerializedName('avatar')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $avatar = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('firstName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $firstName;
    
	#[\JMS\Serializer\Annotation\SerializedName('fullName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $fullName;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('invitedBy')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $invitedBy = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('lastName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('lastSeenOnline')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $lastSeenOnline = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;
    
	public function __construct()
	{
		$this->accountStatus = \WriterAi\SDK\Models\Shared\UserPublicResponseAccountStatusEnum::INVITED;
		$this->avatar = null;
		$this->createdAt = new \DateTime();
		$this->email = null;
		$this->firstName = "";
		$this->fullName = "";
		$this->id = 0;
		$this->invitedBy = null;
		$this->lastName = null;
		$this->lastSeenOnline = null;
		$this->timezone = null;
	}
}
