<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


enum ListUsersQueryParamSortField: string
{
    case Id = 'id';
    case Name = 'name';
    case CreationTime = 'creationTime';
    case Deleted = 'deleted';
    case ModificationTime = 'modificationTime';
    case Email = 'email';
    case LastSeen = 'lastSeen';
}