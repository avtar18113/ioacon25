<?php
include 'db.php';
$k = $_POST['id'];
if ($k == 'all') {
    $query = mysqli_query($conn, "SELECT * FROM registration_view ");
} else {
    $k1 = $_POST['id'];
    $query = mysqli_query($conn, "SELECT * FROM registration_view Where p_status='{$k1}' ");
}
$i = 1;
while ($row = mysqli_fetch_array($query)) {
?>



    <div class="col-md-6 col-sm-12 my-3">
        <div class="card rounded-5 border-primary">
            <div class="card-body py-3">
                <h5 class="card-title"><?= $row['fname']; ?></h5>
                <h5 class="card-title"><?= $row['rid'] ?></h5>
                <p class="card-text"><strong>E-Mail:</strong><?= $row['email'] ?></p>
                <p class="card-text"><strong>Mobile:</strong><?= $row['mobile'] ?></p>
                <a href="backend_email_script.php?srn=<?= $row['srn'] ?>" class="card-link">Send Mail</a>
                <a href="backend_email_view.php?srn=<?= $row['srn'] ?>" class="card-link">View E-mail</a>
                
            </div>
        </div>
    </div>

<?php
    $i++;
}

?>