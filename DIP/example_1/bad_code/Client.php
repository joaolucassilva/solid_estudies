<?php

$database = new MySQLDatabase();
$report = new BudgetReport($database);

$report->open();