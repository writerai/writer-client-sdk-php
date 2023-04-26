# user

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
use \WriterAi\SDK\Models\Operations\ListUsersSortFieldEnum;
use \WriterAi\SDK\Models\Operations\ListUsersSortOrderEnum;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListUsersRequest();
    $request->limit = 995300;
    $request->offset = 653108;
    $request->search = 'occaecati';
    $request->sortField = ListUsersSortFieldEnum::NAME;
    $request->sortOrder = ListUsersSortOrderEnum::ASC;

    $response = $sdk->user->list($request);

    if ($response->paginatedResultUserPublicResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
