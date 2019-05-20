<?php 
/**************************************
-Static trong lập trình hướng đối tượng là một thành phần tĩnh (có thể là thuộc tính hoặc phương thức) mà nó hoạt động như một biến toàn cục, dù cho nó có được xử lý ở trong bất kỳ một file nào đi nữa (trong cùng một chương trình) thì nó đều lưu lại giá trị cuối cùng mà nó được thực hiện vào trong lớp.
********************************/

// static
class Animal
{
	private static $leg = 'Leg';

	public static function getLeg()
	{
		//echo $this->leg; // Fatal error: Uncaught Error: Using $this when not in object context 
		// No using $this call properties 
		echo self::$leg;
	}

	public static function setLeg($leg)
	{
		self::$leg = $leg;
	}
}

// no static
class Plant
{
	public $leaf = 'yellow';

	public function getLeaf()
	{
		echo $this->leaf;
	}

	public function setLeaf($leaf)
	{
		$this->leaf = $leaf;
	}
}

/*
Kế thừa phương thức tĩnh từ lớp cha
-Để kế thừa phương thức tĩnh từ lớp cha thì chúng ta vẫn sử dụng như cách truyền thống.
*/

class ConNguoi
{
    private static $name = 'Vũ Thanh Tài';

    public static function getName()
    {
        return ConNguoi::$name;
    }
}

class NguoiLon extends ConNguoi
{
    public function getName()
    {
        parent::getName();
    }
}

/*
Nhược điểm của static
-Như ở trên mình có nói 'static nó hoạt động như một biến toàn cục' và cũng vì điều này mà khi sử dụng static trong chương trình thì nó sẽ chiếm nhiều tài nguyên hơn các thành phần thường.
*/

?>