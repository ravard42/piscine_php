<?php

abstract class		House {

	/*abstract function getHouseName();
	abstract function getHouseSeat();
	abstract function getHouseMotto();*/


	function		introduce() {
		print ( 'House ' . $this->getHouseName() . ' of ' . $this->getHouseSeat() . ' : "' . $this->getHouseMotto() . '"' . PHP_EOL );
	}

	public function		__call($f, $args) {
		echo 'FATAL ERROR' . PHP_EOL;
		exit();
	}
}

?>
