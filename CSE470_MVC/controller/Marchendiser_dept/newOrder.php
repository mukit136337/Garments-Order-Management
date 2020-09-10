<?php
include_once '../includes/autoload.inc.php';
$merchant = new Marchendiser_dept();

if (isset($_POST['client'])) {
	$template = new Template('../../view/templates/Marchendiser_dept/newOrder.temp.php');
	$template->client = $_POST['client'];
	$client = $_POST['client'];
	$_SESSION["client"] = $_POST['client'];
} else if(isset($_POST['style_num'])){
	$client = $_SESSION["client"];
	$style_num = $_POST['style_num'];
	$unit_price = $_POST['unit_price'];
	$opd = $_POST['opd'];
	$tod = $_POST['tod'];
	$description = $_POST['description'];
	$_SESSION["style_num"] = $style_num;
	
	$merchant->setOrder($client, $style_num, $unit_price, $opd, $tod, $description);

	$template = new Template('../../view/templates/Marchendiser_dept/orderQnt.temp.php');
	$_SESSION['color_qnt'] = $_POST['color_qnt'];
	$template->color_qnt = $_POST['color_qnt'];
	$template->style_num = $_SESSION["style_num"];
} else if(isset($_POST['color0'])){
	for ($i=0; $i < $_SESSION['color_qnt']; $i++) {
		$color = $_POST['color'.$i];
		for ($j=1; $j <= 4; $j++) { 
			if($j==1){
				$merchant->setQuantity($_SESSION['style_num'], $color, $j, $_POST['s'.$i]);
			} else if($j==2){
				$merchant->setQuantity($_SESSION['style_num'], $color, $j, $_POST['m'.$i]);
			} else if($j==3){
				$merchant->setQuantity($_SESSION['style_num'], $color, $j, $_POST['l'.$i]);
			}else if($j==4){
				$merchant->setQuantity($_SESSION['style_num'], $color, $j, $_POST['xl'.$i]);
			}
		}
	}
	redirect('Marchendiser_dept.php','Quantity Added Succesfully','Success');
	exit();
} else {
	$template = new Template('../../view/templates/Marchendiser_dept/clientSelect.temp.php');
	$template->clients = $merchant->getClients();
}

// if (isset($_POST['submit'])) {
	

// } else {
// 	echo $template;
// }

echo $template;