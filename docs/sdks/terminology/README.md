# Terminology


## Overview

Methods related to Terminology

### Available Operations

* [add](#add) - Add terms
* [delete](#delete) - Delete terms
* [find](#find) - Find terms
* [update](#update) - Update terms

## add

Add terms

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
    ->setOrganizationId(551477)
    ->setSecurity($security)->build();

try {
        $request = new Operations\AddTermsRequest();
    $request->createTermsRequest = new Shared\CreateTermsRequest();
    $request->createTermsRequest->failHandling = Shared\FailHandling::ValidateOnly;
    $request->createTermsRequest->models = [
        new Shared\TermCreate(),
    ];
    $request->teamId = 554561;;

    $response = $sdk->terminology->add($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\WriterAi\SDK\Models\Operations\AddTermsRequest](../../Models/Operations/AddTermsRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\AddTermsResponse](../../Models/Operations/AddTermsResponse.md)**


## delete

Delete terms

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
        $request = new Operations\DeleteTermsRequest();
    $request->xRequestID = '<value>';
    $request->ids = [
        841399,
    ];
    $request->teamId = 698486;;

    $response = $sdk->terminology->delete($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\WriterAi\SDK\Models\Operations\DeleteTermsRequest](../../Models/Operations/DeleteTermsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteTermsResponse](../../Models/Operations/DeleteTermsResponse.md)**


## find

Find terms

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
        $request = new Operations\FindTermsRequest();
    $request->limit = 326883;
    $request->offset = 488098;
    $request->partOfSpeech = Operations\PartOfSpeech::Adjective;
    $request->sortField = Operations\QueryParamSortField::Type;
    $request->sortOrder = Operations\QueryParamSortOrder::Asc;
    $request->tags = [
        '<value>',
    ];
    $request->teamId = 16865;
    $request->term = '<value>';
    $request->type = Operations\Type::Pending;;

    $response = $sdk->terminology->find($request);

    if ($response->paginatedResultFullTermWithUser !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\FindTermsRequest](../../Models/Operations/FindTermsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\FindTermsResponse](../../Models/Operations/FindTermsResponse.md)**


## update

Update terms

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
        $request = new Operations\UpdateTermsRequest();
    $request->updateTermsRequest = new Shared\UpdateTermsRequest();
    $request->updateTermsRequest->failHandling = Shared\UpdateTermsRequestFailHandling::Accumulate;
    $request->updateTermsRequest->models = [
        new Shared\TermUpdate(),
    ];
    $request->xRequestID = '<value>';
    $request->teamId = 597129;;

    $response = $sdk->terminology->update($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\WriterAi\SDK\Models\Operations\UpdateTermsRequest](../../Models/Operations/UpdateTermsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\WriterAi\SDK\Models\Operations\UpdateTermsResponse](../../Models/Operations/UpdateTermsResponse.md)**

