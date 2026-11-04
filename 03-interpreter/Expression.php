<?php
// Every node of the expression tree can be interpreted against a context.
interface Expression
{
    public function interpret(StudentContext $context): bool;
}
