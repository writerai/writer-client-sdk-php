# styleguide

## Overview

Methods related to Styleguide

### Available Operations

* [get](#get) - Page details
* [listPages](#listpages) - List your styleguide pages

## get

Page details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\PageDetailsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new PageDetailsRequest();
    $request->pageId = 437032;

    $response = $sdk->styleguide->get($request);

    if ($response->pageWithSectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## listPages

List your styleguide pages

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListPagesRequest;
use \WriterAi\SDK\Models\Operations\ListPagesStatus;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListPagesRequest();
    $request->limit = 902349;
    $request->offset = 697631;
    $request->status = ListPagesStatus::LIVE;

    $response = $sdk->styleguide->listPages($request);

    if ($response->paginatedResultPagePublicApiResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
