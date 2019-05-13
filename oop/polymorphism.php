<?php 
/************************************************************
-Đối với tính chất này, nó được thể hiện rõ nhất qua việc gọi phương thức của đối tượng. Các phương thức hoàn toàn có thể giống nhau, nhưng việc xử lý luồn có thể khác nhau.
************************************************************/
class Triangle 
{
	// code
}

class Geometry
{
	// code
	public function areaCalculation()
	{
		echo "Area Geometry";
	}
}

class Square extends Geometry
{
	// code
	public function areaCalculation()
	{
		echo "Area Square" . "\n";
	}
}

class Rectangle extends Geometry
{
	// code
	public function areaCalculation()
	{
		echo "\nArea Rectangle" . "\n";
	}
}

?>