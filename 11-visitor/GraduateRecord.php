<?php
class GraduateRecord implements StudentRecord
{
    private string $name;
    private int $units;
    private string $thesisTitle;

    public function __construct(string $name, int $units, string $thesisTitle)
    {
        $this->name = $name;
        $this->units = $units;
        $this->thesisTitle = $thesisTitle;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUnits(): int
    {
        return $this->units;
    }

    public function getThesisTitle(): string
    {
        return $this->thesisTitle;
    }

    public function accept(StudentVisitor $visitor): void
    {
        $visitor->visitGraduate($this);        // tells the visitor which type this is
    }
}
