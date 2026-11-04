<?php
// Every grading method follows this contract.
interface GradingStrategy
{
    public function calculate(array $scores): float;
    public function getName(): string;
}
