<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


/**
 */
enum ListUsersSortField: string
{
    case ID = 'id';
    case NAME = 'name';
    case CREATION_TIME = 'creationTime';
    case DELETED = 'deleted';
    case MODIFICATION_TIME = 'modificationTime';
    case EMAIL = 'email';
    case LAST_SEEN = 'lastSeen';
}