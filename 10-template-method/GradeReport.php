<?php
class GradeReport extends ReportGenerator
{
    private string $studentName;
    private array $grades;

    public function __construct(string $studentName, array $grades)
    {
        $this->studentName = $studentName;
        $this->grades = $grades;
    }

    protected function getTitle(): string
    {
        return "GRADE REPORT";
    }

    protected function printBody(): void
    {
        echo "Student: " . $this->studentName . PHP_EOL;
        foreach ($this->grades as $subject => $grade) {
            echo " - " . $subject . ": " . $grade . PHP_EOL;
        }
        echo "Average: " . number_format(array_sum($this->grades) / count($this->grades), 2) . PHP_EOL;
    }

    // Override the hook: grade reports need a signature line
    protected function includeSignature(): bool
    {
        return true;
    }
}
