<?php
// Your database connection code
include('../db.php');
if (isset($_GET['category']) || isset($_POST['category'])) {
    $selectedCategory = $_POST['category'];
   
    $subcategories = [];
    // Assuming $conn is your database connection object
    $query = "SELECT subcategory FROM abstopic WHERE category = '$selectedCategory'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subcategories[] = $row['subcategory'];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($subcategories);

    // Close the statement and connection

    $conn->close();
}else {
    // Handle invalid requests
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request']);
}
?>