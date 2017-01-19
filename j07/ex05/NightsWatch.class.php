<?php

class	NightsWatch {

	public function		recruit($elem) {
		if (is_subclass_of($elem, 'IFighter'))
			$elem->fight();
	}
	public function		fight() {
		return 'Victory';
	}

}

?>
