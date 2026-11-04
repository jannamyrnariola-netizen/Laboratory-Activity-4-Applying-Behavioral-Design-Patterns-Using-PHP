<?php
// Every status must know how to react to each action.
interface EnrollmentState
{
    public function enroll(StudentEnrollment $context): void;
    public function takeLeave(StudentEnrollment $context): void;
    public function resume(StudentEnrollment $context): void;
    public function graduate(StudentEnrollment $context): void;
    public function getName(): string;
}
