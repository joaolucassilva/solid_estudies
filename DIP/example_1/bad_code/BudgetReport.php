<?php

class BudgetReport
{
    public $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function open()
    {
        $this->database->get();
    }

    public function save()
    {
        $this->database->save();
    }
}

