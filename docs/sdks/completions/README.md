# completions

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
    $request->completionRequest->bestOf = 847252;
    $request->completionRequest->frequencyPenalty = 4236.55;
    $request->completionRequest->logprobs = 623564;
    $request->completionRequest->maxTokens = 645894;
    $request->completionRequest->minTokens = 384382;
    $request->completionRequest->n = 437587;
    $request->completionRequest->presencePenalty = 2975.34;
    $request->completionRequest->prompt = 'debitis';
    $request->completionRequest->stop = [
        'delectus',
    ];
    $request->completionRequest->temperature = 2726.56;
    $request->completionRequest->topP = 3834.41;
    $request->modelId = 'molestiae';

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
    $request->completionRequest->bestOf = 791725;
    $request->completionRequest->frequencyPenalty = 8121.69;
    $request->completionRequest->logprobs = 528895;
    $request->completionRequest->maxTokens = 479977;
    $request->completionRequest->minTokens = 568045;
    $request->completionRequest->n = 392785;
    $request->completionRequest->presencePenalty = 9255.97;
    $request->completionRequest->prompt = 'temporibus';
    $request->completionRequest->stop = [
        'quis',
    ];
    $request->completionRequest->temperature = 871.29;
    $request->completionRequest->topP = 6481.72;
    $request->customizationId = 'perferendis';
    $request->modelId = 'ipsam';

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

