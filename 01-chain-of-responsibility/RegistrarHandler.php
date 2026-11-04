<?php
class RegistrarHandler extends Handler
{
    protected function getOfficeName(): string
    {
        return "Registrar";
    }

    protected function getSupportedRequests(): array
    {
        return ["Certificate of Enrollment", "Transcript of Records"];
    }
}
