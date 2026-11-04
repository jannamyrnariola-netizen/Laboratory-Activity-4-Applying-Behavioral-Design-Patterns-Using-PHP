<?php
class EnrollCommand implements UndoableCommand
{
    private StudentSystem $system;
    private array $subjects;

    public function __construct(StudentSystem $system, array $subjects)
    {
        $this->system = $system;
        $this->subjects = $subjects;
    }

    public function execute(): void
    {
        $this->system->enrollStudent($this->subjects);
    }

    public function undo(): void
    {
        $this->system->cancelEnrollment();
    }

    public function getName(): string
    {
        return "Enroll Student";
    }
}
