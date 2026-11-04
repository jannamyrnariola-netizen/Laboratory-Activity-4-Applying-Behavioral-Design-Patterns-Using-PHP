<?php
// Printing cannot be "undone", so this only implements Command.
class PrintRegistrationCommand implements Command
{
    private StudentSystem $system;

    public function __construct(StudentSystem $system)
    {
        $this->system = $system;
    }

    public function execute(): void
    {
        $this->system->printRegistration();
    }

    public function getName(): string
    {
        return "Print Registration";
    }
}
