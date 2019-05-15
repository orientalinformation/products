<?php 
class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo'  . "<br>";
    }

    public function getMessage()
    {
        echo 'Đây là class Bar' . "<br>";
    }

    public function __destruct()
    {
        echo 'Class Bar được hủy'  . "<br>";
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo' . "<br>";
    }

    public function __destruct()
    {
        echo 'Class Foo được hủy' . "<br>";
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