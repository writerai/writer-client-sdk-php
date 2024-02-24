# Snippet


## Overview

Methods related to Snippets

### Available Operations

* [delete](#delete) - Delete snippets
* [find](#find) - Find snippets
* [update](#update) - Update snippets

## delete

Delete snippets

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(545907)
    ->setSecurity($security)->build();

try {
        $request = new Operations\DeleteSnippetsRequest();
    $request->xRequestID = '<value>';
    $request->ids = [
        '<value>',
    ];
    $request->teamId = 841399;;

    $response = $sdk->snippet->delete($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\DeleteSnippetsRequest](../../Models/Operations/DeleteSnippetsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteSnippetsResponse](../../Models/Operations/DeleteSnippetsResponse.md)**


## find

Find snippets

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(40141)
    ->setSecurity($security)->build();

try {
        $request = new Operations\FindSnippetsRequest();
    $request->limit = 326883;
    $request->offset = 488098;
    $request->search = '<value>';
    $request->shortcuts = [
        '<value>',
    ];
    $request->sortField = Operations\SortField::ModificationTime;
    $request->sortOrder = Operations\SortOrder::Desc;
    $request->tags = [
        '<value>',
    ];
    $request->teamId = 111247;;

    $response = $sdk->snippet->find($request);

    if ($response->paginatedResultSnippetWithUser !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\WriterAi\SDK\Models\Operations\FindSnippetsRequest](../../Models/Operations/FindSnippetsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\WriterAi\SDK\Models\Operations\FindSnippetsResponse](../../Models/Operations/FindSnippetsResponse.md)**


## update

Update snippets

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(857478)
    ->setSecurity($security)->build();

try {
        $request = new Operations\UpdateSnippetsRequest();
    $request->requestBody = [
        new Shared\SnippetUpdate(),
    ];
    $request->xRequestID = '<value>';
    $request->teamId = 24555;;

    $response = $sdk->snippet->update($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\UpdateSnippetsRequest](../../Models/Operations/UpdateSnippetsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\UpdateSnippetsResponse](../../Models/Operations/UpdateSnippetsResponse.md)**

