<?php
$access_token = 'xy7ezm85aOFcsiyIkCE0x4GjxjsG7eehIyE+78DIDb6ZeYf/SwQ1H1AH4XhPQplqhVyhp9jQCm8FkRbWYBNmOrtoD5JADW3CAHrf7yjRnBkqzpXJ3+Twu2j0vHYg6wGnz6Ty+Ju+g/iJPKEb5o398QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
