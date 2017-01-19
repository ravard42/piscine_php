<?php

class Tyrion {

	function 	sleepWith($q) {
	if (get_class($q) == 'Cersei' || get_class($q) == 'Jaime')
		print( 'Not even if I\'m drunk !' . PHP_EOL );
	if (get_parent_class($q) == 'Stark')
		print ( 'Let\'s do this.' . PHP_EOL );
	}

}

?>
