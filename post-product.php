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
$product = array (
    "title" => "Burton Custom Freestyle 151",
    "body_html" => "<strong>Good snowboard!<\/strong>",
    "vendor" => "Burton",
    "product_type" => "Snowboard",
    "tags" => "Barnes & Noble, John's Fav, \"Big Air\""
);
$client = new Client();

$response = $client->request(
	'POST', 
	"https://{$store}/admin/products.json",
	[
		'query' => [
			'fields' => $product,
			'access_token' => $access_token
		]
	]
);

$result = json_decode($response->getBody()->getContents(), true);
echo $result;