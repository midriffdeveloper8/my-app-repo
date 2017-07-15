<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$db = new Mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASS'), getenv('MYSQL_DB')); 

$store = 'customboxes1.myshopify.com'; 
$select = $db->query("SELECT access_token FROM installs WHERE store = '$store'");
$user = $select->fetch_object();
$access_token = $user->access_token;

$client = new Client();

$response = $client->request(
    'GET', 
    "https://{$store}/admin/orders.json",
    [
        'query' => [
            'fields' => 'id,email,note,total_price,currency,billing_address,financial_status,total_discounts,cart_token,amount,discount_codes',
            'access_token' => $access_token
        ]
    ]
);

$result = json_decode($response->getBody()->getContents(), true);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    'cache' => 'cache',
    'debug' => true
]);

$template = $twig->loadTemplate('orders.html');
echo $template->render(['orders' => $result['orders']]);