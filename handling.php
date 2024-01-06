<?php
try {
    // Division by zero
    $numerator = 20;
    $denominator = 2;

    if ($denominator === 0) {
        throw new Exception("Division by zero error");
    }
    $result = $numerator / $denominator;
    echo "Result of division: " . $result . "<br>";

    // Checking date format
    $dateString = '2024-02-29';
    $dateFormat = 'Y-m-d';

    $date = DateTime::createFromFormat($dateFormat, $dateString);

    if (!$date || $date->format($dateFormat) !== $dateString) {
        throw new Exception("Invalid date format");
    }
    echo "Date is valid: " . $dateString;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
