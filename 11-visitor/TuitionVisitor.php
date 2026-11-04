<?php
// Operation 1: compute tuition. Each record type has its own formula.
class TuitionVisitor implements StudentVisitor
{
    private int $total = 0;

    public function visitUndergraduate(UndergraduateRecord $record): void
    {
        $fee = $record->getUnits() * 800;
        $this->total += $fee;
        echo $record->getName() . " (Undergraduate): " . $record->getUnits() . " units x 800 = " . number_format($fee) . PHP_EOL;
    }

    public function visitGraduate(GraduateRecord $record): void
    {
        $fee = ($record->getUnits() * 1500) + 3000;   // 3,000 research fee
        $this->total += $fee;
        echo $record->getName() . " (Graduate): " . $record->getUnits() . " units x 1,500 + 3,000 research fee = " . number_format($fee) . PHP_EOL;
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}
