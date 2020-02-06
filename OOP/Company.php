<?php

class Company
{
	public $name, $address, $employees = [];

	public function hire($employee)
	{
		array_push($this->employees, $employee);
	}
	public function ListAllEmployee()
	{
		return  $this->employees;
	}
}