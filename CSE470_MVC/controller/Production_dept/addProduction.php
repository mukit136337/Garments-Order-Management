<?php
include_once '../includes/autoload.inc.php';
if(isset($_GET['style_num'])){
	$_SESSION['style_num'] = $_GET['style_num'];
	$_SESSION['color'] = $_GET['color'];
}

// $production = new Marchendiser_dept();
$production = new Production_dept();

if(isset($_POST['submit'])){

	if($_POST['sQnt'] == ""){
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 1, $_POST['date'], 0);
	} else {
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 1, $_POST['date'], $_POST['sQnt']);
	}

	if($_POST['mQnt'] == ""){
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 2, $_POST['date'], 0);
	} else {
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 2, $_POST['date'], $_POST['mQnt']);
	}

	if($_POST['lQnt'] == ""){
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 3, $_POST['date'], 0);
	} else {
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 3, $_POST['date'], $_POST['lQnt']);
	}

	if($_POST['xlQnt'] == ""){
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 4, $_POST['date'], 0);
	} else {
		$production->addProduction($_SESSION['style_num'], $_SESSION['color'], 4, $_POST['date'], $_POST['xlQnt']);
	}
	

	redirect('Production_dept.php','Quantity Added Succesfully','Success');
	exit();
} else {
	$template = new Template('../../view/templates/Production_dept/addProduction.temp.php');
	$template->style_num = $_SESSION['style_num'];
	$template->color = $_SESSION['color'];
}

echo $template;