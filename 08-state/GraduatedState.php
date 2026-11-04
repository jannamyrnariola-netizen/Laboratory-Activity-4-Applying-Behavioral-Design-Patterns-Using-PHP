<?php
// Final state: all actions use the default "not allowed" behavior.
class GraduatedState extends AbstractEnrollmentState
{
    public function getName(): string
    {
        return "Graduated";
    }
}
