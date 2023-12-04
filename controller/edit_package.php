<?php 
session_start();
if (isset($_SESSION['manager_email'])){
    
require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/navbar.view.php'; 

$errors = '';

$connect = connect($database);
if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
	} 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$package_id = cleardata($_POST['package_id']);
	$package_title = cleardata($_POST['package_title']);
	$package_description = $_POST['package_description'];
	$package_status = cleardata($_POST['package_status']);
	$package_price = cleardata($_POST['package_price']);
	$package_products = cleardata($_POST['product_selected']);
	
	$statment = $connect->prepare("UPDATE packages SET package_title= :package_title, package_description= :package_description, package_price= :package_price, package_status= :package_status, package_products= :package_products WHERE package_id = :package_id");

	
	$statment->execute(array(
		':package_title' => $package_title,
		':package_description' => $package_description,
		':package_price' => $package_price,
		':package_status' => $package_status,		
		':package_products' => $package_products,
		':package_id' => $package_id
		));
	
	header('Location:' . SITE_URL . '/controller/packages.php');

}else{

	$id_package = id_package($_GET['id']);
    
	if(empty($id_package)){
		header('Location: ' . SITE_URL . '/controller/home.php');
	}

	$package = get_package_per_id($connect, $id_package);
    
    if (!$package){
		header('Location: ' . SITE_URL . '/controller/home.php');
	}

	$package = $package['0'];

}


require '../views/edit.packages.view.php';
require '../views/footer.view.php';
    
}else {

	header('Location: ' . SITE_URL . '/controller/login.php');		
}


?>