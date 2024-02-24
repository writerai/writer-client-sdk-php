# Billing


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

require 'vendor/autoload.php';

use \WriterAi\SDK;
use \WriterAi\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = SDK\Writer::builder()
    ->setOrganizationId(850421)
    ->setSecurity($security)->build();

try {
    $response = $sdk->billing->getSubscriptionDetails();

    if ($response->subscriptionPublicResponseApi !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\WriterAi\SDK\Models\Operations\GetSubscriptionDetailsResponse](../../Models/Operations/GetSubscriptionDetailsResponse.md)**

