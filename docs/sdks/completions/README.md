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

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(486589)
    ->setSecurity($security)->build();

try {
        $request = new Operations\CreateCompletionRequest();
    $request->completionRequest = new Shared\CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 4893.82;
    $request->completionRequest->logprobs = 638424;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 859213;
    $request->completionRequest->presencePenalty = 4174.58;
    $request->completionRequest->prompt = '<value>';
    $request->completionRequest->stop = [
        '<value>',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->modelId = '<value>';;

    $response = $sdk->completions->create($request);

    if ($response->completionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\WriterAi\SDK\Models\Operations\CreateCompletionRequest](../../Models/Operations/CreateCompletionRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateCompletionResponse](../../Models/Operations/CreateCompletionResponse.md)**


## createModelCustomizationCompletion

Create completion for LLM customization model

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
    ->setOrganizationId(919503)
    ->setSecurity($security)->build();

try {
        $request = new Operations\CreateModelCustomizationCompletionRequest();
    $request->completionRequest = new Shared\CompletionRequest();
    $request->completionRequest->bestOf = 1;
    $request->completionRequest->frequencyPenalty = 412.97;
    $request->completionRequest->logprobs = 951257;
    $request->completionRequest->maxTokens = 1024;
    $request->completionRequest->minTokens = 1;
    $request->completionRequest->n = 314952;
    $request->completionRequest->presencePenalty = 657.2;
    $request->completionRequest->prompt = '<value>';
    $request->completionRequest->stop = [
        '<value>',
    ];
    $request->completionRequest->temperature = 0.7;
    $request->completionRequest->topP = 1;
    $request->customizationId = '<value>';
    $request->modelId = '<value>';;

    $response = $sdk->completions->createModelCustomizationCompletion($request);

    if ($response->completionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\WriterAi\SDK\Models\Operations\CreateModelCustomizationCompletionRequest](../../Models/Operations/CreateModelCustomizationCompletionRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateModelCustomizationCompletionResponse](../../Models/Operations/CreateModelCustomizationCompletionResponse.md)**

