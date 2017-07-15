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
$customerData = array
        (
            "customer" => array(
                "first_name"    =>  "Steve",
                "last_name"     =>  "Lastnameson",
                "email"         =>  "steve.lastnameson10@test.com",
                "verified_email"=>  true,
                "addresses"     =>  array(
                    0 => array(
                        "address1"  =>  "123 Oak St",
                        "city"      =>  "Ottawa",
                        "country"   =>  "CA",
                        "first_name"=>  "Mother",
                        "last_name" =>  "Lastnameson",
                        "phone"     =>  "555-1212",
                        "province"  =>  "ON",
                        "zip"       =>  "123 AB"
                    )
                )
            )
        );
$client = new Client();

$request = $client->request(
	'POST', 
	"https://{$store}/admin/customers.json",
	[
		'query' => [
			'fields' => $customerData,
			'access_token' => $access_token
		]
	]
);
$response = $client->post($request);
$result = json_decode($response->getBody()->getContents(), true);
echo $result;