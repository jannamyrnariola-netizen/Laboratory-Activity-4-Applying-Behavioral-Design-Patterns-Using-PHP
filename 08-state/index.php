<?php
require_once 'EnrollmentState.php';
require_once 'AbstractEnrollmentState.php';
require_once 'PendingState.php';
require_once 'EnrolledState.php';
require_once 'OnLeaveState.php';
require_once 'GraduatedState.php';
require_once 'StudentEnrollment.php';

$juan = new StudentEnrollment("Juan");
$juan->showStatus();

$juan->graduate();    // not allowed: still pending
$juan->enroll();      // Pending  -> Enrolled
$juan->enroll();      // not allowed: already enrolled
$juan->takeLeave();   // Enrolled -> On Leave
$juan->graduate();    // not allowed: on leave
$juan->resume();      // On Leave -> Enrolled
$juan->graduate();    // Enrolled -> Graduated
$juan->takeLeave();   // not allowed: already graduated
