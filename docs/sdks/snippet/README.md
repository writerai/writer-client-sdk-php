# snippet

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
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DeleteSnippetsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new DeleteSnippetsRequest();
    $request->xRequestID = 'esse';
    $request->ids = [
        'excepturi',
    ];
    $request->teamId = 135218;

    $response = $sdk->snippet->delete($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\DeleteSnippetsRequest](../../models/operations/DeleteSnippetsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteSnippetsResponse](../../models/operations/DeleteSnippetsResponse.md)**


## find

Find snippets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\FindSnippetsRequest;
use \WriterAi\SDK\Models\Operations\FindSnippetsSortField;
use \WriterAi\SDK\Models\Operations\FindSnippetsSortOrder;

$sdk = Writer::builder()
    ->build();

try {
    $request = new FindSnippetsRequest();
    $request->limit = 18789;
    $request->offset = 324141;
    $request->search = 'natus';
    $request->shortcuts = [
        'iste',
    ];
    $request->sortField = FindSnippetsSortField::Shortcut;
    $request->sortOrder = FindSnippetsSortOrder::Desc;
    $request->tags = [
        'hic',
        'saepe',
    ];
    $request->teamId = 681820;

    $response = $sdk->snippet->find($request);

    if ($response->paginatedResultSnippetWithUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\WriterAi\SDK\Models\Operations\FindSnippetsRequest](../../models/operations/FindSnippetsRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\WriterAi\SDK\Models\Operations\FindSnippetsResponse](../../models/operations/FindSnippetsResponse.md)**


## update

Update snippets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\UpdateSnippetsRequest;
use \WriterAi\SDK\Models\Shared\SnippetUpdate;
use \WriterAi\SDK\Models\Shared\SnippetTagV2;

$sdk = Writer::builder()
    ->build();

try {
    $request = new UpdateSnippetsRequest();
    $request->requestBody = [
        new SnippetUpdate(),
        new SnippetUpdate(),
    ];
    $request->xRequestID = 'corporis';
    $request->teamId = 613064;

    $response = $sdk->snippet->update($request);

    if ($response->snippetWithUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\UpdateSnippetsRequest](../../models/operations/UpdateSnippetsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\UpdateSnippetsResponse](../../models/operations/UpdateSnippetsResponse.md)**

