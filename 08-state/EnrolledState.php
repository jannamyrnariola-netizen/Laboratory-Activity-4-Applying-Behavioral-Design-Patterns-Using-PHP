<?php
class EnrolledState extends AbstractEnrollmentState
{
    public function takeLeave(StudentEnrollment $context): void
    {
        echo "  Leave of absence approved." . PHP_EOL;
        $context->setState(new OnLeaveState());
    }

    public function graduate(StudentEnrollment $context): void
    {
        echo "  Congratulations on graduating!" . PHP_EOL;
        $context->setState(new GraduatedState());
    }

    public function getName(): string
    {
        return "Enrolled";
    }
}
