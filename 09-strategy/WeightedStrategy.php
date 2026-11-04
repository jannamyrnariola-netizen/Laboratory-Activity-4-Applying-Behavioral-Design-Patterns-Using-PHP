<?php
// Each score type counts for a different percentage.
class WeightedStrategy implements GradingStrategy
{
    private array $weights = [
        "quiz"    => 0.20,
        "project" => 0.30,
        "exam"    => 0.50,
    ];

    public function calculate(array $scores): float
    {
        $total = 0.0;
        foreach ($this->weights as $type => $weight) {
            $total += ($scores[$type] ?? 0) * $weight;
        }
        return $total;
    }

    public function getName(): string
    {
        return "Weighted (quiz 20%, project 30%, exam 50%)";
    }
}
