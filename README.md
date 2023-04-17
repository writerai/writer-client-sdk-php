# writerai/writer-sdk

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/writerai/writer-client-sdk-php.git"
        }
    ],
    "require": {
        "writerai/writer-sdk": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);

use WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\DetectContentRequest;
use \WriterAi\SDK\Models\Shared\ContentDetectorRequest;

$security = new Security();
$security->apiKey = 'YOUR_API_KEY_HERE';

$sdk = Writer::builder()
    ->setSecurity($security);
    ->build();

try {
    $request = new DetectContentRequest();
    $request->contentDetectorRequest = new ContentDetectorRequest();
    $request->contentDetectorRequest->input = 'corrupti';

    $response = $sdk->aiContentDetector->detect($request);

    if ($response->contentDetectorResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## SDK Available Operations


### aiContentDetector

* `detect` - Content detector api

### billing

* `getSubscriptionDetails` - Get your organization subscription details

### coWrite

* `generateContent` - Generate content using predefined templates
* `listTemplates` - Get a list of your existing CoWrite templates

### completions

* `create` - Create completion for LLM model
* `createModelCustomizationCompletion` - Create completion for LLM customization model

### content

* `check` - Check your content against your preset styleguide.
* `correct` - Apply the style guide suggestions directly to your content.

### downloadTheCustomizedModel

* `fetchFile` - Download your fine-tuned model (available only for Palmyra Base and Palmyra Large)

### files

* `delete` - Delete file
* `get` - Get file
* `list` - List files
* `upload` - Upload file

### modelCustomization

* `create` - Create model customization
* `delete` - Delete Model customization
* `get` - Get model customization
* `list` - List model customizations

### models

* `list` - List available LLM models

### snippet

* `delete` - Delete snippets
* `find` - Find snippets
* `update` - Update snippets

### styleguide

* `get` - Page details
* `listPages` - List your styleguide pages

### terminology

* `add` - Add terms
* `delete` - Delete terms
* `find` - Find terms
* `update` - Update terms

### user

* `list` - List users
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)