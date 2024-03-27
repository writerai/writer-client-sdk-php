# Models


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
        $request = new Operations\ListModelsRequest();;

    $response = $sdk->models->list($request);

    if ($response->generationModelsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\ListModelsRequest](../../Models/Operations/ListModelsRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\ListModelsResponse](../../Models/Operations/ListModelsResponse.md)**

