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