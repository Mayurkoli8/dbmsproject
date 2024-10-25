<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (student_id, date, class, subject, status) VALUES ('$student_id', CURDATE(), '$class', '$subject', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Attendance marked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

