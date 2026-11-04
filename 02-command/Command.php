<?php
// Every command can be executed and has a display name.
interface Command
{
    public function execute(): void;
    public function getName(): string;
}
