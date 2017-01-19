<?php

class ExempleA {

	public $att = 21;

	public function __construct() {
		print( 'Constructor ExempleA called' . PHP_EOL );
		return;
	}

	public function	__destruct() {
		print( 'Destructor ExempleA called' . PHP_EOL );
		return;
	}

	public function foo() {
		print( 'Function foo from class A, $this->att is ' . $this->att . PHP_EOL );
	return;
	}
}

class ExempleB extends ExempleA {

	public function __construct() {
		print( 'Constructor ExempleB called' . PHP_EOL );
		$this->att = 42;
		return;
	}

	public function __destruct() {
		print( 'Destructor ExempleB called' . PHP_EOL );
		return;
	}
}

$instanceA = new ExempleA();
$instanceA->foo();
$instanceB = new ExempleB();
$instanceB->foo();
	

?>
