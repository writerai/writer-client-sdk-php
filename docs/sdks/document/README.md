# Document


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

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(700347)
    ->setSecurity($security)->build();

try {
        $request = new Operations\GetDocumentDetailsRequest();
    $request->documentId = 90065;
    $request->teamId = 558834;;

    $response = $sdk->document->get($request);

    if ($response->document !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\WriterAi\SDK\Models\Operations\GetDocumentDetailsRequest](../../Models/Operations/GetDocumentDetailsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\GetDocumentDetailsResponse](../../Models/Operations/GetDocumentDetailsResponse.md)**


## list

List team documents

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
    ->setOrganizationId(768578)
    ->setSecurity($security)->build();

try {
        $request = new Operations\ListTeamDocumentsRequest();
    $request->limit = 99895;
    $request->offset = 547272;
    $request->search = '<value>';
    $request->sortField = Operations\ListTeamDocumentsQueryParamSortField::CreationTime;
    $request->sortOrder = Operations\ListTeamDocumentsQueryParamSortOrder::Desc;
    $request->teamId = 297548;;

    $response = $sdk->document->list($request);

    if ($response->briefDocuments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\WriterAi\SDK\Models\Operations\ListTeamDocumentsRequest](../../Models/Operations/ListTeamDocumentsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListTeamDocumentsResponse](../../Models/Operations/ListTeamDocumentsResponse.md)**

