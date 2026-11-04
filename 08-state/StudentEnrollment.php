<?php
// The Context: holds the current state and passes every action to it.
class StudentEnrollment
{
    private string $studentName;
    private EnrollmentState $state;

    public function __construct(string $studentName)
    {
        $this->studentName = $studentName;
        $this->state = new PendingState();
    }

    public function setState(EnrollmentState $state): void
    {
        $this->state = $state;
    }

    public function showStatus(): void
    {
        echo $this->studentName . " status: " . $this->state->getName() . PHP_EOL . PHP_EOL;
    }

    public function enroll(): void
    {
        echo "Action: enroll" . PHP_EOL;
        $this->state->enroll($this);
        $this->showStatus();
    }

    public function takeLeave(): void
    {
        echo "Action: take a leave" . PHP_EOL;
        $this->state->takeLeave($this);
        $this->showStatus();
    }

    public function resume(): void
    {
        echo "Action: resume classes" . PHP_EOL;
        $this->state->resume($this);
        $this->showStatus();
    }

    public function graduate(): void
    {
        echo "Action: graduate" . PHP_EOL;
        $this->state->graduate($this);
        $this->showStatus();
    }
}
