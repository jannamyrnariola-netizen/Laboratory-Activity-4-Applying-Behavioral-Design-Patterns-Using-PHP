<?php
require_once 'GradingStrategy.php';
require_once 'AverageStrategy.php';
require_once 'WeightedStrategy.php';
require_once 'DropLowestStrategy.php';
require_once 'GradeCalculator.php';

$scores = ["quiz" => 85, "project" => 90, "exam" => 78];

echo "Scores: quiz 85, project 90, exam 78" . PHP_EOL . PHP_EOL;

$calculator = new GradeCalculator(new AverageStrategy());

$strategies = [
    new AverageStrategy(),
    new WeightedStrategy(),
    new DropLowestStrategy(),
];

foreach ($strategies as $strategy) {
    $calculator->setStrategy($strategy);     // swap the algorithm at runtime
    $grade = $calculator->compute($scores);
    echo $calculator->getStrategyName() . ": " . number_format($grade, 2) . PHP_EOL;
}
