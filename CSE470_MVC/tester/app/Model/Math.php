<?php
namespace App\Model;
class Math{
	public $calculate;
	public function __construct(Calculate $calculate){
		$this->calculate = $calculate;
	}
	public function getArea($length){
		return $this->calculate->areaOfSquare($length);
	}
}