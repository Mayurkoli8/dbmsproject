<?php
include 'db.php';

$sql = "SELECT students.name, attendance.date, attendance.class, attendance.subject, attendance.status 
        FROM attendance 
        JOIN students ON attendance.student_id = students.student_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Date</th><th>Class</th><th>Subject</th><th>Status</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['date'] . "</td><td>" . $row['class'] . "</td><td>" . $row['subject'] . "</td><td>" . $row['status'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found!";
}
?>

