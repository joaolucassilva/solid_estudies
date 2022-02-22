<?php

class CourseProblem
{
    private $name;
    private $categoria;
    private $descricao;


    public function connection()
    {
        $pdo = new PDO();
        return $pdo;
    }

    public function createCategory()
    {
        $this->connection()->insert($this->categoria);
    }

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }

    public function getName()
    {
        return $this->name;
    }
}