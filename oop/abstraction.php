<?php
/*****************************************
Tính trừu tượng (abstraction) trong lập trình hướng đối tượng giúp giảm sự phức tạp thông qua việc tập trung vào các đặc điểm trọng yếu hơn là đi sâu vào chi tiết.
Như vậy khi tương tác với đối tượng chỉ cần quan tâm đến các thuộc tính, phương thức cần thiết. Chi tiết về nội dung không cần chú ý đến.
PHP có abstract class(Bản thiết kế cho class) và interface(Bản thiết kế cho interface) để trừu tượng hóa các đối tượng.
-----------------------------------------------------
Trong lớp Abstract các phương thức bạn khai báo ở dạng Abstract đều phải tuân theo cú pháp trên, tức là bạn không được định nghĩa thêm dòng lệnh nào bên trong nó
abstract class BaseClass
{
    // phương thức ở mức protected
    abstract protected function hello();
  
    // Phương thức ở mức public
    abstract public function hi();
}
// khai báo sai vì phương thức k dc viết code
abstract class BaseClass
{
    // Phương thức này sai vì hàm hello là
    // hàm abstract nên không được code bên trong nó
    abstract protected function hello()
    {
        // dòng code
        echo 1;
    }
  
}
**********************************/
abstract class BaseClass
{
    // phương thức ở mức protected
    abstract protected function hello();
  
    // Phương thức ở mức public
    abstract public function hi();
}
// Như tôi nói ở trên bạn không thể tạo một biến đối tượng mới của lớp Abstract, như ví dụ dưới này là sai:

// Sai vì BaseClass là lớp Abstract nên không
// khởi tạo mới được
// $base = new BaseClass();

// Mức truy cập các hàm của Abstract phải ở public hoặc protected để lớp kế thừa có thể định nghĩa lại và các thuộc tính của lớp Abstract không được khai báo Abstract. Các bạn xem ví dụ dưới đây:
abstract class BaseClass
{
    // Đúng
    public $name;
  
    // Sai vì các thuộc tính không được để ở dạng abstract
    // abstract public $title;
  
    // Đúng
    abstract protected function hello();
  
    // Sai vì hàm abstract không thể ở private
    // abstract private function hi_there();
}

// Lớp kế thừa từ lớp Abstracth phải Rewrite lại tất cả các hàm Abstract trong lớp Abstract, nếu không sẽ bị báo sai. Ví dụ:

abstract class Person
{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
  
    abstract public function showInfo();
}
  
// Lớp này sai vì chưa viết lại hàm showInfo
class CongNhan extends Person
{
  
}
  
// Lớp này đúng vì ta đã khai báo, viết lại
// đầy đủ các hàm abstract
class SinhVien extends Person
{
    public function showInfo(){
  
    }
}


// Lớp Final là lớp được khai báo là lớp cuối cùng, không một lớp nào có thể kế thừa nó. Tương tự như hàm Final trong Abstract hoặc trong kế thừa chỉ để gọi sử dụng, không được viết lại (Override).  Để dễ hình dung các bạn xem ví dụ sau đây và thông qua phần ghi chú tôi đã giải thích.

// Ví dụ lớp final:
// Lớp Filnal
final class Person
{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    public function showInfo()
    {
        echo 'freetuts.net';
    }
}
  
// Hàm này sẽ bị báo lỗi vì lớp SinhVien
// đã kế thừa một lớp Final, điều này là không thể
class SinhVien extends Person {
}
  
// Đoạn code này đúng vì lớp Final được
// sử dụng bình thường như các lớp khác
// chỉ có điều là không được kế thừa
$person = new Person;
$person->showInfo();

// Ví dụ hàm final:
class Person
{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    final public function showInfo()
    {
        echo 'freetuts.net';
    }
}
  
// Lớp này đúng vì lớp Person không phải
// là một lớp final
class SinhVien extends Person {
  
    // Hàm này sai vì hàm showInfo
    // là hàm final trong lớp Person
    // nên không thể Override lại
    public function showInfo(){
  
    }
  
    public function Go()
    {
        // Đoạn code này đúng vì hàm final được
        // sử dụng bình thường
        $this->showInfo();
    }
}

?>