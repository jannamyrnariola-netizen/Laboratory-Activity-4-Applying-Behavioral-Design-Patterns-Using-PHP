<?php
// INVOKER: runs commands and remembers undoable ones in a history stack.
class CommandInvoker
{
    private array $history = [];

    public function run(Command $command): void
    {
        echo "Executing: " . $command->getName() . PHP_EOL;
        $command->execute();

        if ($command instanceof UndoableCommand) {
            $this->history[] = $command;   // push onto the stack
        }
        echo PHP_EOL;
    }

    public function undo(): void
    {
        echo "Executing: Undo" . PHP_EOL;

        if (empty($this->history)) {
            echo "Nothing to undo." . PHP_EOL . PHP_EOL;
            return;
        }

        $command = array_pop($this->history);   // take the most recent
        echo "Undoing: " . $command->getName() . PHP_EOL;
        $command->undo();
        echo PHP_EOL;
    }
}
