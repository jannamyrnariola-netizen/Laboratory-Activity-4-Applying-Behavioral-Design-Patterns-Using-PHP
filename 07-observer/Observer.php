<?php
// Anyone who wants to be notified must follow this contract.
interface Observer
{
    public function update(string $subject, int $grade): void;
}
