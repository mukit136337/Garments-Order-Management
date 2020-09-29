<?php
use PHPUnit\Framework\TestCase;
use Mockery as m;
use Mockery\Adapter\Phpunit\MockeryTestCase;
class MathTest extends MockeryTestCase
{
	protected $math;
	protected $calcualate;
	public function setUp(): void{
		$this->calculate = m::mock('App\Model\Calculate');
		$this->math = new \App\Model\Math($this->calculate);
	}

	public function testAreaOfSquare(){
		$this->calculate->shouldReceive('areaOfSquare')
						->andReturn(4)
						->once();
		$length = 2;
		$response = $this->math->getArea($length);
		$this->assertEquals(4, $response);
	}
}
