<?php
/**
 * 
 */
class TopManagement
{
	private $orders;
	function __construct(){
		$this->orders = new Order(); 
	}

	public function test(){
		echo "whats up?";
	}
}