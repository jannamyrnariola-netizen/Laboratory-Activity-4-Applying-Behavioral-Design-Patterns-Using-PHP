<?php
class StudentObserver implements Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $subject, int $grade): void
    {
        echo "  Student " . $this->name . " sees: " . $subject . " grade is " . $grade . PHP_EOL;
    }
}
