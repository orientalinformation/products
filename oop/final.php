<?php 
/********************************
-Final dịch ra tiếng việt có nghĩa là sau cùng và trong lập trình hướng đối tượng thì final được ứng dụng vào class và phương thức.
Final class
-Khi một class được khai báo là final thì không lớp nào có thể kế thừa nó và nó chỉ có thể khởi tạo được thôi.

Cú pháp: Khai báo final class.

final class ClassName
{
    //
}
*********************************/

final class Animal
{

}

// Fatal error: Class Dog may not inherit from final class (Animal)
// class Dog extends Animal
// {

// }


/*Final Phương thức
-Khi chúng ta khai báo một phương thức là final thì không có một phương thức nào có thể override(ghi đè lại được).

Cú pháp: khai báo một phương thức final.

class ClassName
{
    final public function methodName()
    {
        //
    }
}
*/
class Cat
{
	public final function getColor()
	{
		echo "yellow";
	}
}

class CatChild extends Cat
{
	// Fatal error: Cannot override final method Cat::getColor()
	// public function getColor() 
	// {

	// }
}

?>