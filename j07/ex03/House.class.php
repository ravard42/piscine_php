<?php

abstract class		House {

	abstract function 	getHousename();
	abstract function 	getHouseMotto();
	abstract function	getHouseSeat();

	function		introduce() {
		print ( 'House ' . $this->getHouseName() . ' of ' . $this->getHouseSeat() . ' : "' . $this->getHouseMotto() . '"' . PHP_EOL );
	}
}

?>
