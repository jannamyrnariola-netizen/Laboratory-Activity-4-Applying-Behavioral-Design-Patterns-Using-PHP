<?php
// Custom iterator: walks through the students one at a time.
class StudentIterator implements Iterator
{
    private array $students;
    private int $position = 0;

    public function __construct(array $students)
    {
        $this->students = array_values($students);
    }

    public function current(): Student
    {
        return $this->students[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return isset($this->students[$this->position]);
    }
}
