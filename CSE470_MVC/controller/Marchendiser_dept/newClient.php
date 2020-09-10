<?php
include_once '../includes/autoload.inc.php';

$merchant = new Marchendiser_dept();

$template = new Template('../../view/templates/Marchendiser_dept/newClient.temp.php');

if (isset($_POST['submit'])) {
	$name = $_POST['Name'];
	$id = $_POST['ID'];
	$email = $_POST['Email'];
	$contact = $_POST['Contact_Number'];
	$location = $_POST['Location'];
	$type = 'Buyer';
	$merchant->setClient($id, $name, $email, $contact, $type, $location);
	// $merchant->test();
	redirect('Marchendiser_dept.php?','New Client Added','Success');

} else {
	echo $template;
}

