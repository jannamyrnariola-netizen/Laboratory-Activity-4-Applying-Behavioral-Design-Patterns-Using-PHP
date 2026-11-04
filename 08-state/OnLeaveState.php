<?php
class OnLeaveState extends AbstractEnrollmentState
{
    public function resume(StudentEnrollment $context): void
    {
        echo "  Welcome back! Classes resumed." . PHP_EOL;
        $context->setState(new EnrolledState());
    }

    public function getName(): string
    {
        return "On Leave";
    }
}
