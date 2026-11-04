<?php
class ICTHandler extends Handler
{
    protected function getOfficeName(): string
    {
        return "ICT";
    }

    protected function getSupportedRequests(): array
    {
        return ["Student ID Concern"];
    }
}
