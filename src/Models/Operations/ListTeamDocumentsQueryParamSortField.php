<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


enum ListTeamDocumentsQueryParamSortField: string
{
    case Title = 'title';
    case CreationTime = 'creationTime';
    case ModificationTime = 'modificationTime';
    case ModifiedByMeTime = 'modifiedByMeTime';
    case OpenedByMeTime = 'openedByMeTime';
}
