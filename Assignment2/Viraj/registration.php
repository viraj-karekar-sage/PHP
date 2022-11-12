<?php

include('employee.php');
$employee_obj = new employee();

// Registering the new employee
$employee_obj->employeeRegister(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['mobile_number'],
    $_POST['role'],
    $_POST['username'],
    md5($_POST['password']),
    $_POST['address']
);