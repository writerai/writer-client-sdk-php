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
    $request->sortField = FindSnippetsSortField::SHORTCUT;
    $request->sortOrder = FindSnippetsSortOrder::DESC;
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
