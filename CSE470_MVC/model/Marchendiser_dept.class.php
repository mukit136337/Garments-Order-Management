<?php
/**
 * 
 */
class Marchendiser_dept
{
	private $orders;
	function __construct(){
		$this->orders = new Order();
		$this->db = new Database();
	}

	

	public function setClient($id, $name, $email, $contact, $type, $location){
		$this->db->query("INSERT INTO client VALUES (:id, :name, :email, :contact, :type, :location)");
		$this->db->bind(":id", $id);
		$this->db->bind(":name", $name);
		$this->db->bind(":email", $email);
		$this->db->bind(":contact", $contact);
		$this->db->bind(":type", $type);
		$this->db->bind(":location", $location);
		$this->db->execute();
	}

	public function setOrder($id, $style_num, $unit_price, $opd, $tod, $description){
		$this->db->query("INSERT INTO order_list VALUES (:id, :style_num, :unit_price, :opd, :tod, :description, 'Up Comming')");
		$this->db->bind(":id", $id);
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":unit_price", $unit_price);
		$this->db->bind(":opd", $opd);
		$this->db->bind(":tod", $tod);
		$this->db->bind(":description", $description);
		$this->db->execute();
	}

	public function setQuantity($style_num, $color, $size, $quantity){
		$this->db->query("INSERT INTO quantity VALUES (:style_num, :color, :size, :quantity)");
		$this->db->bind(":style_num", $style_num);
		$this->db->bind(":color", $color);
		$this->db->bind(":size", $size);
		$this->db->bind(":quantity", $quantity);
		$this->db->execute();
	}

	public function getClients(){
		$this->db->query("SELECT client_id, company_name FROM client");
		return $this->db->resultSet();
	}



	public function test(){
		echo "whats up?";
	}
}