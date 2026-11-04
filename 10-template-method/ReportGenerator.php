<?php
// The Template: generate() fixes the ORDER of the steps.
// Subclasses fill in the steps that differ.
abstract class ReportGenerator
{
    final public function generate(): void
    {
        $this->printHeader();
        $this->printBody();
        if ($this->includeSignature()) {
            $this->printSignature();
        }
        $this->printFooter();
    }

    // Same for every report
    private function printHeader(): void
    {
        echo "==============================" . PHP_EOL;
        echo $this->getTitle() . PHP_EOL;
        echo "==============================" . PHP_EOL;
    }

    private function printSignature(): void
    {
        echo PHP_EOL . "Registrar: ____________________" . PHP_EOL;
    }

    private function printFooter(): void
    {
        echo "------------------------------" . PHP_EOL;
        echo "End of report" . PHP_EOL . PHP_EOL;
    }

    // Different for every report
    abstract protected function getTitle(): string;
    abstract protected function printBody(): void;

    // Hook: optional step, off by default
    protected function includeSignature(): bool
    {
        return false;
    }
}
