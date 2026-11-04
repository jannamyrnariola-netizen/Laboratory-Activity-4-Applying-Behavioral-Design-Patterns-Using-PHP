<?php
class LogoutCommand implements Command
{
    private StudentSystem $system;

    public function __construct(StudentSystem $system)
    {
        $this->system = $system;
    }

    public function execute(): void
    {
        $this->system->logout();
    }

    public function getName(): string
    {
        return "Logout";
    }
}
