# Models
(*models*)

## Overview

Methods related to Model

### Available Operations

* [list](#list) - List available LLM models

## list

List available LLM models

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListModelsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListModelsRequest();

    $response = $sdk->models->list($request);

    if ($response->generationModelsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\ListModelsRequest](../../models/operations/ListModelsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\ListModelsResponse](../../models/operations/ListModelsResponse.md)**

