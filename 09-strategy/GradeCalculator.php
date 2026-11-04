<?php
// The Context: uses whichever strategy it is given.
class GradeCalculator
{
    private GradingStrategy $strategy;

    public function __construct(GradingStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(GradingStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function compute(array $scores): float
    {
        return $this->strategy->calculate($scores);
    }

    public function getStrategyName(): string
    {
        return $this->strategy->getName();
    }
}
