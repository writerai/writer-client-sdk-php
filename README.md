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


### [aiContentDetector](docs/aicontentdetector/README.md)

* [detect](docs/aicontentdetector/README.md#detect) - Content detector api

### [billing](docs/billing/README.md)

* [getSubscriptionDetails](docs/billing/README.md#getsubscriptiondetails) - Get your organization subscription details

### [coWrite](docs/cowrite/README.md)

* [generateContent](docs/cowrite/README.md#generatecontent) - Generate content using predefined templates
* [listTemplates](docs/cowrite/README.md#listtemplates) - Get a list of your existing CoWrite templates

### [completions](docs/completions/README.md)

* [create](docs/completions/README.md#create) - Create completion for LLM model
* [createModelCustomizationCompletion](docs/completions/README.md#createmodelcustomizationcompletion) - Create completion for LLM customization model

### [content](docs/content/README.md)

* [check](docs/content/README.md#check) - Check your content against your preset styleguide.
* [correct](docs/content/README.md#correct) - Apply the style guide suggestions directly to your content.

### [downloadTheCustomizedModel](docs/downloadthecustomizedmodel/README.md)

* [fetchFile](docs/downloadthecustomizedmodel/README.md#fetchfile) - Download your fine-tuned model (available only for Palmyra Base and Palmyra Large)

### [files](docs/files/README.md)

* [delete](docs/files/README.md#delete) - Delete file
* [get](docs/files/README.md#get) - Get file
* [list](docs/files/README.md#list) - List files
* [upload](docs/files/README.md#upload) - Upload file

### [modelCustomization](docs/modelcustomization/README.md)

* [create](docs/modelcustomization/README.md#create) - Create model customization
* [delete](docs/modelcustomization/README.md#delete) - Delete Model customization
* [get](docs/modelcustomization/README.md#get) - Get model customization
* [list](docs/modelcustomization/README.md#list) - List model customizations

### [models](docs/models/README.md)

* [list](docs/models/README.md#list) - List available LLM models

### [snippet](docs/snippet/README.md)

* [delete](docs/snippet/README.md#delete) - Delete snippets
* [find](docs/snippet/README.md#find) - Find snippets
* [update](docs/snippet/README.md#update) - Update snippets

### [styleguide](docs/styleguide/README.md)

* [get](docs/styleguide/README.md#get) - Page details
* [listPages](docs/styleguide/README.md#listpages) - List your styleguide pages

### [terminology](docs/terminology/README.md)

* [add](docs/terminology/README.md#add) - Add terms
* [delete](docs/terminology/README.md#delete) - Delete terms
* [find](docs/terminology/README.md#find) - Find terms
* [update](docs/terminology/README.md#update) - Update terms

### [user](docs/user/README.md)

* [list](docs/user/README.md#list) - List users
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
