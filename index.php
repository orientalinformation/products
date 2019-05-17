<?php 
include_once  ('includes/db_connection.php');
// include_once ('oop/inheritance.php');
// include_once ('oop/polymorphism.php');
// include_once ('oop/encapsulation.php');
// $connect = openConnect();

//*****inheritance*****
// $adults = new Adults();
// $adults->eat();
// $adults->go();
// $adults->getClass();
// $adults->getParentClass();

//**********polymorphism************
// $square = new Square();
// $square->areaCalculation();
// $rectangle = New Rectangle();
// $rectangle->areaCalculation();

//*********Contruction***************
// include_once ('oop/contruction.php')

//*************Abstaction***************
include_once ('oop/abstract.php');
// abstract cann't instantiate
// $people = new People(); // Fatal error: Uncaught Error: Cannot instantiate abstract class People in

$man = new Man();
$man->drink();


// closeConnect($connect);
?>