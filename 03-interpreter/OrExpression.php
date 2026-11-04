<?php
// TRUE if EITHER side is TRUE.
class OrExpression implements Expression
{
    private Expression $left;
    private Expression $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(StudentContext $context): bool
    {
        return $this->left->interpret($context) || $this->right->interpret($context);
    }
}
