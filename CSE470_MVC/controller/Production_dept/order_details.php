<?php
include_once '../includes/autoload.inc.php';
$template = new Template('../../view/templates/Production_dept/order_details.temp.php');
$obj = new Order();
$template->style_num = $_GET['style_num'];


$template->client = $obj->getClient($template->style_num);
$template->order = $obj->getSearchOrder($template->style_num);
$template->total_qnt = $obj->getTotalQnt($template->style_num);
$template->sizes = $obj->getSize($template->style_num);
$template->colors = $obj->getColor($template->style_num);
$qunatitys = array();
$qunatitys_pro = array();
$col_size = array();
$col_date = array();
foreach ($template->colors as $color) {
	$qunatitys[$color->color] = $obj->getColQnt($template->style_num, $color->color);
	$qunatitys_pro[$color->color] = $obj->getProduction($template->style_num, $color->color);
	$col_size[$color->color] = $obj->getColSize($template->style_num, $color->color);
	$col_date[$color->color] = $obj->getColDate($template->style_num, $color->color);
}
$template->quantity = $qunatitys;
$template->production = $qunatitys_pro;
$template->col_size = $col_size;
$template->col_date = $col_date;
echo $template;



