<?php
include('./vendor/autoload.php');

use \Firebase\JWT\JWT;
$token = $_GET['jwt'];
$key = "example_key";
try {
    $data = JWT::decode($token, $key, array('HS256'));
    print_r($data);
} catch (\Exception $e) {
    echo "EPIRED";
}
?>
