<?php
include_once 'includes/autoload.inc.php';

$order = new Order();

// $template = new Template('templates/test.temp.php');


$template = new Template('templates/order_list.temp.php');
if(!isset($_SESSION['dept'])){
	redirect('../Login_V3/index.php?','dept error','error');
	exit();
} else if($_SESSION['dept'] == "TopManagement"){
	redirect('TopManagement/TopManagement.php?','','');
} else if($_SESSION['dept'] == "Production_dept"){
	redirect('Production_dept/Production_dept.php?','','');
} else if($_SESSION['dept'] == "Marchendiser_dept"){
	redirect('Marchendiser_dept/Marchendiser_dept.php?','','');
} else if($_SESSION['dept'] == "Commercial_dept"){
	redirect('../Login_V3/index.php?','dept error','error');
} else if($_SESSION['dept'] == "Store_dept"){
	redirect('../Login_V3/index.php?','dept error','error');
}



$obj = new Order();
$template = new Template('templates/order_list.temp.php');

if (isset($_POST['submit'])) {
	$template->orders = $obj->getSearchOrder($_POST['search_style_num']);
} else {
	$template->orders = $obj->getOrders();
}

echo $template;

