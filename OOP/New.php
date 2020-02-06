<?php

abstract class Vehicle
{
	abstract public function hunk($name);
}
class Car extends Vehicle
{
	public function hunk($name)
	{
       echo "peep".$name;
	}
}

class Bike extends Vehicle
{
   public function hunk($name)
   {
   		echo "teet".$name;
   }
} 

$avenger = new Bike;
$pulsar = new Bike;
$avenger->hunk("avenger"."<br>");
$pulsar->hunk("pulsar"."<br>");


$bmw = new Car;
$maruti = new Car;
$bmw->hunk("bmw"."<br>");
$maruti->hunk("maruti"."<br>");