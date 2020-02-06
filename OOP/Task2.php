<?php

require_once 'Company.php';
require_once 'Employee2.php';
require_once 'Person.php';

$saroj = new Employee2;
$saroj->name = "Saroj Rana";
$saroj->address = "Pokhara";

$rahul = new Employee2;
$rahul->name = "Rahul Thapa";
$rahul->address = "Butwal";

$skeinsoft = new Company;
$skeinsoft->name = "Skeinsoft";
$skeinsoft->address = "Nayabazar";

$skeinsoft->hire($saroj);
$skeinsoft->hire($rahul);

echo "<ol>";
foreach($skeinsoft->ListAllEmployees() as $emloyee)
{
	echo "<li>".$emloyee->name."</li>";
}
echo "</ol>";