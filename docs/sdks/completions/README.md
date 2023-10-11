# Completions
(*completions*)

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

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCompletionRequest();
    $request->completionRequest = new CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 4865.89;
    $request->completionRequest->logprobs = 489382;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 638424;
    $request->completionRequest->presencePenalty = 8592.13;
    $request->completionRequest->prompt = 'innovative blue';
    $request->completionRequest->stop = [
        'shred',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->modelId = 'technology East';

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

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateModelCustomizationCompletionRequest();
    $request->completionRequest = new CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 9195.03;
    $request->completionRequest->logprobs = 41297;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 951257;
    $request->completionRequest->presencePenalty = 3149.52;
    $request->completionRequest->prompt = 'newton';
    $request->completionRequest->stop = [
        'Rue',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->customizationId = 'heavily green cum';
    $request->modelId = 'parsing';

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

