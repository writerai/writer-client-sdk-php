# coWrite

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

$sdk = Writer::builder()
    ->build();

try {
    $request = new GenerateContentRequest();
    $request->generateTemplateRequest = new GenerateTemplateRequest();
    $request->generateTemplateRequest->inputs = [
        new MagicRequestInput(),
        new MagicRequestInput(),
        new MagicRequestInput(),
    ];
    $request->generateTemplateRequest->templateId = 'quibusdam';
    $request->teamId = 602763;

    $response = $sdk->coWrite->generateContent($request);

    if ($response->draft !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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

$sdk = Writer::builder()
    ->build();

try {
    $request = new ListTemplatesRequest();
    $request->teamId = 857946;
    $request->templateId = 'corrupti';

    $response = $sdk->coWrite->listTemplates($request);

    if ($response->templateDetailsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
