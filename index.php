<?php 

/**
 * 
 */
class Prime 
{
	private $number;
	private $divider = 0;
	private $numbers = [];
    private $init;
	
	function __construct($value = 10, $init = 2)
	{
		$this->number = $value;
	}

	public function getNumbers() {
		
		for ($x = $this->init; $x < $this->number; $x++) {

			$this->divider = 0;

			for ($i=$x; $i >= 1; $i--) { 
			    
			    if ($x % $i == 0) {
	 				
					$this->divider++;

				}   	
			}

			if ($this->divider == 2) {
				array_push($this->numbers, $x);
			}
		}			 
	}	

	public function print() {
		
		$html = "Números primos entre <b>{$this->init}</b> e <b>{$this->number}</b>: ";

		$html .= implode(', ', $this->numbers);

        echo $html; 
	}
}


$X = 20;

$primo = new Prime($X);

$primo->getNumbers();

$primo->print();


?>
