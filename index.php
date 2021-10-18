<?php
include_once "models/Student.php";
include_once "services/StudentManager.php";

$studentManager = new StudentManager();

$students = $studentManager->getAllStudents();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach hoc sinh</title>
</head>
<body>
<a href="creat-student.php"><button>AddStudent</button></a>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Math Score</th>
        <th>Physic Score</th>
        <th>Chemistry Score</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key => $student): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><?php echo $student->getMath() ?></td>
            <td><?php echo $student->getPhysic() ?></td>
            <td><?php echo $student->getChemistry() ?></td>
            <td><a href="detail-student.php?id=<?php echo $key ?>">Detail</a>
            <td><a href="edit-student.php?id=<?php echo $key ?>">Edit</a>
            <td><a onclick="return confirm('Are you sure ?')" href="delete-student.php?id=<?php echo $key ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
