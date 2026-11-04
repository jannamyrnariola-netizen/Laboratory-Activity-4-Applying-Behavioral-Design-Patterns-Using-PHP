<?php
// Throws away the lowest score, then averages the rest.
class DropLowestStrategy implements GradingStrategy
{
    public function calculate(array $scores): float
    {
        $values = array_values($scores);
        if (count($values) > 1) {
            sort($values);          // lowest first
            array_shift($values);   // remove the lowest
        }
        return array_sum($values) / count($values);
    }

    public function getName(): string
    {
        return "Drop Lowest Score";
    }
}
