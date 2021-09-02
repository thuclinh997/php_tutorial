<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$info = curl_getinfo($resource);
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// print_r($info);
// echo $result;
// print_r($code);
// Get response status code

// set_opt_array

// Post request
$user = [
    'name' => "Jonh Doe",
    'username' => 'Jonh',
    'email' => 'jonh@example.com'
];
$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);
$result = curl_exec($resource);
curl_close($resource);
echo $result;