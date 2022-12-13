<?php
namespace App;

use PhpParser\Node\Stmt\Return_;

class FizzBuzz
{
	public function fizzBuzz(float $candidate): string
	{
		$result = "";
		if ($candidate == 0) {
			return "0";
		}
		if ($candidate % 3 == 0) {
			$result .= "Fizz";
		}
		if ($candidate % 4 == 0) {
			$result .= "Buzz";
		}
		if ($candidate % 3 != 0 && $candidate % 4 != 0) {
			return strval($candidate);
		}
		return $result;
	}
}