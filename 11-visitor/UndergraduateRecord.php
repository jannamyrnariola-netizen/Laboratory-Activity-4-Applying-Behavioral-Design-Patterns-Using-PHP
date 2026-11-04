<?php
class UndergraduateRecord implements StudentRecord
{
    private string $name;
    private int $units;

    public function __construct(string $name, int $units)
    {
        $this->name = $name;
        $this->units = $units;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUnits(): int
    {
        return $this->units;
    }

    public function accept(StudentVisitor $visitor): void
    {
        $visitor->visitUndergraduate($this);   // tells the visitor which type this is
    }
}
