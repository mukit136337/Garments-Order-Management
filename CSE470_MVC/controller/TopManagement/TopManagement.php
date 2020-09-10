<?php
include_once '../includes/autoload.inc.php';

$order = new Order();

// $template = new Template('templates/test.temp.php');

$obj = new Order();
$template = new Template('../../view/templates/TopManagement/TopManagement.temp.php');
// $template = new Template('$_SERVER["DOCUMENT_ROOT"] . view/templates/TopManagement/TopManagement.temp.php');
// echo "$_SERVER['DOCUMENT_ROOT'] . 'view/templates/TopManagement/TopManagement.temp.php'";

if (isset($_POST['submit'])) {
	$template->orders = $obj->getSearchOrder($_POST['search_style_num']);
} else {
	$template->orders = $obj->getOrders();
}

echo $template;
