<?php
class DropSubjectCommand implements UndoableCommand
{
    private StudentSystem $system;
    private string $subject;

    public function __construct(StudentSystem $system, string $subject)
    {
        $this->system = $system;
        $this->subject = $subject;
    }

    public function execute(): void
    {
        $this->system->dropSubject($this->subject);
    }

    public function undo(): void
    {
        $this->system->restoreSubject($this->subject);
    }

    public function getName(): string
    {
        return "Drop Subject";
    }
}
