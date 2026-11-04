<?php
// RECEIVER: the class that actually does the work.
class StudentSystem
{
    private bool $enrolled = false;
    private array $subjects = [];

    public function enrollStudent(array $subjects): void
    {
        $this->enrolled = true;
        $this->subjects = $subjects;
        echo "Student successfully enrolled." . PHP_EOL;
    }

    public function cancelEnrollment(): void
    {
        $this->enrolled = false;
        $this->subjects = [];
        echo "Enrollment cancelled." . PHP_EOL;
    }

    public function dropSubject(string $subject): void
    {
        $key = array_search($subject, $this->subjects, true);
        if ($key === false) {
            echo "Subject not found." . PHP_EOL;
            return;
        }
        unset($this->subjects[$key]);
        $this->subjects = array_values($this->subjects);
        echo "Subject successfully dropped." . PHP_EOL;
    }

    public function restoreSubject(string $subject): void
    {
        $this->subjects[] = $subject;
        echo "Subject restored." . PHP_EOL;
    }

    public function printRegistration(): void
    {
        echo "--- Registration ---" . PHP_EOL;
        echo "Status: " . ($this->enrolled ? "Enrolled" : "Not enrolled") . PHP_EOL;
        foreach ($this->subjects as $subject) {
            echo " - " . $subject . PHP_EOL;
        }
        echo "--------------------" . PHP_EOL;
    }

    public function logout(): void
    {
        echo "Student logged out." . PHP_EOL;
    }
}
