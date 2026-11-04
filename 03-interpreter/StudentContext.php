<?php
// The data being searched: one student's fields (PROGRAM, YEAR, NAME...).
class StudentContext
{
    private array $data;

    public function __construct(array $data)
    {
        // store keys in uppercase so PROGRAM, program, Program all work
        $this->data = array_change_key_case($data, CASE_UPPER);
    }

    public function get(string $field): string
    {
        return (string)($this->data[strtoupper($field)] ?? "");
    }
}
