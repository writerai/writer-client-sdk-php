# Billing
(*billing*)

## Overview

Methods related to Billing

### Available Operations

* [getSubscriptionDetails](#getsubscriptiondetails) - Get your organization subscription details

## getSubscriptionDetails

Get your organization subscription details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \WriterAi\SDK\Writer;
use \WriterAi\SDK\Models\Shared\Security;

$sdk = Writer::builder()
    ->build();

try {
    $response = $sdk->billing->getSubscriptionDetails();

    if ($response->subscriptionPublicResponseApi !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\WriterAi\SDK\Models\Operations\GetSubscriptionDetailsResponse](../../models/operations/GetSubscriptionDetailsResponse.md)**

