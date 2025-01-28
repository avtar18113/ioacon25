<?php
// session_start();


?>
<!-- // Check if session is empty, redirect to login page if necessary -->

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><strong>IOACON 2025</strong></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="<?=$siteLogo?>"
                alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="assets/images/user-icon.webp" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black"><?php echo $userData['fname']. ' '.$userData['lname']; ?></p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">

                    <a class="dropdown-item" href="./view-profile.php">
                        <i class="mdi mdi-account-circle me-2 text-primary"></i>View Profile </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./logout.php">
                        <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>

                </div>
            </li>


            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="./logout.php">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>