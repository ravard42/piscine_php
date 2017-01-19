<?php

class Greyjoy {
	protected 	$familyMotto = 'We do not sow';


	public function		__get($att) {
		print( 'FATAL ERROR' . PHP_EOL );
		exit();
	}
}

?>
