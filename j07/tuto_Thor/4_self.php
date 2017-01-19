<?php


class ExempleA {

	private $var = 'err';

	public function 	__construct() {
		print( 'Constructor ExempleA called' . PHP_EOL );
		return;
	}

	public function		__destruct() {
		print( 'Destructor ExempleA called' . PHP_EOL );
	}

	public function	foo() {
		print( 'Function foo from ExempleA called' . PHP_EOL );
		return;
	}

	public function		test() {
		self::foo();
		return;
	}
}

class ExempleB extends ExempleA {

	public function 	__construct() {
		print( 'Constructor ExempleB called' . PHP_EOL );
		return;
	}

	public function		__destruct() {
		print( 'Destructor ExempleB called' . PHP_EOL );
	}
	
	public function		foo() {
		print( 'Function foo from ExempleB called' . PHP_EOL );
		return;
	}
}

$instanceA = new ExempleA();
$instanceA->foo();
$instanceB = new ExempleB();
$instanceB->foo();
$instanceB->test();


?>
