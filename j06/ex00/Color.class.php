<?php
	
class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = FALSE;

	function	__construct(array $kwarg) {


		if (array_key_exists('red', $kwarg) && 
			array_key_exists('green', $kwarg) &&
			array_key_exists('blue', $kwarg))
		{
			$this->red = intval($kwarg['red']);
			$this->green = intval($kwarg['green']);
			$this->blue = intval($kwarg['blue']);
		}
		else if (array_key_exists('rgb', $kwarg))
		{
			$arg = intval($kwarg['rgb']);
			$this->blue = $arg % 256;
			$this->green = ($arg - $this->blue) % (256 * 256) / 256;
			$this->red = intval(($arg - $this->green - $this->blue) % (256 * 256 * 256) / 256 / 256);
		}
		if (self::$verbose)	
			echo 'Color ( red: ' . $this->red . ', green: ' . $this->green . ', blue: ' . $this->blue . ' ) constructed.' . "\n";
		return;

	}

	function		__destruct() {
		if (self::$verbose)	
			echo 'Color ( red: ' . $this->red . ', green: ' . $this->green . ', blue: ' . $this->blue . ' ) destructed.' . "\n";
		return;
	}

	function		__toString() {
		return 'Color ( red: ' . $this->red . ', green: ' . $this->green . ', blue: ' . $this->blue . ' )';
	}
	
	public static function	 doc() {
		return 	"\n" . file_get_contents('./Color.doc.txt');
	}

	
	public function		add(Color $param) {
		return new Color (array('red' => $this->red + $param->red , 'green' => $this->green + $param->green , 'blue' => $this->blue + $param->blue));
	}		
	
	public function		sub(Color $param) {
		return new Color (array('red' => $this->red - $param->red , 'green' => $this->green - $param->green , 'blue' => $this->blue - $param->blue));
	}		
		
	public function		mult($param) {
		return new Color (array('red' => $this->red * $param , 'green' => $this->green * $param , 'blue' => $this->blue * $param));
	}		
}


/*
	$instance = new Color(array('rgb' => 0xfffafa));


	$instance2 = new Color( array('red' => 45 , 'green' => 45 , 'blue' => 55));
	echo $instance . PHP_EOL;
	echo $instance2 . PHP_EOL;
	echo Color::doc() . "\n";
	Color::$verbose = TRUE;
	$instance3 = $instance->add($instance2);
	echo  $instance3 . PHP_EOL;
	$instance4 = $instance3->sub($instance2);
	echo  $instance4 . PHP_EOL;
	$instance5 = $instance4->mult(2);
	echo  $instance5 . PHP_EOL;
*/	
?>
