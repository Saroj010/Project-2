<?php
include ('Task.php');

$task1 = new Task;
$task1->name = 'Go to the market';
$task2 = new Task;
$task2->name = 'Study html';
$task3 = new Task;
$task3->name = 'Study php';
$task1->name = 'Study OOP';

$tasks = [];
array_push($tasks, $task1, $task2, $task3);







