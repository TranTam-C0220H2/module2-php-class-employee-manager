<?php
include 'EmployeeManager.php';
$employeeManager = new EmployeeManager('dataEmployee.json');
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
<a href="add-employee.php">Add</a><br>
<form action="search-employee.php" method="get">
<input type="text" name="keyWord">
    <input type="submit" value="Search">
</form>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Avatar</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birth Day Name</th>
        <th>Address</th>
        <th>Job Position</th>
        <th>Group</th>
        <th>Action</th>
    </tr>
    <?php foreach ($employeeManager->getArrayDataEmployee() as $index => $item):  ?>
    <tr>
        <td><?php echo $index+1 ?></td>
        <td><img width="100" height="140" src="upload/<?php echo $item->avatar ?>"></td>
        <td><?php echo $item->firstName ?></td>
        <td><?php echo $item->lastName ?></td>
        <td><?php echo $item->birthDay ?></td>
        <td><?php echo $item->address ?></td>
        <td><?php echo $item->jobPosition ?></td>
        <td><a href="group-employee.php?group=<?php echo $item->group?>"><?php echo $item->group?></a> </td>
        <td><a href="edit-employee.php?index=<?php echo $index ?>">Edit</a> <a onclick="return confirm('Delete ?')" href="delete-employee.php?index=<?php echo $index ?>">Delete</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
