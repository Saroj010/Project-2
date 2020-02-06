<?php
class Employee
{
	public $name, $address;
	public function __construt($name. $address)
	{
		$this->name = $name;
		$this->address = $address;
	}
}
//public function __construt() //defult constructoryMagic method
// {
	//echo "default constructor";
// }
// $tem3 = new Employee(); //it call default construct
$emp1 = new Employee("Anil", "KTM");
$emp2 = new EmployeeI("Bishal", "Pkr");

var_dump($emp1);
var_dump($emp2);