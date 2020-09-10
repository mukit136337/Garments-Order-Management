<?php
/**
 * 
 */
class Order 
{
	private $db;
	function __construct(){
		$this->db = new Database();
	}

	public function getAllOrders($status){
		$this->db->query("SELECT order_list.*,client.company_name FROM 
			order_list INNER JOIN client ON order_list.client_id = client.client_id 
			WHERE status = :status");
		$this->db->bind(":status", $status);
		return $this->db->resultSet();
	}

	public function getSearchOrder($style_num){
		$this->db->query("SELECT order_list.*,client.company_name FROM 
			order_list INNER JOIN client ON order_list.client_id = client.client_id 
			WHERE style_num = :style_num");
		$this->db->bind(":style_num", $style_num);
		return $this->db->single();
	}

	public function getOrders(){
		$order = array();
		$order['ongoing'] = $this->getAllOrders("On Going");
		$order['upcomming'] = $this->getAllOrders("Up Comming");
		$order['completed'] = $this->getAllOrders("Completed");
		return $order;
	}

	public function getClient($style_num){
		$this->db->query("SELECT client.* FROM 
			order_list INNER JOIN client ON order_list.client_id = client.client_id 
			WHERE style_num = :style_num");
		$this->db->bind(":style_num", $style_num);
		return $this->db->single();
	}

	public function getQnt($style_num){
		$this->db->query("SELECT * FROM quantity WHERE style_num = :style_num");
		$this->db->bind(":style_num", $style_num);
		return $this->db->resultSet();
	}

	public function getTotalQnt($style_num){
		$qnt = $this->getQnt($style_num);
		$tc = 0;
		foreach ($qnt as $row) {
			$tc = $tc + $row->quantity;
		}
		return $tc;
	}

	public function getSize($style_num){
		$this->db->query("SELECT DISTINCT size FROM quantity WHERE style_num = :style_num");
		$this->db->bind(":style_num", $style_num);
		return $this->db->resultSet();
	}


	public function getColor($style_num){
		$this->db->query("SELECT DISTINCT color FROM quantity WHERE style_num = :style_num");
		$this->db->bind(":style_num", $style_num);
		return $this->db->resultSet();
	}

	public function getColQnt($style_num, $color){
		$this->db->query("SELECT * FROM quantity WHERE style_num = :style_num AND color = :color ORDER BY size ASC");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		return $this->db->resultSet();
	}

	public function getProduction($style_num, $color){
		$this->db->query("SELECT * FROM production WHERE style_num = :style_num AND color = :color ORDER BY `date` ASC, size ASC");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		return $this->db->resultSet();
	}
	public function getColSize($style_num, $color){
		$this->db->query("SELECT  DISTINCT size from production where style_num = :style_num and color = :color ORDER BY size ASC");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		return $this->db->resultSet();

	}
	
	public function getColDate($style_num, $color){
		$this->db->query("SELECT DISTINCT date from production where style_num = :style_num and color = :color ORDER BY `date` ASC");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		return $this->db->resultSet();

	}
	
}