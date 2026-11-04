<?php
// One visit method for each kind of record.
interface StudentVisitor
{
    public function visitUndergraduate(UndergraduateRecord $record): void;
    public function visitGraduate(GraduateRecord $record): void;
}
