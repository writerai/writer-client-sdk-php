# DownloadTheCustomizedModel
(*downloadTheCustomizedModel*)

## Overview

Methods related to Download the customized model

### Available Operations

* [fetchFile](#fetchfile) - Download your fine-tuned model (available only for Palmyra Base and Palmyra Large)

## fetchFile

Download your fine-tuned model (available only for Palmyra Base and Palmyra Large)

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\FetchCustomizedModelFileRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new FetchCustomizedModelFileRequest();
    $request->customizationId = 'apology Silver';
    $request->modelId = 'beyond connecting';

    $response = $sdk->downloadTheCustomizedModel->fetchFile($request);

    if ($response->fetchCustomizedModelFile200ApplicationOctetStreamBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\WriterAi\SDK\Models\Operations\FetchCustomizedModelFileRequest](../../models/operations/FetchCustomizedModelFileRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\WriterAi\SDK\Models\Operations\FetchCustomizedModelFileResponse](../../models/operations/FetchCustomizedModelFileResponse.md)**

