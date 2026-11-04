<?php
// Turns a text query into an Expression tree.
// AND is evaluated before OR (same as normal boolean precedence).
class ExpressionParser
{
    public function parse(string $query): Expression
    {
        $orExpression = null;

        foreach (preg_split('/\s+OR\s+/i', trim($query)) as $orPart) {
            $andExpression = null;

            foreach (preg_split('/\s+AND\s+/i', $orPart) as $term) {
                $terminal = $this->parseTerm($term);
                $andExpression = ($andExpression === null)
                    ? $terminal
                    : new AndExpression($andExpression, $terminal);
            }

            $orExpression = ($orExpression === null)
                ? $andExpression
                : new OrExpression($orExpression, $andExpression);
        }

        return $orExpression;
    }

    private function parseTerm(string $term): TerminalExpression
    {
        // matches:  PROGRAM = "BSIT"   or   YEAR = 4
        if (!preg_match('/^\s*(\w+)\s*=\s*"?([^"]*?)"?\s*$/', $term, $m)) {
            throw new InvalidArgumentException("Invalid expression: " . $term);
        }
        return new TerminalExpression($m[1], $m[2]);
    }
}
