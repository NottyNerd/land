<?php
require 'vendor/autoload.php';

date_default_timezone_set('UTC');

use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;

$sdk = new Aws\Sdk([
    'region'   => 'us-east-1',
    'version'  => 'latest',
    'credentials' => array(
        'key' => 'AKIAIL2MKD4OL52QC2OA',
        'secret' => '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',
    )
]);

$dynamodb = $sdk->createDynamoDb();

$params = [
    'TableName' => 'Movies',
    'KeySchema' => [
        [
            'AttributeName' => 'year',
            'KeyType' => 'HASH'  //Partition key
        ],
        [
            'AttributeName' => 'title',
            'KeyType' => 'RANGE'  //Sort key
        ]
    ],
    'AttributeDefinitions' => [
        [
            'AttributeName' => 'year',
            'AttributeType' => 'N'
        ],
        [
            'AttributeName' => 'title',
            'AttributeType' => 'S'
        ],

    ],
    'ProvisionedThroughput' => [
        'ReadCapacityUnits' => 10,
        'WriteCapacityUnits' => 10
    ]
];

$marshaler = new Marshaler();

$tableName = 'Movies';

$year = 2015;
$title = 'The Big New Movie';

$item = $marshaler->marshalJson('
    {
        "year": ' . $year . ',
        "title": "' . $title . '",
        "info": {
            "plot": "' . hash("sha256",$title) . '",
            "rating": 4
        }
    }
');

$params = [
    'TableName' => 'Movies',
    'Item' => $item
];

$key = $marshaler->marshalJson('
    {
        "year": ' . $year . ', 
        "title": "' . $title . '"
    }
');
$params1 = [
    'TableName' => 'Movies',
    'Key' => $key
];



try {

    $result = $dynamodb->putItem($params);
    echo "Added item: .$result. "-" . $title.\n";

    $result = $dynamodb->getItem($params1);
    print_r(hash("sha256",$result["Item"]["info"]["M"]["plot"][S]));

} catch (DynamoDbException $e) {
    echo "Unable to add item:\n";
    echo $e->getMessage() . "\n";
}




?>

