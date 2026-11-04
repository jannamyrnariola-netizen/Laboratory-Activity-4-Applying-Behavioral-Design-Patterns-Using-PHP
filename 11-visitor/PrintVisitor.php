<?php
// Operation 2: print each record. Added without touching the record classes.
class PrintVisitor implements StudentVisitor
{
    public function visitUndergraduate(UndergraduateRecord $record): void
    {
        echo "[Undergraduate] " . $record->getName() . " - " . $record->getUnits() . " units" . PHP_EOL;
    }

    public function visitGraduate(GraduateRecord $record): void
    {
        echo "[Graduate] " . $record->getName() . " - " . $record->getUnits() . " units - Thesis: " . $record->getThesisTitle() . PHP_EOL;
    }
}
