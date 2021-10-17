<?php
include_once "models/Student.php";
include_once "services/StudentManager.php";


$studentManager = new StudentManager();
$id = $_GET["id"];
$student = $studentManager->getStudentById($id);
if (!isset($student)){
    die("khong ton tai");
}
echo "diem trung binh cua hoc sinh";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form the</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }
</style>
<body>
<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
    <img src="lappdumb.jpg" alt="John" style="width:100%">
    <h1><?php echo $student->getName() ?></h1>
    <p><?php echo $student->getAvg() ?></p>
    </p>
    <a href="index.php">
        <button>Back</button>
    </a>

</div>

</body>
</html>
