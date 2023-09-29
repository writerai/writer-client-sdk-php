# Content
(*content*)

## Overview

Methods related to Content

### Available Operations

* [check](#check) - Check your content against your preset styleguide.
* [correct](#correct) - Apply the style guide suggestions directly to your content.

## check

Check your content against your preset styleguide.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ContentCheckRequest;
use \WriterAi\SDK\Models\Shared\ContentRequest;
use \WriterAi\SDK\Models\Shared\ContentSettings;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ContentCheckRequest();
    $request->contentRequest = new ContentRequest();
    $request->contentRequest->content = 'Tustin 1080p Thailand';
    $request->contentRequest->settings = new ContentSettings();
    $request->contentRequest->settings->ageAndFamilyStatus = false;
    $request->contentRequest->settings->confidence = false;
    $request->contentRequest->settings->contentSafeguards = false;
    $request->contentRequest->settings->disability = false;
    $request->contentRequest->settings->genderIdentitySensitivity = false;
    $request->contentRequest->settings->genderInclusiveNouns = false;
    $request->contentRequest->settings->genderInclusivePronouns = false;
    $request->contentRequest->settings->grammar = false;
    $request->contentRequest->settings->healthyCommunication = false;
    $request->contentRequest->settings->passiveVoice = false;
    $request->contentRequest->settings->raceEthnicityNationalitySensitivity = false;
    $request->contentRequest->settings->sexualOrientationSensitivity = false;
    $request->contentRequest->settings->spelling = false;
    $request->contentRequest->settings->substanceUseSensitivity = false;
    $request->contentRequest->settings->unclearReference = false;
    $request->contentRequest->settings->wordiness = false;
    $request->teamId = 596911;

    $response = $sdk->content->check($request);

    if ($response->processedContent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\WriterAi\SDK\Models\Operations\ContentCheckRequest](../../models/operations/ContentCheckRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\WriterAi\SDK\Models\Operations\ContentCheckResponse](../../models/operations/ContentCheckResponse.md)**


## correct

Apply the style guide suggestions directly to your content.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;
use \WriterAi\SDK\Models\Operations\ContentCorrectRequest;
use \WriterAi\SDK\Models\Shared\ContentRequest;
use \WriterAi\SDK\Models\Shared\ContentSettings;

$sdk = Writer::builder()
    ->build();

try {
    $request = new ContentCorrectRequest();
    $request->contentRequest = new ContentRequest();
    $request->contentRequest->content = 'Hattiesburg tesla';
    $request->contentRequest->settings = new ContentSettings();
    $request->contentRequest->settings->ageAndFamilyStatus = false;
    $request->contentRequest->settings->confidence = false;
    $request->contentRequest->settings->contentSafeguards = false;
    $request->contentRequest->settings->disability = false;
    $request->contentRequest->settings->genderIdentitySensitivity = false;
    $request->contentRequest->settings->genderInclusiveNouns = false;
    $request->contentRequest->settings->genderInclusivePronouns = false;
    $request->contentRequest->settings->grammar = false;
    $request->contentRequest->settings->healthyCommunication = false;
    $request->contentRequest->settings->passiveVoice = false;
    $request->contentRequest->settings->raceEthnicityNationalitySensitivity = false;
    $request->contentRequest->settings->sexualOrientationSensitivity = false;
    $request->contentRequest->settings->spelling = false;
    $request->contentRequest->settings->substanceUseSensitivity = false;
    $request->contentRequest->settings->unclearReference = false;
    $request->contentRequest->settings->wordiness = false;
    $request->xRequestID = 'failing';
    $request->teamId = 125766;

    $response = $sdk->content->correct($request);

    if ($response->correctionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\ContentCorrectRequest](../../models/operations/ContentCorrectRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\ContentCorrectResponse](../../models/operations/ContentCorrectResponse.md)**

