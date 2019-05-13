<?php
/******************************************
-Đây là visibility có mức độ truy cập rộng nhất trong hướng đối tượng, khi một thuộc tính hay phương thức sử dụng visibility này thì chúng ta có thể [tác động vào thuộc tính hay phương thức đó từ cả trong lẫn ngoài class]. Thông thường khi không khai báo visibility thì chương trình dịch tự nhận nó là public nhưng để cho đúng chuẩn thì mọi người lên khai báo từ khóa này vào thay vì bỏ trống.
*****************************************/
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;

    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}

//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person->name = 'Vũ Van A';
//tác động vào biến name qua hàm setName
$person->setName('Vũ Thanh Tài');
echo $person->getName();
?>