<?php

require_once 'Employee.php';

$userl = new Employee('jan', 'kowalski', 32, 'M', 300, 0);

echo $userl->display().'<br>';

echo $userl->display();