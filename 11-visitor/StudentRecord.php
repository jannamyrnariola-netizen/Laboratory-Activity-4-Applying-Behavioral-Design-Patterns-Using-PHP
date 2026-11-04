<?php
// Every record accepts a visitor.
interface StudentRecord
{
    public function accept(StudentVisitor $visitor): void;
}
