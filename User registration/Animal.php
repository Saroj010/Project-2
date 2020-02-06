 <?php

class Animal
{
	public $color, $food
	function eat(){
		echo "Eating" .$this->food;
	}
}

$dog = new Animal;
$dog->color = "Black";
$dog->food="Bones";
$dog->eat();
$cat = new Animal;
$cat->color = "Brown";
$cat->food=  "Milk";
$cat->eat();
echo $dog->color;
