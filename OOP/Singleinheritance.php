<?php
//Single Inheritence
//
class ParentClass
{
	public $name;

	protected function display()
	{
		echo "From parentclass";
	}
}

class ChildClass extends ParentClass
{
	public function test()
	{
		$this->display;
	}
}
$obj = new ChildClass;
$obj->test();

class GrandParentClass
{
	public function display($name)
	{
		echo "Child Class";
	}
}
class ParentClass extends GrandParentClass
{

}
class ChildClass extends ParentClass
{
	public function test()
	{
		$this->display;
	}
}
}