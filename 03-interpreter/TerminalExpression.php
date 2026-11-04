<?php
// Smallest unit: FIELD = "value"
class TerminalExpression implements Expression
{
    private string $field;
    private string $value;

    public function __construct(string $field, string $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function interpret(StudentContext $context): bool
    {
        return strcasecmp($context->get($this->field), $this->value) === 0;
    }
}
