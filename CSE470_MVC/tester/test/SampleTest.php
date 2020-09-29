<?php
use PHPUnit\Framework\TestCase;
class SampleTest extends TestCase
{
	
	public function testTrueAssertsToTrue(){
		$user = new \App\Model\User();
		$this->assertEquals($user->getName(), 'Billy');
	}
}