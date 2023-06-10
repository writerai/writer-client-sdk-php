<div align="center">
    <picture>
        <source srcset="https://user-images.githubusercontent.com/6267663/223574357-9a053550-02f9-49f1-b453-1b11db148d7b.svg" media="(prefers-color-scheme: dark)" width="500">
        <img src="https://user-images.githubusercontent.com/6267663/223574369-77805bfe-6d95-44e8-ac48-f9494101e1dc.svg" width="500">
    </picture>
    <h1>PHP SDK [Not Yet Published]</h1>
   <p>AI for everyone.</p>
   <a href="https://dev.writer.com/docs"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=000000&style=for-the-badge" /></a>
  <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" /></a>
  <a href="https://github.com/writerai/writer-client-sdk-php/releases"><img src="https://img.shields.io/github/v/release/writerai/writer-client-sdk-php?sort=semver&style=for-the-badge" /></a>
</div>

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
## Available Resources and Operations


### [aiContentDetector](docs/sdks/aicontentdetector/README.md)

* [detect](docs/sdks/aicontentdetector/README.md#detect) - Content detector api

### [billing](docs/sdks/billing/README.md)

* [getSubscriptionDetails](docs/sdks/billing/README.md#getsubscriptiondetails) - Get your organization subscription details

### [coWrite](docs/sdks/cowrite/README.md)

* [generateContent](docs/sdks/cowrite/README.md#generatecontent) - Generate content using predefined templates
* [listTemplates](docs/sdks/cowrite/README.md#listtemplates) - Get a list of your existing CoWrite templates

### [completions](docs/sdks/completions/README.md)

* [create](docs/sdks/completions/README.md#create) - Create completion for LLM model
* [createModelCustomizationCompletion](docs/sdks/completions/README.md#createmodelcustomizationcompletion) - Create completion for LLM customization model

### [content](docs/sdks/content/README.md)

* [check](docs/sdks/content/README.md#check) - Check your content against your preset styleguide.
* [correct](docs/sdks/content/README.md#correct) - Apply the style guide suggestions directly to your content.

### [downloadTheCustomizedModel](docs/sdks/downloadthecustomizedmodel/README.md)

* [fetchFile](docs/sdks/downloadthecustomizedmodel/README.md#fetchfile) - Download your fine-tuned model (available only for Palmyra Base and Palmyra Large)

### [files](docs/sdks/files/README.md)

* [delete](docs/sdks/files/README.md#delete) - Delete file
* [get](docs/sdks/files/README.md#get) - Get file
* [list](docs/sdks/files/README.md#list) - List files
* [upload](docs/sdks/files/README.md#upload) - Upload file

### [modelCustomization](docs/sdks/modelcustomization/README.md)

* [create](docs/sdks/modelcustomization/README.md#create) - Create model customization
* [delete](docs/sdks/modelcustomization/README.md#delete) - Delete Model customization
* [get](docs/sdks/modelcustomization/README.md#get) - Get model customization
* [list](docs/sdks/modelcustomization/README.md#list) - List model customizations

### [models](docs/sdks/models/README.md)

* [list](docs/sdks/models/README.md#list) - List available LLM models

### [snippet](docs/sdks/snippet/README.md)

* [delete](docs/sdks/snippet/README.md#delete) - Delete snippets
* [find](docs/sdks/snippet/README.md#find) - Find snippets
* [update](docs/sdks/snippet/README.md#update) - Update snippets

### [styleguide](docs/sdks/styleguide/README.md)

* [get](docs/sdks/styleguide/README.md#get) - Page details
* [listPages](docs/sdks/styleguide/README.md#listpages) - List your styleguide pages

### [terminology](docs/sdks/terminology/README.md)

* [add](docs/sdks/terminology/README.md#add) - Add terms
* [delete](docs/sdks/terminology/README.md#delete) - Delete terms
* [find](docs/sdks/terminology/README.md#find) - Find terms
* [update](docs/sdks/terminology/README.md#update) - Update terms

### [user](docs/sdks/user/README.md)

* [list](docs/sdks/user/README.md#list) - List users
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
