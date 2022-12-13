<?php
namespace App\Test;

use App\FizzBuzz;
use Fiber;
use PHPUnit\Framework\Exception;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
	public function test0returns0()
	{
		$fz = new FizzBuzz();
		$this->assertEquals("0", $fz->fizzBuzz(0));
	}

	public function test1returns1()
	{
		$fz = new FizzBuzz();
		$this->assertEquals("1", $fz->fizzBuzz(1));
	}

	public function test3returnsFizz()
	{
		$fz = new FizzBuzz();
		$this->assertEquals("Fizz", $fz->fizzBuzz(3));
	}

	public function test4returnsBuzz()
	{
		$fz = new FizzBuzz();
		$this->assertEquals("Buzz", $fz->fizzBuzz(4));
	}

	public function test12returnsFizzBuzz()
	{
		$fz = new FizzBuzz();
		$this->assertEquals("FizzBuzz", $fz->fizzBuzz(12));
	}

	/**
	 * @dataProvider provideTrimData
	 */
	public function testCandidatereturnsExpected($candidate, $expected)
	{
		$fz = new FizzBuzz();
		$this->assertEquals($expected, $fz->fizzBuzz($candidate));
	}

	public function provideTrimData()
	{
		return [
			[2, "2"],
			[3, "Fizz"],
			[6, "Fizz"],
			[4, "Buzz"],
			[8, "Buzz"],
			[12, "FizzBuzz"],
			[24, "FizzBuzz"],
			[100000000000, "Buzz"]
		];
	}

}