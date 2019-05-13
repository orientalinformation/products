<?php 
	class Person
	{
	    //khai báo thuộc tính name ở private
	    private $name;

	    //Khai báo phương thức run ở private
	    private function run()
	    {
	        return 'Đây là hàm run';
	    }
	}

	//Khởi tạo class
	$person = new Person();
	//gọi phương thức name
	// Fatal error: Uncaught Error: Cannot access private property Person::$name
	$person->name;
/***************************************************************************
Sau đó các bạn chạy chương trình lên sẽ nhận được một dòng thông báo lỗi có nội dung: Fatal error: Cannot access private property Person::$name in ...

Như vậy các bạn có thể thấy khi sử dụng private thì chúng ta không có thể gọi và truy cập vào nó từ bên ngoài class được đúng không? Và nếu như bạn muốn truy cập vào nó ở bển ngoài class thì bạn phải sử dụng các phương thức có visibility là public hoặc không khai báo visibility.
***************************************************************************/
?>