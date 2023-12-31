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

	$package_title = cleardata($_POST['package_title']);
	$package_description = $_POST['package_description'];
	$package_status = cleardata($_POST['package_status']);
	$package_price = cleardata($_POST['package_price']);
	$package_products = cleardata($_POST['product_selected']);
	$statment = $connect->prepare("INSERT INTO packages (package_title, package_description,package_price, package_status, package_products) VALUES (:package_title, :package_description, :package_price,:package_status, :package_products)");

	$statment->execute(array(
		':package_title' => $package_title,
		':package_description' => $package_description,
		':package_status' => $package_status,
		':package_price' => $package_price,
		':package_products' => $package_products,
		));
	
	header('Location:' . SITE_URL . '/controller/packages.php');

}

$types_lists = get_all_types($connect);

require '../views/new.packages.view.php';
require '../views/footer.view.php';
    
}else {

	header('Location: ' . SITE_URL . '/controller/login.php');		
}


?>