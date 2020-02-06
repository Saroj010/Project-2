<?php
class Counter
{
	public static $count;
	public function __construct()
	{
		self::$count = 0;
	}
	public function increaseCount()
	{
		self::$count++;
	} 
	public function displayCount()
	{
		echo self::$count;
	}
}
$obj1 = new Counter;
$obj2 = new Counter;
$obj1->increaseCount();
// echo Counter::$count;
// echo Counter::$count;
echo $obj1->displayCount();
echo $obj2->displayCount();
