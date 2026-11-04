<?php
class AdviserObserver implements Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $subject, int $grade): void
    {
        $remark = ($grade < 75) ? "needs academic support" : "is on track";
        echo "  Adviser " . $this->name . " notes: student " . $remark . " in " . $subject . PHP_EOL;
    }
}
