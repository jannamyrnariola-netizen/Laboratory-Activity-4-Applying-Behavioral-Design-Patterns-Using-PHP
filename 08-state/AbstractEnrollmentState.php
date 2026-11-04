<?php
// Default behavior: every action is NOT allowed.
// Each real state overrides only the actions it allows.
abstract class AbstractEnrollmentState implements EnrollmentState
{
    public function enroll(StudentEnrollment $context): void
    {
        $this->deny("enroll");
    }

    public function takeLeave(StudentEnrollment $context): void
    {
        $this->deny("take a leave");
    }

    public function resume(StudentEnrollment $context): void
    {
        $this->deny("resume classes");
    }

    public function graduate(StudentEnrollment $context): void
    {
        $this->deny("graduate");
    }

    private function deny(string $action): void
    {
        echo "  Not allowed: cannot " . $action . " while status is " . $this->getName() . "." . PHP_EOL;
    }
}
