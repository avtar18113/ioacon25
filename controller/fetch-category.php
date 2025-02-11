<?php
// Your database connection code
// Fetch distinct topics from database
include('../db.php');
$category = array();
// Assuming $conn is your database connection object
$query = "SELECT DISTINCT category FROM abstopic";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $category[] = $row['category'];
    }
}
echo json_encode($category);
?>
