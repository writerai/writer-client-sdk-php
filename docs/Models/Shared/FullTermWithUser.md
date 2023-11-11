# FullTermWithUser


## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `approvedTermExtension`                                                                            | [?\WriterAi\SDK\Models\Shared\ApprovedTermExtension](../../Models/Shared/ApprovedTermExtension.md) | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `backlinkedTerms`                                                                                  | array<[\WriterAi\SDK\Models\Shared\FullLinkedTerm](../../Models/Shared/FullLinkedTerm.md)>         | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `caseSensitive`                                                                                    | *bool*                                                                                             | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `createdUser`                                                                                      | [\WriterAi\SDK\Models\Shared\TerminologyUser](../../Models/Shared/TerminologyUser.md)              | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `creationTime`                                                                                     | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                      | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `description`                                                                                      | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `examples`                                                                                         | array<[\WriterAi\SDK\Models\Shared\TermExample](../../Models/Shared/TermExample.md)>               | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `highlight`                                                                                        | *bool*                                                                                             | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `id`                                                                                               | *int*                                                                                              | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `linkedTerms`                                                                                      | array<[\WriterAi\SDK\Models\Shared\FullLinkedTerm](../../Models/Shared/FullLinkedTerm.md)>         | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `mistakes`                                                                                         | array<[\WriterAi\SDK\Models\Shared\TermMistake](../../Models/Shared/TermMistake.md)>               | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `modificationTime`                                                                                 | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                      | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `modifiedUser`                                                                                     | [\WriterAi\SDK\Models\Shared\TerminologyUser](../../Models/Shared/TerminologyUser.md)              | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `pos`                                                                                              | [?\WriterAi\SDK\Models\Shared\FullTermWithUserPos](../../Models/Shared/FullTermWithUserPos.md)     | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `tags`                                                                                             | array<[\WriterAi\SDK\Models\Shared\TermTagResponse](../../Models/Shared/TermTagResponse.md)>       | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `term`                                                                                             | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `termBankId`                                                                                       | *int*                                                                                              | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `type`                                                                                             | [\WriterAi\SDK\Models\Shared\Type](../../Models/Shared/Type.md)                                    | :heavy_check_mark:                                                                                 | N/A                                                                                                |