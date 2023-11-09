# ModelCustomization


## Overview

Methods related to Model Customization

### Available Operations

* [create](#create) - Create model customization
* [delete](#delete) - Delete Model customization
* [get](#get) - Get model customization
* [list](#list) - List model customizations

## create

Create model customization

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SDK\Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateModelCustomizationRequest();
    $request->createCustomizationRequest = new Shared\CreateCustomizationRequest();
    $request->createCustomizationRequest->additionalHyperParameters = new Shared\HyperParameters();
    $request->createCustomizationRequest->additionalHyperParameters->numVirtualTokens = 486589;
    $request->createCustomizationRequest->batchSize = 489382;
    $request->createCustomizationRequest->description = 'Proactive systematic Graphical User Interface';
    $request->createCustomizationRequest->epochs = 288408;
    $request->createCustomizationRequest->learningRate = 1343.65;
    $request->createCustomizationRequest->name = 'string';
    $request->createCustomizationRequest->promptTemplate = 'string';
    $request->createCustomizationRequest->trainingDatasetFileId = 'string';
    $request->createCustomizationRequest->validationDatasetFileId = 'string';
    $request->modelId = 'string';

    $response = $sdk->modelCustomization->create($request);

    if ($response->modelCustomization !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest](../../Models/Operations/CreateModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateModelCustomizationResponse](../../Models/Operations/CreateModelCustomizationResponse.md)**


## delete

Delete Model customization

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SDK\Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteModelCustomizationRequest();
    $request->customizationId = 'string';
    $request->modelId = 'string';

    $response = $sdk->modelCustomization->delete($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest](../../Models/Operations/DeleteModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteModelCustomizationResponse](../../Models/Operations/DeleteModelCustomizationResponse.md)**


## get

Get model customization

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SDK\Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetModelCustomizationRequest();
    $request->customizationId = 'string';
    $request->modelId = 'string';

    $response = $sdk->modelCustomization->get($request);

    if ($response->modelCustomization !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\WriterAi\SDK\Models\Operations\GetModelCustomizationRequest](../../Models/Operations/GetModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\WriterAi\SDK\Models\Operations\GetModelCustomizationResponse](../../Models/Operations/GetModelCustomizationResponse.md)**


## list

List model customizations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SDK\Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListModelCustomizationsRequest();
    $request->modelId = 'string';

    $response = $sdk->modelCustomization->list($request);

    if ($response->customizationsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest](../../Models/Operations/ListModelCustomizationsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\ListModelCustomizationsResponse](../../Models/Operations/ListModelCustomizationsResponse.md)**

