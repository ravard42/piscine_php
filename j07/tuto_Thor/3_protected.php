<?php

class ExempleA {

	public		$publicAtt = 21;
	protected	$_protectedAtt = 84;
	private		$_privateAtt = 42;



	public function __construct() {
		print( 'Constructor ExempleA called' . PHP_EOL );
		return;
	}

	public function	__destruct() {
		print( 'Destructor ExempleA called' . PHP_EOL );
		return;
	}

	public function publicFoo() {
		print( 'Function publicFoo from class A' . PHP_EOL );
	return;
	}
	
	protected function _protectedFoo() {
		print( 'Function _protectedFoo from class A' . PHP_EOL );
	return;
	}
	
	private function _privateFoo() {
		print( 'Function _privateFoo from class A' . PHP_EOL );
	return;
	}

	public function test() {
	
		print('$this->publicAtt is ' . $this->publicAtt . PHP_EOL );
		print('$this->_protectedAtt is ' . $this->_protectedAtt . PHP_EOL );
		print('$this->_privateAtt is ' . $this->_privateAtt . PHP_EOL );
		$this->publicFoo();
		$this->_protectedFoo();
		$this->_privateFoo();
		return;	
	}
}

class ExempleB extends ExempleA {

	public function __construct() {
		print( 'Constructor ExempleB called' . PHP_EOL );
		return;
	}

	public function __destruct() {
		print( 'Destructor ExempleB called' . PHP_EOL );
		return;
	}

	public function test() {
		print('$this->publicAtt is ' . $this->publicAtt . PHP_EOL );
		print('$this->_protectedAtt is ' . $this->_protectedAtt . PHP_EOL );
		print('$this->_privateAtt is ' . $this->_privateAtt . PHP_EOL );
		$this->_privateFoo();	
	
	}
		
}

$instanceA = new ExempleA();
$instanceA->test();
$instanceB = new ExempleB();
$instanceB->test();
	

?>
