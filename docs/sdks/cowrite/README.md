# CoWrite


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

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(569932)
    ->setSecurity($security)->build();

try {
        $request = new Operations\GenerateContentRequest();
    $request->generateTemplateRequest = new Shared\GenerateTemplateRequest();
    $request->generateTemplateRequest->inputs = [
        new Shared\MagicRequestInput(),
    ];
    $request->generateTemplateRequest->templateId = '<value>';
    $request->teamId = 888452;;

    $response = $sdk->coWrite->generateContent($request);

    if ($response->draft !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\WriterAi\SDK\Models\Operations\GenerateContentRequest](../../Models/Operations/GenerateContentRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\WriterAi\SDK\Models\Operations\GenerateContentResponse](../../Models/Operations/GenerateContentResponse.md)**


## listTemplates

Get a list of your existing CoWrite templates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(380445)
    ->setSecurity($security)->build();

try {
        $request = new Operations\ListTemplatesRequest();
    $request->teamId = 882866;
    $request->templateId = '<value>';;

    $response = $sdk->coWrite->listTemplates($request);

    if ($response->templateDetailsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\WriterAi\SDK\Models\Operations\ListTemplatesRequest](../../Models/Operations/ListTemplatesRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\WriterAi\SDK\Models\Operations\ListTemplatesResponse](../../Models/Operations/ListTemplatesResponse.md)**

