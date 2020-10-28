<?php

require_once __DIR__ . "/vendor/autoload.php";

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$s3 = new S3Client([
    'profile' => 'default',
    'version' => 'latest',
    'region' => 'ap-northeast-1'
]);

// $result = $s3->putObject([
//     'Bucket' => 'ryo-test-bucket',
//     'Key' => 'key_name.txt',
//     'Body' => 'this is test message from PHP'
// ]);

$result = $s3->getObject([
    'Bucket' => 'ryo-test-bucket',
    'Key' => 'key_name.txt'
]);

echo $result['Body'];
