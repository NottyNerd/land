<?php
/**
 * Created by PhpStorm.
 * User: NottyNerd
 * Date: 06/09/2017
 * Time: 09:24
 */
use Aws\DynamoDb\DynamoDbClient;
use Aws\S3\S3Client;
require 'vendor/autoload.php';


$config = require('config.php');


$s3 = DynamoDbClient::factory([
    'key'=> $config['s3']['key'],
    'secret'=> $config['s3']['secret'],
    'region'=> $config['s3']['region'],
    'version'=> $config['s3']['version'],
]);






$result = $s3->putObject(array(
    'TableName' => '[Table_Name]'
));

print_r($result);

/**
$response = $client->putItem(array(
    'TableName' => 'ExampleTable',
    'Item' => array(
        'Id'       => array('S'      => '104'      ), // Primary Key
        'Title'    => array('S'      => 'Book 104 Title' ),
        'ISBN'     => array('S'      => '111-1111111111' ),
        'Price'    => array('N'      => '25' ),
        'Authors'  => array('SS'  => array('Author1', 'Author2') )
    )
));

$response = $client->getItem(array(
    'TableName' => 'ProductCatalog',
    'Key' => array(
        'Id' => array( 'S' => '104' )
    )
));
print_r ($response['Item']);

*/