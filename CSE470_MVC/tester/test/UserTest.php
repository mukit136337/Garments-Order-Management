<?php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
	
	public function testGetName(){
		$user = new \App\Model\User();
		$this->assertEquals('Billy', $user->getName());
	}
}
