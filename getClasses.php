<?php
require 'db.php';

// Ambil data kelas dari database
$query = "SELECT * FROM classes";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $classes = array();
    while ($row = $result->fetch_assoc()) {
        $classes[] = $row;
    }
    echo json_encode($classes);
} else {
    echo json_encode(array('message' => 'Tidak ada kelas yang tersedia'));
}

$conn->close();
?>
