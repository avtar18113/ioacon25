<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <!--<img src="assets/images/faces/face1.jpg" alt="profile">-->
          <span class="login-status online"></span>
          <!-- Change to offline or busy as needed -->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">
            <?php echo htmlspecialchars($userData['fname'] . ' ' . $userData['lname']); ?>
          </span>
          <!-- <span class="text-secondary text-small">Project Manager</span> -->
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    
      <li class="nav-item">
        <a class="nav-link" href="./reg-index.php">
          <span class="menu-title">Register Now</span>
          <i class="mdi mdi-laptop menu-icon"></i>
        </a>
      </li>
   
    <li class="nav-item d-none">
      <a class="nav-link" href="./abs-index.php">
        <span class="menu-title">Abstract Submission</span>
        <i class="mdi mdi-laptop menu-icon"></i>
      </a>
    </li>
    <?php
      $userEmail = $userData['email'];
      $sql = "SELECT * FROM abstract WHERE email='$userEmail' AND abs_status='To be Resubmitted'";
      $con_qry = mysqli_query($conn, $sql);
      if ($con_qry && mysqli_num_rows($con_qry) > 0) {
    ?>
      <li class="nav-item d-none">
        <a class="nav-link" href="./abs-update.php">
          <span class="menu-title">Abstract To be Submission</span>
          <i class="mdi mdi-laptop menu-icon"></i>
        </a>
      </li>
    <?php } ?>
   
    <?php if (mysqli_num_rows($regResult) > 0 && $regData['workshop'] != 'No' && empty($regData['workshop_option_name'])) { ?>
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="./workshop-option.php">-->
      <!--    <span class="menu-title">Workshop Option</span>-->
      <!--    <i class="mdi mdi-laptop menu-icon"></i>-->
      <!--  </a>-->
      <!--</li>-->
    <?php } ?>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">View Details</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-eye menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="./view-profile.php">
              View Profile <i class="mdi mdi-face-profile menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./view-abstract.php">
              View Abstract <i class="mdi mdi-eye menu-icon"></i>
            </a>
          </li>
          <?php if (mysqli_num_rows($regResult) > 0 && $regStatus == 'success') { ?> 
            <li class="nav-item">
              <a class="nav-link" href="./view-registration.php">
                View Registration <i class="mdi mdi-eye menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./e-receipt.php">
                Payment Receipt <i class="mdi mdi-receipt menu-icon"></i>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </li>
    <?php if ($regStatus != 'success' && $regStatus != 'undefined') { ?>
      <li class="nav-item d-none">
        <a class="nav-link" href="./check-out.php">
          <span class="menu-title">Proceed To Payment</span>
          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
    <?php } ?>
    <li class="nav-item d-none">
      <a class="nav-link" href="latest-update.php">
        <span class="menu-title">Latest Update</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="support.php">
        <span class="menu-title">Registration Support</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>
