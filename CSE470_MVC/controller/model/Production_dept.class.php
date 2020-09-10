<?php
/**
 * 
 */
class Production_dept
{
	private $orders;
	function __construct(){
		$this->orders = new Order(); 
		$this->db = new Database(); 

	}

	public function test(){
		echo "whats up?";
	}
	public function addProduction($style_num, $color, $size, $date, $production){
		$this->db->query("INSERT INTO production VALUES (:style_num, :color, :size, :date, :production)");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		$this->db->bind(":date", $date);
		$this->db->bind(":size", $size);
		$this->db->bind(":production", $production);
		$this->db->execute();
	}

}