<?php

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region'  => 'REGIONHERE',
    'credentials' => [
        'key'    => 'KEYHERE',
        'secret' => 'KEYHERE'
    ]
]);

$result = $s3->putObject([
    'Bucket' => 'YOURBUCKET',
    'Key'    => 'testfromphp.txt',
    'Body'  => 'This is a test upload from PHP'
]);

echo "Uploading to S3.....";
var_dump($result);

?>
