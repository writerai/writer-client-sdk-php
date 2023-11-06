# CoWrite
(*coWrite*)

## Overview

Methods related to CoWrite

### Available Operations

* [generateContent](#generatecontent) - Generate content using predefined templates
* [listTemplates](#listtemplates) - Get a list of your existing CoWrite templates

## generateContent

Generate content using predefined templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\GenerateContentRequest;
use \WriterAi\SDK\Models\Shared\GenerateTemplateRequest;
use \WriterAi\SDK\Models\Shared\MagicRequestInput;

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GenerateContentRequest();
    $request->generateTemplateRequest = new GenerateTemplateRequest();
    $request->generateTemplateRequest->inputs = [
        new MagicRequestInput(),
    ];
    $request->generateTemplateRequest->templateId = 'string';
    $request->teamId = 569932;

    $response = $sdk->coWrite->generateContent($request);

    if ($response->draft !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\WriterAi\SDK\Models\Operations\GenerateContentRequest](../../models/operations/GenerateContentRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\GenerateContentResponse](../../models/operations/GenerateContentResponse.md)**


## listTemplates

Get a list of your existing CoWrite templates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ListTemplatesRequest;

$security = new Security();
$security->apiKey = '';

$sdk = Writer::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListTemplatesRequest();
    $request->teamId = 380445;
    $request->templateId = 'string';

    $response = $sdk->coWrite->listTemplates($request);

    if ($response->templateDetailsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\WriterAi\SDK\Models\Operations\ListTemplatesRequest](../../models/operations/ListTemplatesRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\WriterAi\SDK\Models\Operations\ListTemplatesResponse](../../models/operations/ListTemplatesResponse.md)**

