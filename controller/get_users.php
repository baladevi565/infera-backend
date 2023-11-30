<?php
//phpinfo();
error_reporting(E_ALL);
ini_set('display_errors', 1);
//var_dump(openssl_get_cert_locations());
//die;
require '../classes/firebase/vendor/autoload.php';

require '../admin/config.php';
require '../admin/functions.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

try {
    $serviceAccount = ServiceAccount::fromJsonFile('../classes/firebase/google-service-account.json');
} catch (Exception $e) {
    die("Error loading service account credentials: " . $e->getMessage());
}


use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
// Specify the path to the CA certificate bundle
$caBundlePath = 'C:/wamp64/bin/php/cacert.pem';  // Replace with the actual path

// Create a Guzzle client with SSL verification using the CA certificate bundle
$client = new Client([
  //  'base_uri' => 'https://example.com', // Replace with your API's base URL
    'verify' => $caBundlePath,
]);
//$stack = HandlerStack::create();
//$stack->push(Middleware::log($logger, new \GuzzleHttp\MessageFormatter()));

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    //->withHttpClient($client) 
    //->withHttpClient(new Client(['handler' => $stack]))
    ->create();

    
/*
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();
*/

/*
// This brings the data from firebase
$auth = $firebase->getAuth();
$users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
$data = iterator_to_array($users);
$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data);

// Bring users from managers_users
$data_managers_users = get_users_by_manager_id($connect);
$results_managers_users = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data_managers_users),
    "iTotalDisplayRecords" => count($data_managers_users),
    "aaData"=>$data_managers_users);

echo json_encode($results);*/

$auth = $firebase->getAuth();

$users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);

$data = iterator_to_array($users);

$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData"=>$data);

echo json_encode($results);
?>
