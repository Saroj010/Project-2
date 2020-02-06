<?php

class Dog{

	public $name, $color;
}

$dog1 = new Dog;
$dog1->name = "Tyson";
$dog1->color = "Black";
$dog2 = new Dog;
$dog2->name = "Bhotey";
$dog2->color = "White";

$Dogs=[$dog1, $dog2];
foreach ($Dogs as $dog ) {
   echo $dog->name;
}
