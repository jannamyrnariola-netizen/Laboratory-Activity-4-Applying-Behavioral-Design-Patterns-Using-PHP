<?php
require_once 'ProfileMemento.php';
require_once 'StudentProfile.php';
require_once 'ProfileHistory.php';

$profile = new StudentProfile("Juan Dela Cruz", "juan@school.edu", "BSIT");
$history = new ProfileHistory();

echo "Original profile:" . PHP_EOL;
$profile->display();

$history->push($profile->save());              // save BEFORE changing
$profile->setEmail("juan.new@school.edu");
echo PHP_EOL . "After changing email:" . PHP_EOL;
$profile->display();

$history->push($profile->save());              // save BEFORE changing
$profile->setProgram("BSCS");
echo PHP_EOL . "After changing program:" . PHP_EOL;
$profile->display();

for ($i = 1; $i <= 3; $i++) {
    echo PHP_EOL . "Undo #" . $i . ":" . PHP_EOL;
    $memento = $history->pop();
    if ($memento === null) {
        echo "Nothing to undo." . PHP_EOL;
    } else {
        $profile->restore($memento);
        $profile->display();
    }
}
