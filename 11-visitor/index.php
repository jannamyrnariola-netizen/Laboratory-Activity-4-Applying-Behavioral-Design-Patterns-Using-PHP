<?php
require_once 'StudentVisitor.php';
require_once 'StudentRecord.php';
require_once 'UndergraduateRecord.php';
require_once 'GraduateRecord.php';
require_once 'TuitionVisitor.php';
require_once 'PrintVisitor.php';

$records = [
    new UndergraduateRecord("Juan", 21),
    new GraduateRecord("Maria", 9, "Machine Learning in Education"),
    new UndergraduateRecord("Pedro", 18),
];

echo "Operation 1: Print records" . PHP_EOL;
$printer = new PrintVisitor();
foreach ($records as $record) {
    $record->accept($printer);
}

echo PHP_EOL . "Operation 2: Compute tuition" . PHP_EOL;
$tuition = new TuitionVisitor();
foreach ($records as $record) {
    $record->accept($tuition);
}
echo "Total tuition: " . number_format($tuition->getTotal()) . PHP_EOL;
