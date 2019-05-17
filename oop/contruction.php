<?php 
class Bar
{
    public function __construct()
    {
        echo 'Class Bar construct'  . "<br>";
    }

    public function getMessage()
    {
        echo 'This is class Bar' . "<br>";
    }

    public function __destruct()
    {
        echo 'Class Bar destruct'  . "<br>";
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        echo 'Class Foo construct' . "<br>";
    }

    public function __destruct()
    {
        echo 'Class Foo destruct' . "<br>";
    }
}

class Coo extends Bar
{
	public function __construct()
	{
		parent::__construct();
		echo "Class Coo construct" . "<br>";
	}

	public function __destruct()
	{
		parent::__destruct();
		echo "Class Coo destruct" . "<br>";
	}
}

// $foo = new Foo();

// $foo = new Foo();
//kết quả: Class Foo được khởi tạo
// $foo->getMessage();
//kết quả: Đây là class Foo
//kết quả: Class Foo được hủy

$coo = new Coo();

?>