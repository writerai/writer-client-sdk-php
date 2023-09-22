# Completions

## Overview

Methods related to Completions

### Available Operations

* [create](#create) - Create completion for LLM model
* [createModelCustomizationCompletion](#createmodelcustomizationcompletion) - Create completion for LLM customization model

## create

Create completion for LLM model

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\CreateCompletionRequest;
use \WriterAi\SDK\Models\Shared\CompletionRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new CreateCompletionRequest();
    $request->completionRequest = new CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 8472.52;
    $request->completionRequest->logprobs = 423655;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 623564;
    $request->completionRequest->presencePenalty = 6458.94;
    $request->completionRequest->prompt = 'suscipit';
    $request->completionRequest->stop = [
        'iure',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->modelId = 'magnam';

    $response = $sdk->completions->create($request);

    if ($response->completionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\WriterAi\SDK\Models\Operations\CreateCompletionRequest](../../models/operations/CreateCompletionRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateCompletionResponse](../../models/operations/CreateCompletionResponse.md)**


## createModelCustomizationCompletion

Create completion for LLM customization model

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\CreateModelCustomizationCompletionRequest;
use \WriterAi\SDK\Models\Shared\CompletionRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new CreateModelCustomizationCompletionRequest();
    $request->completionRequest = new CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 8917.73;
    $request->completionRequest->logprobs = 56713;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 963663;
    $request->completionRequest->presencePenalty = 2726.56;
    $request->completionRequest->prompt = 'suscipit';
    $request->completionRequest->stop = [
        'molestiae',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->customizationId = 'minus';
    $request->modelId = 'placeat';

    $response = $sdk->completions->createModelCustomizationCompletion($request);

    if ($response->completionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\WriterAi\SDK\Models\Operations\CreateModelCustomizationCompletionRequest](../../models/operations/CreateModelCustomizationCompletionRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateModelCustomizationCompletionResponse](../../models/operations/CreateModelCustomizationCompletionResponse.md)**

