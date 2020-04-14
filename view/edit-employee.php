<?php
$index = $_REQUEST['index'];
include '../class/EmployeeManager.php';
$employeeManager = new EmployeeManager('../dataEmployee.json');
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../action/edit.php?index=<?php echo $index ?>" method="post" enctype="multipart/form-data">
    <label>Avatar: <input type="file" name="avatar"></label>
    <label>First Name: <input type="text" name="firstName" value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->firstName ?>"></label>
    <label>Last Name: <input type="text" name="lastName" value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->lastName ?>"></label>
    <label>Birth Day: <input type="date" name="birthDay" value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->birthDay ?>"></label>
    <label>Address:
        <select name="address">
            <option value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->address ?>">Ha Noi</option>
            <option>Ha Nam</option>
            <option>Bac Ninh</option>
            <option>Ninh Binh</option>
            <option>Thanh Hoa</option>
        </select>
    </label>
    <label>Job Position:
        <select name="jobPosition" value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->jobPosition ?>">
            <option>Kinh Doanh</option>
            <option>Kho</option>
            <option>Ke Toan</option>
            <option>Giao van</option>
            <option>Nhan su</option>
        </select>
    </label>
    <label>Group: <input type="text" name="group" value="<?php echo $employeeManager->getElementArrayDataEmployByIndex($index)->group ?>"></label>
    <input type="submit" value="Edit">
</form>
</body>
</html>


