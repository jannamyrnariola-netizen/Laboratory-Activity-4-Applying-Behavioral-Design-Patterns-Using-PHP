<?php
class EnrollmentReport extends ReportGenerator
{
    private string $studentName;
    private string $program;
    private array $subjects;

    public function __construct(string $studentName, string $program, array $subjects)
    {
        $this->studentName = $studentName;
        $this->program = $program;
        $this->subjects = $subjects;
    }

    protected function getTitle(): string
    {
        return "ENROLLMENT REPORT";
    }

    protected function printBody(): void
    {
        echo "Student: " . $this->studentName . PHP_EOL;
        echo "Program: " . $this->program . PHP_EOL;
        echo "Enrolled subjects:" . PHP_EOL;
        foreach ($this->subjects as $subject) {
            echo " - " . $subject . PHP_EOL;
        }
    }
    // The hook is not overridden, so no signature line is printed.
}
