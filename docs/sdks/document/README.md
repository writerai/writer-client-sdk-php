# Document
(*document*)

## Overview

Methods related to document

### Available Operations

* [get](#get) - Get document details
* [list](#list) - List team documents

## get

Get document details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\GetDocumentDetailsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new GetDocumentDetailsRequest();
    $request->documentId = 700347;
    $request->teamId = 90065;

    $response = $sdk->document->get($request);

    if ($response->document !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\WriterAi\SDK\Models\Operations\GetDocumentDetailsRequest](../../models/operations/GetDocumentDetailsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\GetDocumentDetailsResponse](../../models/operations/GetDocumentDetailsResponse.md)**


## list

List team documents

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListTeamDocumentsRequest;
use \WriterAi\SDK\Models\Operations\ListTeamDocumentsSortField;
use \WriterAi\SDK\Models\Operations\ListTeamDocumentsSortOrder;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListTeamDocumentsRequest();
    $request->limit = 768578;
    $request->offset = 99895;
    $request->search = 'Metal Canada';
    $request->sortField = ListTeamDocumentsSortField::OpenedByMeTime;
    $request->sortOrder = ListTeamDocumentsSortOrder::Desc;
    $request->teamId = 785532;

    $response = $sdk->document->list($request);

    if ($response->briefDocuments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\WriterAi\SDK\Models\Operations\ListTeamDocumentsRequest](../../models/operations/ListTeamDocumentsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListTeamDocumentsResponse](../../models/operations/ListTeamDocumentsResponse.md)**

