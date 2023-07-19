# terminology

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
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\AddTermsRequest;
use \WriterAi\SDK\Models\Shared\CreateTermsRequest;
use \WriterAi\SDK\Models\Shared\CreateTermsRequestFailHandling;
use \WriterAi\SDK\Models\Shared\TermCreate;
use \WriterAi\SDK\Models\Shared\ApprovedTermExtensionCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreateType;
use \WriterAi\SDK\Models\Shared\LinkedTermCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreatePos;
use \WriterAi\SDK\Models\Shared\TermCreatePos;
use \WriterAi\SDK\Models\Shared\TermTagCreate;
use \WriterAi\SDK\Models\Shared\TermCreateType;

$sdk = Writer::builder()
    ->build();

try {
    $request = new AddTermsRequest();
    $request->createTermsRequest = new CreateTermsRequest();
    $request->createTermsRequest->failHandling = CreateTermsRequestFailHandling::Skip;
    $request->createTermsRequest->models = [
        new TermCreate(),
        new TermCreate(),
    ];
    $request->teamId = 902349;

    $response = $sdk->terminology->add($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\WriterAi\SDK\Models\Operations\AddTermsRequest](../../models/operations/AddTermsRequest.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\AddTermsResponse](../../models/operations/AddTermsResponse.md)**


## delete

Delete terms

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DeleteTermsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new DeleteTermsRequest();
    $request->xRequestID = 'quidem';
    $request->ids = [
        60225,
    ];
    $request->teamId = 969810;

    $response = $sdk->terminology->delete($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\WriterAi\SDK\Models\Operations\DeleteTermsRequest](../../models/operations/DeleteTermsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteTermsResponse](../../models/operations/DeleteTermsResponse.md)**


## find

Find terms

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\FindTermsRequest;
use \WriterAi\SDK\Models\Operations\FindTermsPartOfSpeech;
use \WriterAi\SDK\Models\Operations\FindTermsSortField;
use \WriterAi\SDK\Models\Operations\FindTermsSortOrder;
use \WriterAi\SDK\Models\Operations\FindTermsType;

$sdk = Writer::builder()
    ->build();

try {
    $request = new FindTermsRequest();
    $request->limit = 666767;
    $request->offset = 653140;
    $request->partOfSpeech = FindTermsPartOfSpeech::Adverb;
    $request->sortField = FindTermsSortField::Term;
    $request->sortOrder = FindTermsSortOrder::Asc;
    $request->tags = [
        'explicabo',
        'nobis',
    ];
    $request->teamId = 315428;
    $request->term = 'omnis';
    $request->type = FindTermsType::Banned;

    $response = $sdk->terminology->find($request);

    if ($response->paginatedResultFullTermWithUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\FindTermsRequest](../../models/operations/FindTermsRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\FindTermsResponse](../../models/operations/FindTermsResponse.md)**


## update

Update terms

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\UpdateTermsRequest;
use \WriterAi\SDK\Models\Shared\UpdateTermsRequest;
use \WriterAi\SDK\Models\Shared\UpdateTermsRequestFailHandling;
use \WriterAi\SDK\Models\Shared\TermUpdate;
use \WriterAi\SDK\Models\Shared\ApprovedTermExtensionCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreateType;
use \WriterAi\SDK\Models\Shared\LinkedTermCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreatePos;
use \WriterAi\SDK\Models\Shared\TermUpdatePos;
use \WriterAi\SDK\Models\Shared\TermTagCreate;
use \WriterAi\SDK\Models\Shared\TermUpdateType;

$sdk = Writer::builder()
    ->build();

try {
    $request = new UpdateTermsRequest();
    $request->updateTermsRequest = new UpdateTermsRequest();
    $request->updateTermsRequest->failHandling = UpdateTermsRequestFailHandling::Validate;
    $request->updateTermsRequest->models = [
        new TermUpdate(),
        new TermUpdate(),
        new TermUpdate(),
    ];
    $request->xRequestID = 'accusantium';
    $request->teamId = 438601;

    $response = $sdk->terminology->update($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\WriterAi\SDK\Models\Operations\UpdateTermsRequest](../../models/operations/UpdateTermsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\WriterAi\SDK\Models\Operations\UpdateTermsResponse](../../models/operations/UpdateTermsResponse.md)**

