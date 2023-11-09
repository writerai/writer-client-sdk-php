# Files


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

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = SDK\Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteFileRequest();
    $request->fileId = 'string';

    $response = $sdk->files->delete($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\DeleteFileRequest](../../Models/Operations/DeleteFileRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\DeleteFileResponse](../../Models/Operations/DeleteFileResponse.md)**


## get

Get file

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
    $request = new Operations\GetFileRequest();
    $request->fileId = 'string';

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
| `$request`                                                                                  | [\WriterAi\SDK\Models\Operations\GetFileRequest](../../Models/Operations/GetFileRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\GetFileResponse](../../Models/Operations/GetFileResponse.md)**


## list

List files

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
    $request = new Operations\ListFilesRequest();

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
| `$request`                                                                                      | [\WriterAi\SDK\Models\Operations\ListFilesRequest](../../Models/Operations/ListFilesRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\WriterAi\SDK\Models\Operations\ListFilesResponse](../../Models/Operations/ListFilesResponse.md)**


## upload

Upload file

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
    $request = new Operations\UploadFileRequest();
    $request->uploadModelFileRequest = new Shared\UploadModelFileRequest();
    $request->uploadModelFileRequest->file = new Shared\File();
    $request->uploadModelFileRequest->file->content = '0x87cbca97eC';
    $request->uploadModelFileRequest->file->fileName = 'ullam.wav';

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
| `$request`                                                                                        | [\WriterAi\SDK\Models\Operations\UploadFileRequest](../../Models/Operations/UploadFileRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\WriterAi\SDK\Models\Operations\UploadFileResponse](../../Models/Operations/UploadFileResponse.md)**

