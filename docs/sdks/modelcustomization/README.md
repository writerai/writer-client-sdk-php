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

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest;
use \WriterAi\SDK\Models\Shared\CreateCustomizationRequest;
use \WriterAi\SDK\Models\Shared\HyperParameters;

$sdk = Writer::builder()
    ->build();

try {
    $request = new CreateModelCustomizationRequest();
    $request->createCustomizationRequest = new CreateCustomizationRequest();
    $request->createCustomizationRequest->additionalHyperParameters = new HyperParameters();
    $request->createCustomizationRequest->additionalHyperParameters->numVirtualTokens = 20218;
    $request->createCustomizationRequest->batchSize = 368241;
    $request->createCustomizationRequest->description = 'repellendus';
    $request->createCustomizationRequest->epochs = 957156;
    $request->createCustomizationRequest->learningRate = 7781.57;
    $request->createCustomizationRequest->name = 'Teri Strosin';
    $request->createCustomizationRequest->promptTemplate = 'quod';
    $request->createCustomizationRequest->trainingDatasetFileId = 'quod';
    $request->createCustomizationRequest->validationDatasetFileId = 'esse';
    $request->modelId = 'totam';

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
| `$request`                                                                                                                    | [\WriterAi\SDK\Models\Operations\CreateModelCustomizationRequest](../../models/operations/CreateModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\CreateModelCustomizationResponse](../../models/operations/CreateModelCustomizationResponse.md)**


## delete

Delete Model customization

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new DeleteModelCustomizationRequest();
    $request->customizationId = 'porro';
    $request->modelId = 'dolorum';

    $response = $sdk->modelCustomization->delete($request);

    if ($response->deleteModelCustomization200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\WriterAi\SDK\Models\Operations\DeleteModelCustomizationRequest](../../models/operations/DeleteModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteModelCustomizationResponse](../../models/operations/DeleteModelCustomizationResponse.md)**


## get

Get model customization

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\GetModelCustomizationRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new GetModelCustomizationRequest();
    $request->customizationId = 'dicta';
    $request->modelId = 'nam';

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
| `$request`                                                                                                              | [\WriterAi\SDK\Models\Operations\GetModelCustomizationRequest](../../models/operations/GetModelCustomizationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\WriterAi\SDK\Models\Operations\GetModelCustomizationResponse](../../models/operations/GetModelCustomizationResponse.md)**


## list

List model customizations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListModelCustomizationsRequest();
    $request->modelId = 'officia';

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
| `$request`                                                                                                                  | [\WriterAi\SDK\Models\Operations\ListModelCustomizationsRequest](../../models/operations/ListModelCustomizationsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\ListModelCustomizationsResponse](../../models/operations/ListModelCustomizationsResponse.md)**

