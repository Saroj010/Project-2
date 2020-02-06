<?php

class Task{
	public $name, $isCompleted;

	function markAsComplete()
	{
		$this->isCompleted = true;

	}
}
