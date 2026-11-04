<?php
require_once 'Command.php';
require_once 'UndoableCommand.php';
require_once 'StudentSystem.php';
require_once 'EnrollCommand.php';
require_once 'DropSubjectCommand.php';
require_once 'PrintRegistrationCommand.php';
require_once 'LogoutCommand.php';
require_once 'CommandInvoker.php';

$system  = new StudentSystem();      // receiver
$invoker = new CommandInvoker();     // invoker

$subjects = ["Programming 1", "Database Systems", "Web Development"];

$invoker->run(new EnrollCommand($system, $subjects));
$invoker->run(new DropSubjectCommand($system, "Database Systems"));
$invoker->undo();                                  // challenge: undo the drop
$invoker->run(new PrintRegistrationCommand($system));
$invoker->run(new LogoutCommand($system));
