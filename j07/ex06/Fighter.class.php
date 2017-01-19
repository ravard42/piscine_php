<?php

class Fighter {
	
	public $type = '';

	public function		__construct($str) {
		$this->type = $str;
	}

	private function	_erro() {
		echo "On s casse!\n" . PHP_EOL;
	}

}



?>
