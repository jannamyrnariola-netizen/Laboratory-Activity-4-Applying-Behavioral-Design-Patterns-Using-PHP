<?php
// The Caretaker: keeps the snapshots in a stack but never looks inside them.
class ProfileHistory
{
    private array $mementos = [];

    public function push(ProfileMemento $memento): void
    {
        $this->mementos[] = $memento;
    }

    public function pop(): ?ProfileMemento
    {
        if (empty($this->mementos)) {
            return null;
        }
        return array_pop($this->mementos);
    }
}
