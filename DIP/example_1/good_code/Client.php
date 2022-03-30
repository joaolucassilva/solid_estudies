<?php

/**
 * Agora o nosso BudgetReport nao depende concretamente da classe de banco de dados, mas da sua abstracao DatabaseInterface.
 * Essa abordagem tambem segue o princípio aberto-fechado porque para adicionar qualquer novo banco de dados nao precisamos
 * alterar a BudgetReport classe. So precisamos adicionar uma nova classe de banco de dados que implemente o DatabaseInterface.
 *
 */


$mysql = new MySQLDatabase();
$reportMysql = new BudgetReport($mysql);

$reportMysql->open();

$mongo = new MongoDB();
$reportMongo = new BudgetReport($mongo);

$reportMongo->open();