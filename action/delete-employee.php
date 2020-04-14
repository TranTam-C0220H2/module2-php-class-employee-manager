<?php
include '../class/EmployeeManager.php';
$index = $_REQUEST['index'];
$employeeManager = new EmployeeManager('../dataEmployee.json');
$dataArray = $employeeManager->getArrayDataEmployee();
unlink('../upload/'.$dataArray[$index]->avatar);
$employeeManager->deleteEmployee($index);
header('Location: ../index.php');