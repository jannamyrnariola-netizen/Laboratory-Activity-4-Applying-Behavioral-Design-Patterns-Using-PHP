<?php
require_once 'Student.php';
require_once 'StudentIterator.php';
require_once 'StudentCollection.php';

$students = new StudentCollection();
$students->add(new Student("2026-001", "Juan"));
$students->add(new Student("2026-002", "Maria"));
$students->add(new Student("2026-003", "Pedro"));

// Way 1: foreach (works because the collection is an IteratorAggregate)
echo "Student List" . PHP_EOL;
foreach ($students as $student) {
    echo $student->getId() . " - " . $student->getName() . PHP_EOL;
}

// Way 2: manual iteration, to show how the iterator works internally
echo PHP_EOL . "Manual iteration:" . PHP_EOL;
$iterator = $students->getIterator();
for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
    echo ($iterator->key() + 1) . ". " . $iterator->current()->getName() . PHP_EOL;
}
