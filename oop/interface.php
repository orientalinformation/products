<?php 

interface Animal 
{
	// Fatal error: Interfaces may not include member variables
	// public $leg;
	const air = 10; // interface can declade hang so

	// Fatal error: Interface function Animal::run() cannot contain body
	// public function run() 
	// {

	// }

	// Fatal error: Access type for interface method Animal::run() must be omitted in [public or protected]
	public function run();
}


interface Infomation
{
	public function color();
}

/***************************************
Fatal error: Class Buffalo contains 1 abstract method and must therefore be declared abstract or implement the remaining methods 
override all method of interface
****************************/
class Buffalo implements Animal
{
	//@override
	public function run() 
	{
		echo 'Class run override animal' . "<br>";
	}
}

// one class can implements all interface
class Calves implements Animal, Infomation
{
	public function run() 
	{
		echo 'Class run calves' . "<br>";
	}

	public function color()
	{
		echo 'Class color calves'. "<br>";
	}
}

// interface can extends interface
interface Info extends Infomation
{

}

?>