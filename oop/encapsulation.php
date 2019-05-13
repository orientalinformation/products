<?php 
/*************************************************
-Trong phương pháp lập trình hướng đối tượng các thuộc tính và phương thức được ràng buộc về mức độ truy cập, giúp cho dữ liệu được bảo mật hơn.Cụ thể thể là ba phạm vi: private, protected, public (Nếu không khai báo visibility thì mặc định nó sẽ là public).Khi khai báo kèm theo phạm vi thì chúng ta sẽ sử dụng cú pháp:
class className
{
    //khai báo thuộc tính
    visibility $propertyName;
    //Khai báo phương thức
    visibility function methodName()
    {

    }
}
***********************************************/
// include_once('visibility/private.php');
// include_once('visibility/private_true.php');
// include_once('visibility/protected.php');
include_once('visibility/public.php');
?>