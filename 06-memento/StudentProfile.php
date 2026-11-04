<?php
// The Originator: creates snapshots of itself and can restore from them.
class StudentProfile
{
    private string $name;
    private string $email;
    private string $program;

    public function __construct(string $name, string $email, string $program)
    {
        $this->name = $name;
        $this->email = $email;
        $this->program = $program;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    public function save(): ProfileMemento
    {
        return new ProfileMemento($this->name, $this->email, $this->program);
    }

    public function restore(ProfileMemento $memento): void
    {
        $this->name = $memento->getName();
        $this->email = $memento->getEmail();
        $this->program = $memento->getProgram();
    }

    public function display(): void
    {
        echo $this->name . " | " . $this->email . " | " . $this->program . PHP_EOL;
    }
}
