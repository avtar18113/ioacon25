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
          <a class="nav-link" href="<?=$BASE_URL?>/home">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?=$BASE_URL?>/register-now">
              <span class="menu-title">Register Now</span>
              <i class="mdi mdi-laptop menu-icon"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?=$BASE_URL?>/abs-index">
              <span class="menu-title">Abstract Submission</span>
              <i class="mdi mdi-laptop menu-icon"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
              aria-controls="ui-basic">
              <span class="menu-title">View Details</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-eye menu-icon"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="<?=$BASE_URL?>/pages/view-profile">View Profile <i class="mdi mdi-face-profile menu-icon"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$BASE_URL?>/pages/view-application"> View Application <i class="mdi mdi-eye menu-icon"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$BASE_URL?>/pages/view-abstract">View Abstract <i class="mdi mdi-eye menu-icon"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$BASE_URL?>/pages/view-receipt">View Receipt <i class="mdi mdi-eye menu-icon"></i></a>
                </li>
            </ul>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?=$BASE_URL?>/addon.php">
              <span class="menu-title">Addon</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?=$BASE_URL?>/support.php">
              <span class="menu-title">Registration Support</span>
              <i class="mdi mdi-table-large menu-icon"></i>
          </a>
      </li>
  </ul>
</nav>