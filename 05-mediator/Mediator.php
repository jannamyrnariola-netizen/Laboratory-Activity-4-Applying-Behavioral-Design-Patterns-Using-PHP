<?php
// Contract for the go-between: students only know this interface.
interface Mediator
{
    public function addStudent(Student $student): void;
    public function sendMessage(string $message, Student $sender): void;
}
