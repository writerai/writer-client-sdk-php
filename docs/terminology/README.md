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
use \WriterAi\SDK\Models\Shared\CreateTermsRequestFailHandlingEnum;
use \WriterAi\SDK\Models\Shared\TermCreate;
use \WriterAi\SDK\Models\Shared\ApprovedTermExtensionCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreateTypeEnum;
use \WriterAi\SDK\Models\Shared\LinkedTermCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreatePosEnum;
use \WriterAi\SDK\Models\Shared\TermCreatePosEnum;
use \WriterAi\SDK\Models\Shared\TermTagCreate;
use \WriterAi\SDK\Models\Shared\TermCreateTypeEnum;

$sdk = Writer::builder()
    ->build();

try {
    $request = new AddTermsRequest();
    $request->createTermsRequest = new CreateTermsRequest();
    $request->createTermsRequest->failHandling = CreateTermsRequestFailHandlingEnum::ACCUMULATE;
    $request->createTermsRequest->models = [
        new TermCreate(),
        new TermCreate(),
        new TermCreate(),
        new TermCreate(),
    ];
    $request->teamId = 666767;

    $response = $sdk->terminology->add($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->xRequestID = 'mollitia';
    $request->ids = [
        170909,
        210382,
        358152,
    ];
    $request->teamId = 128926;

    $response = $sdk->terminology->delete($request);

    if ($response->deleteResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \WriterAi\SDK\Models\Operations\FindTermsPartOfSpeechEnum;
use \WriterAi\SDK\Models\Operations\FindTermsSortFieldEnum;
use \WriterAi\SDK\Models\Operations\FindTermsSortOrderEnum;
use \WriterAi\SDK\Models\Operations\FindTermsTypeEnum;

$sdk = Writer::builder()
    ->build();

try {
    $request = new FindTermsRequest();
    $request->limit = 750686;
    $request->offset = 315428;
    $request->partOfSpeech = FindTermsPartOfSpeechEnum::ADVERB;
    $request->sortField = FindTermsSortFieldEnum::CREATION_TIME;
    $request->sortOrder = FindTermsSortOrderEnum::ASC;
    $request->tags = [
        'accusantium',
        'iure',
        'culpa',
    ];
    $request->teamId = 988374;
    $request->term = 'sapiente';
    $request->type = FindTermsTypeEnum::APPROVED;

    $response = $sdk->terminology->find($request);

    if ($response->paginatedResultFullTermWithUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
use \WriterAi\SDK\Models\Shared\UpdateTermsRequestFailHandlingEnum;
use \WriterAi\SDK\Models\Shared\TermUpdate;
use \WriterAi\SDK\Models\Shared\ApprovedTermExtensionCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreate;
use \WriterAi\SDK\Models\Shared\TermExampleCreateTypeEnum;
use \WriterAi\SDK\Models\Shared\LinkedTermCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreate;
use \WriterAi\SDK\Models\Shared\TermMistakeCreatePosEnum;
use \WriterAi\SDK\Models\Shared\TermUpdatePosEnum;
use \WriterAi\SDK\Models\Shared\TermTagCreate;
use \WriterAi\SDK\Models\Shared\TermUpdateTypeEnum;

$sdk = Writer::builder()
    ->build();

try {
    $request = new UpdateTermsRequest();
    $request->updateTermsRequest = new UpdateTermsRequest();
    $request->updateTermsRequest->failHandling = UpdateTermsRequestFailHandlingEnum::SKIP;
    $request->updateTermsRequest->models = [
        new TermUpdate(),
    ];
    $request->xRequestID = 'culpa';
    $request->teamId = 161309;

    $response = $sdk->terminology->update($request);

    if ($response->createTermsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
