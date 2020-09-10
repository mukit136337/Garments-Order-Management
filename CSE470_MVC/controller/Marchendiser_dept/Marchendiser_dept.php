<?php
include_once '../includes/autoload.inc.php';


$order = new Order();

// $template = new Template('templates/test.temp.php');

$obj = new Order();
$template = new Template('../../view/templates/Marchendiser_dept/Marchendiser_dept.temp.php');

if (isset($_POST['submit'])) {
	$template->orders = $obj->getSearchOrder($_POST['search_style_num']);
} else {
	$template->orders = $obj->getOrders();
}

echo $template;
