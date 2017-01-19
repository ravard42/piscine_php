<?php

class	Jaime {

	function	sleepWith($q) {
	if (get_class($q) == 'Tyrion')
		print( 'Not even if I\'m drunk !' . PHP_EOL );
	if (get_parent_class($q) == 'Stark')
		print( 'Let\'s do this.' . PHP_EOL );
	if (get_class($q) == 'Cersei')
		print( 'With pleasure, but only in a tower in Winterfell, then.' . PHP_EOL );
	}
}

?>
