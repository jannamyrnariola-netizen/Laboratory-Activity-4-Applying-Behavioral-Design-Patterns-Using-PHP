<?php
// The Subject: when a grade is posted, every attached observer is told.
class GradeBook implements Subject
{
    private array $observers = [];
    private string $subjectName = "";
    private int $grade = 0;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_values(
            array_filter($this->observers, fn($o) => $o !== $observer)
        );
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->subjectName, $this->grade);
        }
    }

    public function postGrade(string $subjectName, int $grade): void
    {
        $this->subjectName = $subjectName;
        $this->grade = $grade;
        echo "Grade posted: " . $subjectName . " = " . $grade . PHP_EOL;
        $this->notify();
    }
}
