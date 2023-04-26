# modelCustomization

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
    $request->createCustomizationRequest->additionalHyperParameters->numVirtualTokens = 520478;
    $request->createCustomizationRequest->batchSize = 780529;
    $request->createCustomizationRequest->description = 'dolorum';
    $request->createCustomizationRequest->epochs = 118274;
    $request->createCustomizationRequest->learningRate = 7206.33;
    $request->createCustomizationRequest->name = 'Seth Conroy';
    $request->createCustomizationRequest->promptTemplate = 'optio';
    $request->createCustomizationRequest->trainingDatasetFileId = 'totam';
    $request->createCustomizationRequest->validationDatasetFileId = 'beatae';
    $request->modelId = 'commodi';

    $response = $sdk->modelCustomization->create($request);

    if ($response->modelCustomization !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->customizationId = 'molestiae';
    $request->modelId = 'modi';

    $response = $sdk->modelCustomization->delete($request);

    if ($response->deleteModelCustomization200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->customizationId = 'qui';
    $request->modelId = 'impedit';

    $response = $sdk->modelCustomization->get($request);

    if ($response->modelCustomization !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->modelId = 'cum';

    $response = $sdk->modelCustomization->list($request);

    if ($response->customizationsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
