<?php
require_once 'StudentRequest.php';
require_once 'Handler.php';
require_once 'StudentAffairsHandler.php';
require_once 'RegistrarHandler.php';
require_once 'FinanceHandler.php';
require_once 'ICTHandler.php';

// 1. Create the handlers
$studentAffairs = new StudentAffairsHandler();
$registrar      = new RegistrarHandler();
$finance        = new FinanceHandler();
$ict            = new ICTHandler();

// 2. Build the chain: Student Affairs -> Registrar -> Finance -> ICT
$studentAffairs->setNext($registrar)->setNext($finance)->setNext($ict);

// 3. Send requests to the FIRST handler only
$requests = [
    "Transcript of Records",
    "Certificate of Enrollment",
    "Good Moral Certificate",
    "Student ID Concern",
    "Tuition Balance Inquiry",
    "Library Clearance",        // nobody handles this one
];

foreach ($requests as $type) {
    echo "Request: " . $type . PHP_EOL;
    $studentAffairs->handle(new StudentRequest($type));
    echo PHP_EOL;
}
