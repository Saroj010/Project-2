<?php
class Scope
{
	const PI = 3.14;
	public $radius = 1;
	public static $r = 5;
}
echo Scope::PI;
$obj = new Scope;
echo $obj->radius;
echo Scope::$r;