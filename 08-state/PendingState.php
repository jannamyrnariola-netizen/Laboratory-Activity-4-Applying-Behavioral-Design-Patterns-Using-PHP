<?php
class PendingState extends AbstractEnrollmentState
{
    public function enroll(StudentEnrollment $context): void
    {
        echo "  Enrollment approved." . PHP_EOL;
        $context->setState(new EnrolledState());
    }

    public function getName(): string
    {
        return "Pending";
    }
}
