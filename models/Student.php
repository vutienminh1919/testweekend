<?php

class Student
{
    public string $name;
    public int $math;
    public int $physic;
    public int $chemistry;
    public float $avg;

    /**
     * @param string $name
     * @param int $math
     * @param int $physic
     * @param int $chemistry
     */
    public function __construct(string $name, int $math, int $physic, int $chemistry)
    {
        $this->name = $name;
        $this->math = $math;
        $this->physic = $physic;
        $this->chemistry = $chemistry;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMath(): int
    {
        return $this->math;
    }

    /**
     * @param int $math
     */
    public function setMath(int $math): void
    {
        $this->math = $math;
    }

    /**
     * @return int
     */
    public function getPhysic(): int
    {
        return $this->physic;
    }

    /**
     * @param int $physic
     */
    public function setPhysic(int $physic): void
    {
        $this->physic = $physic;
    }

    /**
     * @return int
     */
    public function getChemistry(): int
    {
        return $this->chemistry;
    }

    /**
     * @param int $chemistry
     */
    public function setChemistry(int $chemistry): void
    {
        $this->chemistry = $chemistry;
    }

    public function getAvg()
    {
        return ($this->math + $this->physic + $this->chemistry) / 3;
    }


}