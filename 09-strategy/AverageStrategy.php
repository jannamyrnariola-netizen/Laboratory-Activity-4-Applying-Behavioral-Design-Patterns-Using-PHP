<?php
// Simple average of all scores.
class AverageStrategy implements GradingStrategy
{
    public function calculate(array $scores): float
    {
        return array_sum($scores) / count($scores);
    }

    public function getName(): string
    {
        return "Simple Average";
    }
}
