<?php
// Custom collection. The array is PRIVATE, so the client can only
// access students through the iterator.
class StudentCollection implements IteratorAggregate
{
    private array $students = [];

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function getIterator(): StudentIterator
    {
        return new StudentIterator($this->students);
    }
}
