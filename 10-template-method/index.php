<?php
require_once 'ReportGenerator.php';
require_once 'GradeReport.php';
require_once 'EnrollmentReport.php';

$reports = [
    new GradeReport("Juan", ["Programming 1" => 92, "Database Systems" => 85, "Web Development" => 88]),
    new EnrollmentReport("Juan", "BSIT", ["Programming 1", "Database Systems", "Web Development"]),
];

foreach ($reports as $report) {
    $report->generate();     // same steps, different content
}
