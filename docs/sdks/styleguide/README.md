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
    $request->pageId = 902599;

    $response = $sdk->styleguide->get($request);

    if ($response->pageWithSectionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\WriterAi\SDK\Models\Operations\PageDetailsRequest](../../models/operations/PageDetailsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\WriterAi\SDK\Models\Operations\PageDetailsResponse](../../models/operations/PageDetailsResponse.md)**


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
    $request->limit = 681820;
    $request->offset = 449950;
    $request->status = ListPagesStatus::Live;

    $response = $sdk->styleguide->listPages($request);

    if ($response->paginatedResultPagePublicApiResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\ListPagesRequest](../../models/operations/ListPagesRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListPagesResponse](../../models/operations/ListPagesResponse.md)**

