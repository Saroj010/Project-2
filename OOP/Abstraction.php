<?php

abstract class Shape
{
	public function init()
	{
		echo "Welcome";
	}
	abstract public function draw();

	abstract public function coloring ();
}

abstract class Circle extends Shape
{
	public function draw()
	{
		echo "drawing circle";
	}

	public function coloring()
	{

	}
}
abstract class Square extends Shape
{
	public function draw()
	{
		echo "drawing square";
	}

	public function coloring()
	{

	}

}

