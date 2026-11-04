<?php
class ParentObserver implements Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $subject, int $grade): void
    {
        echo "  Parent " . $this->name . " is notified by SMS: " . $subject . " = " . $grade . PHP_EOL;
    }
}
