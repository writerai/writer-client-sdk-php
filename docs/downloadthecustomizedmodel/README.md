# downloadTheCustomizedModel

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

$sdk = Writer::builder()
    ->build();

try {
    $request = new FetchCustomizedModelFileRequest();
    $request->customizationId = 'at';
    $request->modelId = 'maiores';

    $response = $sdk->downloadTheCustomizedModel->fetchFile($request);

    if ($response->fetchCustomizedModelFile200ApplicationOctetStreamBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
