<?php

class UnholyFactory {
	public	$sold_abs = False;
	public	$arch_abs = False;
	public	$assa_abs = False;

	public function absorb($f) {
		if (get_parent_class($f) == 'Fighter')
		{
			if ($f->type == 'crippled soldier')
				$f->_erro();
			if (($f->type == 'foot soldier' && $this->sold_abs) || ($f->type == 'archer' && $this->arch_abs) || ($f->type == 'assassin' && $this->assa_abs))
					print( '(Factory already absorbed a fighter of type ' . $f->type . ')' .  PHP_EOL );
			else
			{
				print( '(Factory absorbed a fighter of type ' . $f->type . ')' . PHP_EOL );
				if ($f->type == 'foot soldier')	
					$this->sold_abs = True;
				else if ($f->type == 'archer')	
					$this->arch_abs = True;
				else
					$this->assa_abs = True;
			}	
		}
		else
			print('(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL );
		return;
	
	}


	public function		fabricate($supp)
	{
		if ($supp == 'foot soldier' && $this->sold_abs)
		{
			print ( '(Factory fabricates a fighter of type ' . $supp . ')' . PHP_EOL );
			return new Footsoldier;
		}
		else if ($supp == 'archer' && $this->arch_abs)
		{
			print ( '(Factory fabricates a fighter of type ' . $supp . ')' . PHP_EOL );
			return new Archer;
		}
		else if ($supp == 'assassin' && $this->assa_abs)
		{
			print ( '(Factory fabricates a fighter of type ' . $supp . ')' . PHP_EOL );
			return new Assassin;
		}
		else
		{
			print ( '(Factory hasn\'t absorbed any fighter of type ' . $supp . ')' . PHP_EOL );
			return NULL;
		}
	}

}


?>
