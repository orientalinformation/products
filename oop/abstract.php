<?php

abstract class People
{
	//abstract public $test; //Fatal error: [Properties] cannot be declared abstract
	public $leg = "Leg";
	public $mouth = "mouth";

	public function eat()
	{

	}

	// Method abstract
	// Fatal error: Abstract function People::drink() cannot contain body 
	// abstract public function drink() 
	// {

	// }
	abstract public function drink();
}

//Fatal error: Class Man contains 1 abstract method and must therefore be declared abstract or implement the remaining methods 
class Man extends People
{
	public function drink()
	{
		echo 'Overrice method drink of abstract class' . "<br>";
	}
}

?>