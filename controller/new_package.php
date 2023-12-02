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

	$product_title = cleardata($_POST['package_title']);
	$package_description = $_POST['package_description'];
	$package_status = cleardata($_POST['package_status']);
	$package_price = cleardata($_POST['package_price']);
	$package_link = cleardata($_POST['package_products']);

	$package_image = $_FILES['package_image'];
	
	
	$len = sizeof($package_image["name"]);

	for($i=0;$i<=$len;$i++){
		$imagefile = explode(".", $package_image["name"][$i]);
		$renamefile = round(microtime(true)) . '.' . end($imagefile);
		$package_image_upload = '../' . $items_config['images_folder'];
		move_uploaded_file($package_image['tmp_name'][$i], $package_image_upload . 'package_'.$i. $renamefile);
		$package_imag[$i] = 'package_'.$i. $renamefile;
	}
	$package_image = implode(',',$package_imag);
	
	//$imagefile = explode(".", $_FILES["package_image"]["name"]);
	//$renamefile = round(microtime(true)) . '.' . end($imagefile);

	//$package_image_upload = '../' . $items_config['images_folder'];
	
	//move_uploaded_file($package_image, $package_image_upload . 'package_' . $renamefile);

	$statment = $connect->prepare("INSERT INTO packages (package_id,package_title,package_description,package_price,package_status,package_products) VALUES (null, :package_title, :package_description, :package_price,:package_status, :package_products)");

	$statment->execute(array(
		':package_title' => $package_title,
		':package_description' => $package_description,
		':package_type' => $package_type,
		':package_featured' => $package_featured,
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