<?php

$sql = "SELECT * FROM abstract WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $absHTML = "";
    $srn = 0;
    while ($row = mysqli_fetch_assoc($result)) {        
        $srn = $srn + 1;
        $abstractHTML = "<tr>
        <td>$srn</td>
        <td>{$row['abs_id']}</td>
        <td>{$row['topic']}</td>
        <td>{$row['category']}</td>
        <td>{$row['subcategory']}</td>
        <td>{$row['presentAuthor']}</td>
        <td>{$row['presentAffiliat']}</td>
        <td>{$row['presentDesig']}</td>
        <td>{$row['presentEmail']}</td>
    </tr>";
        $absHTML .= $abstractHTML;
    }
} else {
    $absHTML = "<tr>
        record not found
    </tr>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>