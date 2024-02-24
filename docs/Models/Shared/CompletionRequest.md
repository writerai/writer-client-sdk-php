# CompletionRequest


## Fields

| Field                  | Type                   | Required               | Description            | Example                |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `bestOf`               | *?int*                 | :heavy_minus_sign:     | N/A                    | 1                      |
| `frequencyPenalty`     | *?float*               | :heavy_minus_sign:     | N/A                    |                        |
| `logprobs`             | *?int*                 | :heavy_minus_sign:     | N/A                    |                        |
| `maxTokens`            | *?int*                 | :heavy_minus_sign:     | N/A                    | 1024                   |
| `minTokens`            | *?int*                 | :heavy_minus_sign:     | N/A                    | 1                      |
| `n`                    | *?int*                 | :heavy_minus_sign:     | N/A                    |                        |
| `presencePenalty`      | *?float*               | :heavy_minus_sign:     | N/A                    |                        |
| `prompt`               | *string*               | :heavy_check_mark:     | N/A                    |                        |
| `stop`                 | array<*string*>        | :heavy_minus_sign:     | N/A                    | [<br/>"the",<br/>"is",<br/>"and"<br/>] |
| `temperature`          | *?float*               | :heavy_minus_sign:     | N/A                    | 0.7                    |
| `topP`                 | *?float*               | :heavy_minus_sign:     | N/A                    | 1                      |