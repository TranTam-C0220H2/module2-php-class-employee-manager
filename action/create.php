<?php
$avatar = $_FILES['avatar'];
$avatarName = time().'-'.$_FILES['avatar']['name'];
move_uploaded_file($avatar['tmp_name'], '../upload/'.$avatarName);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDay = $_POST['birthDay'];
$address = $_POST['address'];
$jobPosition = $_POST['jobPosition'];
$group = $_POST['group'];
include '../class/Employee.php';
include '../class/EmployeeManager.php';
$employee = new Employee();
$employeeManager = new EmployeeManager('../dataEmployee.json');
$employee->setAvatar($avatarName);
$employee->setFirstName($firstName);
$employee->setLastName($lastName);
$employee->setBirthDay($birthDay);
$employee->setAddress($address);
$employee->setJobPosition($jobPosition);
$employee->setGroup($group);
$employeeManager->setDataEmployee($employee);
header('Location: ../index.php');

