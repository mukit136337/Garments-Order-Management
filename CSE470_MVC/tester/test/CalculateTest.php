<?php
use PHPUnit\Framework\TestCase;
class CalculateTest extends TestCase
{
	protected $calculate;
	public function setUp(): void{
		$this->calculate = new \App\Model\Calculate();
	}

	public function testAreaOfSquare(){
		$length = 2;
		$this->assertEquals($this->calculate->areaOfSquare($length), 4);
	}
}