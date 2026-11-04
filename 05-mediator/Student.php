<?php
// A colleague: it only knows the Mediator, never the other students.
class Student
{
    private string $name;
    private Mediator $mediator;

    public function __construct(string $name, Mediator $mediator)
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function send(string $message): void
    {
        echo $this->name . ": " . $message . PHP_EOL;
        $this->mediator->sendMessage($message, $this);
    }

    public function receive(string $message, Student $from): void
    {
        echo $this->name . " receives:" . PHP_EOL;
        echo $from->getName() . ": " . $message . PHP_EOL;
    }
}
