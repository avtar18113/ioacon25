<?php

$sql = "SELECT * FROM abstract_submissions WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $absHTML = "";
    $srn = 0;
    while ($row = mysqli_fetch_assoc($result)) {        
        $srn = $srn + 1;
        $abstractHTML = "<tr>
        <td>$srn</td>
        <td>{$row['abs_id']}</td>
        <td>{$row['abstract_topic']}</td>
        <td>{$row['category']}</td>
        <td>{$row['subcategory']}</td>
        <td>{$row['presenting_author_name']}</td>
        <td>{$row['presenting_author_institution']}</td>
        <td>{$row['presenting_author_designation']}</td>
        <td>{$row['presenting_author_email']}</td>
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