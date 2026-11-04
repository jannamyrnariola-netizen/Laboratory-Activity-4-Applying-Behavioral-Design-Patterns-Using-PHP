<?php
// Only commands that can be reversed implement this interface.
interface UndoableCommand extends Command
{
    public function undo(): void;
}
