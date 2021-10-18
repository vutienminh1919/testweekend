<?php
include_once "./models/Student.php";
class StudentManager
{

    private array $students;
    private string $path = __DIR__ . "/student.json";

    public function __construct()
    {
        $this->students = $this->load();
    }

    public function getAllStudents():array
    {
       return $this->students;
    }

    public function storeStudents($student)
    {
        array_push($this->students, $student);
        $this->save();
    }

    public function update($id,$data)
    {
        $this->students[$id] = $data;
        $this->save();
    }

    public function getStudentById($id)
    {
        return $this->students[$id];
    }

    public function deleteStudentId($id)
    {
        array_splice($this->students,$id,1);
        $this->save();
    }

    public function save()
    {
        $dataJson = json_encode($this->students);
        file_put_contents($this->path,$dataJson);
    }

    public function load():array
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson,true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data): array
    {
        $students = [];
        foreach ($data as $e) {
            $student = new Student($e["name"], $e["math"], $e["physic"], $e["chemistry"]);
            $students[] = $student; /// array_push
        }
        return $students;
    }


}