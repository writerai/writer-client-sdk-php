# AIContentDetector

## Overview

Methods related to AI Content Detector

### Available Operations

* [detect](#detect) - Content detector api

## detect

Content detector api

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DetectContentRequest;
use \WriterAi\SDK\Models\Shared\ContentDetectorRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new DetectContentRequest();
    $request->contentDetectorRequest = new ContentDetectorRequest();
    $request->contentDetectorRequest->input = 'provident';

    $response = $sdk->aiContentDetector->detect($request);

    if ($response->contentDetectorResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\WriterAi\SDK\Models\Operations\DetectContentRequest](../../models/operations/DetectContentRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\WriterAi\SDK\Models\Operations\DetectContentResponse](../../models/operations/DetectContentResponse.md)**

