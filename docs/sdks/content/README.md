# Content


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

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;
use \WriterAi\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(935464)
    ->setSecurity($security)->build();

try {
        $request = new Operations\ContentCheckRequest();
    $request->contentRequest = new Shared\ContentRequest();
    $request->contentRequest->content = '<value>';
    $request->contentRequest->settings = new Shared\ContentSettings();
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
    $request->teamId = 38270;;

    $response = $sdk->content->check($request);

    if ($response->processedContent !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\WriterAi\SDK\Models\Operations\ContentCheckRequest](../../Models/Operations/ContentCheckRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\WriterAi\SDK\Models\Operations\ContentCheckResponse](../../Models/Operations/ContentCheckResponse.md)**


## correct

Apply the style guide suggestions directly to your content.

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
    ->setOrganizationId(501355)
    ->setSecurity($security)->build();

try {
        $request = new Operations\ContentCorrectRequest();
    $request->contentRequest = new Shared\ContentRequest();
    $request->contentRequest->content = '<value>';
    $request->contentRequest->settings = new Shared\ContentSettings();
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
    $request->xRequestID = '<value>';
    $request->teamId = 31310;;

    $response = $sdk->content->correct($request);

    if ($response->correctionResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\WriterAi\SDK\Models\Operations\ContentCorrectRequest](../../Models/Operations/ContentCorrectRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\WriterAi\SDK\Models\Operations\ContentCorrectResponse](../../Models/Operations/ContentCorrectResponse.md)**

