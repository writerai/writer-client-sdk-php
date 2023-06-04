# files

## Overview

Methods related to Files

### Available Operations

* [delete](#delete) - Delete file
* [get](#get) - Get file
* [list](#list) - List files
* [upload](#upload) - Upload file

## delete

Delete file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DeleteFileRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new DeleteFileRequest();
    $request->fileId = 'molestiae';

    $response = $sdk->files->delete($request);

    if ($response->deleteFile200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## get

Get file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\GetFileRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new GetFileRequest();
    $request->fileId = 'quod';

    $response = $sdk->files->get($request);

    if ($response->modelFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## list

List files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListFilesRequest;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListFilesRequest();

    $response = $sdk->files->list($request);

    if ($response->modelFilesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## upload

Upload file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\UploadFileRequest;
use \WriterAi\SDK\Models\Shared\UploadModelFileRequest;
use \WriterAi\SDK\Models\Shared\UploadModelFileRequestFile;

$sdk = Writer::builder()
    ->build();

try {
    $request = new UploadFileRequest();
    $request->uploadModelFileRequest = new UploadModelFileRequest();
    $request->uploadModelFileRequest->file = new UploadModelFileRequestFile();
    $request->uploadModelFileRequest->file->content = 'quod';
    $request->uploadModelFileRequest->file->file = 'esse';

    $response = $sdk->files->upload($request);

    if ($response->modelFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
