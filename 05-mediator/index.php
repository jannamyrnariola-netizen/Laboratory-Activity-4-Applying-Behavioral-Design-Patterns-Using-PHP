<?php
require_once 'Mediator.php';
require_once 'Student.php';
require_once 'ChatMediator.php';

$chat = new ChatMediator();

$juan  = new Student("Juan", $chat);
$maria = new Student("Maria", $chat);
$pedro = new Student("Pedro", $chat);

$chat->addStudent($juan);
$chat->addStudent($maria);
$chat->addStudent($pedro);

$juan->send("Hello everyone!");

echo PHP_EOL;
$maria->send("Hi Juan! Ready for the exam?");
