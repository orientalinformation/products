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
// include_once ('oop/abstract.php');
// abstract cann't instantiate
// $people = new People(); // Fatal error: Uncaught Error: Cannot instantiate abstract class People in
// $man = new Man();
// $man->drink();

//******************Interface**********
// include_once ('oop/interface.php');

// $animal = new Animal(); //Fatal error: Uncaught Error: Cannot instantiate interface Animal 

//*******************static and final*************
// include_once ('oop/staticfinal.php');
// $animal = new Animal();
// $plant = new Plant();

// $animal->setLeg('Oriental');
// $plant->setLeaf('Leaf');
// echo $animal->getLeg() . "<br>";
// echo $plant->getLeaf() . "<br>";
// echo "---------------------------<br>";
// $animal1 = new Animal();
// $plant1 = new Plant();
// echo $animal1->getLeg() . "<br>"; // get value ma ta gan lan cuoi cung
// echo $plant1->getLeaf() . "<br>"; // lay gia tri default ban dau

//**********************final *******************
include_once ('oop/final.php');


// closeConnect($connect);
?>