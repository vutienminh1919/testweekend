<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your name.."><br>

    <label>Math Score</label><br>
    <input type="text" id="mathScore" name="math" placeholder="Your math score.."><br>
    <label>Physic Score</label><br>
    <input type="text" id="physicScore" name="physic" placeholder="Your physic score.."><br>
    <label>Chemistry Score</label><br>
    <input type="text" id="ChemistryScore" name="chemistry" placeholder="Your chemistry score.."><br>

    <input type="submit" value="Submit">
    <a href="index.php">Back</a>
</form>

</body>
</html>
<?php
include_once "models/Student.php";
include_once "services/StudentManager.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = [
        "name" => $_REQUEST["name"],
        "math" => $_REQUEST["math"],
        "physic" => $_REQUEST["physic"],
        "chemistry" => $_REQUEST["chemistry"]
    ];

    $studentManager = new StudentManager();
    $studentManager->storeStudents($student);
    header("Location:index.php");
}