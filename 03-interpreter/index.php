<?php
require_once 'Expression.php';
require_once 'StudentContext.php';
require_once 'TerminalExpression.php';
require_once 'AndExpression.php';
require_once 'OrExpression.php';
require_once 'ExpressionParser.php';

$parser = new ExpressionParser();

// ---- Part 1: evaluate expressions against ONE student ----
$juan = new StudentContext(["NAME" => "Juan", "PROGRAM" => "BSIT", "YEAR" => 4]);

$queries = [
    'PROGRAM = "BSIT"',
    'YEAR = 4',
    'PROGRAM = "BSIT" AND YEAR = 4',
    'PROGRAM = "BSIT" AND YEAR = 2',
    'PROGRAM = "BSIT" OR PROGRAM = "BSCS"',   // challenge
];

echo "Student: Juan (BSIT, Year 4)" . PHP_EOL . PHP_EOL;
foreach ($queries as $query) {
    $result = $parser->parse($query)->interpret($juan);
    echo "Expression:" . PHP_EOL;
    echo $query . PHP_EOL;
    echo "Result: " . ($result ? "TRUE" : "FALSE") . PHP_EOL . PHP_EOL;
}

// ---- Part 2: search a list of students ----
$students = [
    new StudentContext(["NAME" => "Juan",  "PROGRAM" => "BSIT", "YEAR" => 4]),
    new StudentContext(["NAME" => "Maria", "PROGRAM" => "BSCS", "YEAR" => 2]),
    new StudentContext(["NAME" => "Pedro", "PROGRAM" => "BSIT", "YEAR" => 2]),
];

$search = 'PROGRAM = "BSIT" AND YEAR = 2';
echo "Search: " . $search . PHP_EOL;
$expression = $parser->parse($search);
foreach ($students as $student) {
    if ($expression->interpret($student)) {
        echo " - " . $student->get("NAME") . PHP_EOL;
    }
}
