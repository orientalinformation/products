<?php 
/************************************************
Inheritance: Child can use all methods and properties (visbility: public, protected, 'pribate not extend')
class childClass extends parentClass
{
    //code
}

properties call in function
*************************************************/

class People 
{
	public $hand;
	public $leg;
	public $mouth;
	public $eye;

	public function eat() 
	{
		echo "Eat \n";
	}

	public function getClass()
    {
        return 'ParentClass';
    }
}

class Adults extends People
{
	public $armpitHair;

	public function go()
	{
		$this->hand = "hands";

		echo "Go \n" . $this->hand . "<br>";
	}

	public function say()
	{
		echo "Say \n";
	}

	public function getClass()
    {
        echo 'ChildClass' . "\n";
    }

    public function getParentClass() 
    {
    	echo "\nClass parent" . parent::getClass() . "\n";
    }
}

class Children extends People
{
	public function crawl()
	{
		echo "Crawl \n";
	}
}

?>