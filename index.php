<?php 
include_once  ('db_connection.php');

// $connect = openConnect();

function products() 
{
	$name = 'Iphone X 64Gb Black';
	$salePrice = '$999';
	$marketPrice = '$1099';

	$sql = "INSERT INTO products (name, sale_price, market_price)
			VALUES ('$name', '$salePrice', '$marketPrice')";

	if (mysqli_query($connect, $sql)) {
    	echo "Create products successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
	}
}

function producAttributes()
{
	$sql = "INSERT INTO produc_attributes (product_id, attribute_value_id)
			VALUES ('$product_id', '$attribute_value_id')";
}

// value if attribute S, M, L, Red, Blue, Yellow
function attributeValues()
{
	$sql = "INSERT INTO attribute_values (attribute_value_id, attribute_id, name)
			VALUES ('1','1', '',)";
}

// name of values: Size, Color
function attributes()
{
	$sql = "INSERT INTO attributes (attribute_id, size, color, storage, description, origin, factory_date, weight)
			VALUES ('1', 16, 'BLACK', 64, 'Iphone X 64GB', 'VN', '10/11/2018', 3.2)";
}

function productImages() 
{
	$sql = "INSERT INTO product_images (product_id, image_path)
			VALUES ('1','product.jpg'), ('1','product2.jpg'), ('1','product3.jpg')";
}


// closeConnect($connect);
?>