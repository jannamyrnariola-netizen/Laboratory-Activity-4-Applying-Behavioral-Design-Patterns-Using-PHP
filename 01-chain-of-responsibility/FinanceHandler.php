<?php
class FinanceHandler extends Handler
{
    protected function getOfficeName(): string
    {
        return "Finance";
    }

    protected function getSupportedRequests(): array
    {
        return ["Tuition Balance Inquiry"];
    }
}
