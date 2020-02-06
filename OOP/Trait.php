<?php

trait SendMail
{
	public function send()
	{
		echo "Sending Mail .........";
	}
}

trait LoginMail
{
	public function Log()
	{
		echo "Logging Mail..........";
	}
}

class Employee
{
	use LoginMail;
}
class User
{
	use LoginMail, SendMail;
}

$emp = new Employee;
$u = new User;
$emp->Log();
$u->Log();
$u->send();