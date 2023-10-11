# User
(*user*)

## Overview

Methods related to User

### Available Operations

* [list](#list) - List users

## list

List users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListUsersRequest;
use \WriterAi\SDK\Models\Operations\ListUsersSortField;
use \WriterAi\SDK\Models\Operations\ListUsersSortOrder;

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUsersRequest();
    $request->limit = 768578;
    $request->offset = 99895;
    $request->search = 'Metal Canada';
    $request->sortField = ListUsersSortField::LastSeen;
    $request->sortOrder = ListUsersSortOrder::Desc;

    $response = $sdk->user->list($request);

    if ($response->paginatedResultUserPublicResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\ListUsersRequest](../../models/operations/ListUsersRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**

