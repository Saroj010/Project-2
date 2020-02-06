<?php

interface Shape
{
	public function test();
}
interface Geometry
{
	public function draw();
}

class Circle implements Shape, Geometry
{
	public function test()
	{

	}
	public function draw()
	{

	}
}
