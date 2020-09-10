<?php
include_once '../includes/autoload.inc.php';

$db = new Database();
$status = $_GET['x'];
$style_num = $_GET['style_num'];
// echo "$status <br> $style_num" ;
$db->query("UPDATE order_list SET status = :status WHERE style_num = :style_num");
$db->bind(":status", $status);
$db->bind(":style_num", $style_num);


if ($db->execute()) {
	redirect('TopManagement.php?','Status Has been Updated','Success');
}


// echo "thik ase i guess";