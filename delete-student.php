<?php
include_once "models/Student.php";
include_once "services/StudentManager.php";

$studentManager = new StudentManager();
$id = $_GET["id"];
$studentManager->deleteStudentId($id);
header("Location:index.php");
