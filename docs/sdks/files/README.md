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
    $request->fileId = 'sapiente';

    $response = $sdk->files->delete($request);

    if ($response->deleteFile200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\DeleteFileRequest](../../models/operations/DeleteFileRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteFileResponse](../../models/operations/DeleteFileResponse.md)**


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
    $request->fileId = 'quo';

    $response = $sdk->files->get($request);

    if ($response->modelFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\WriterAi\SDK\Models\Operations\GetFileRequest](../../models/operations/GetFileRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\GetFileResponse](../../models/operations/GetFileResponse.md)**


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

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\ListFilesRequest](../../models/operations/ListFilesRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListFilesResponse](../../models/operations/ListFilesResponse.md)**


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
    $request->uploadModelFileRequest->file->content = 'odit';
    $request->uploadModelFileRequest->file->file = 'at';

    $response = $sdk->files->upload($request);

    if ($response->modelFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\UploadFileRequest](../../models/operations/UploadFileRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\UploadFileResponse](../../models/operations/UploadFileResponse.md)**

