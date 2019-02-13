<?php
include('./vendor/autoload.php');

use \Firebase\JWT\JWT;

$issuedAt   = time();
$notBefore  = $issuedAt + 60;             //Adding 10 seconds
$expire     = $notBefore + 60;            // Adding 60 seconds

$key = "example_key";
$token = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => $issuedAt,
    "nbf" => $notBefore,
    "exp" => $expire
);
$jwt = JWT::encode($token, $key);
echo $jwt;
?>
