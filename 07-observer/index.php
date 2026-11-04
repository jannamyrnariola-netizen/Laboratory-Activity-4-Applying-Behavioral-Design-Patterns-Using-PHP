<?php
require_once 'Observer.php';
require_once 'Subject.php';
require_once 'GradeBook.php';
require_once 'StudentObserver.php';
require_once 'ParentObserver.php';
require_once 'AdviserObserver.php';

$gradeBook = new GradeBook();

$student = new StudentObserver("Juan");
$parent  = new ParentObserver("Mrs. Dela Cruz");
$adviser = new AdviserObserver("Prof. Reyes");

$gradeBook->attach($student);
$gradeBook->attach($parent);
$gradeBook->attach($adviser);

$gradeBook->postGrade("Programming 1", 92);

echo PHP_EOL . "(Parent unsubscribes)" . PHP_EOL . PHP_EOL;
$gradeBook->detach($parent);

$gradeBook->postGrade("Database Systems", 70);
