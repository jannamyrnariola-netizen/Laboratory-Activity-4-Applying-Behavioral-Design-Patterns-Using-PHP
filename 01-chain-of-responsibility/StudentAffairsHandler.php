<?php
class StudentAffairsHandler extends Handler
{
    protected function getOfficeName(): string
    {
        return "Student Affairs";
    }

    protected function getSupportedRequests(): array
    {
        return ["Good Moral Certificate"];
    }
}
