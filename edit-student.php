<?php
include_once "models/Student.php";
include_once "services/StudentManager.php";

$studentManager = new StudentManager();
$id = $_GET["id"];
$student = $studentManager->getStudentById($id);
if (!isset($student)) {
    die("Không tồn tại");
}
?>
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
    <input type="text" id="name" name="name" placeholder="Your name.." value="<?php echo $student->getName();?>"><br>

    <label>Math Score</label><br>
    <input type="text" id="mathScore" name="math" placeholder="Your math score.." value="<?php echo $student->getMath();?>"><br>
    <label>Physic Score</label><br>
    <input type="text" id="physicScore" name="physic" placeholder="Your physic score.." value="<?php echo $student->getPhysic();?>"><br>
    <label>Chemistry Score</label><br>
    <input type="text" id="ChemistryScore" name="chemistry" placeholder="Your chemistry score.." value="<?php echo $student->getChemistry();?>"><br>

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
        "math" => (int)$_REQUEST["math"],
        "physic" => (int)$_REQUEST["physic"],
        "chemistry" => (int)$_REQUEST["chemistry"]
    ];

    $studentManager = new StudentManager();
    $studentManager->update($id,$student);
    header("Location:index.php");
}