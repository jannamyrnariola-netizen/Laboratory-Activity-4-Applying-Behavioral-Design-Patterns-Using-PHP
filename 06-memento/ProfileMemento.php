<?php
// The Memento: a read-only snapshot of a profile.
class ProfileMemento
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getProgram(): string
    {
        return $this->program;
    }
}
