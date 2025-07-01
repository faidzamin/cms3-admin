<?php
$config_path = $_SERVER['DOCUMENT_ROOT'] . '/cms3/config.php';
if (file_exists($config_path)) {
  include_once($config_path);
} else {
  define('BASE_URL', '/cms3/');
}

$page_title = "LKW Student Portal";
include($_SERVER['DOCUMENT_ROOT'] . BASE_URL . 'partials/html-head.php');
?>

<main class="main-login">
  <div class="login-content">
    <div class="login-container">
      <!-- Left column -->
      <div class="login-column-left">
        <img src="<?= BASE_URL ?>assets/images/student-portal/ABC_9070-01.jpg" alt="Student Portal" class="cover-image img-position-top">
      </div>

      <!-- Right column -->
      <div class="login-column-right">
        <!-- Logo -->
        <div class="logo">
          <img src="<?= BASE_URL ?>assets/images/common/lkw-logo-no-bg.svg" alt="LKW Logo" height="70">
        </div>

        <div class="container-column gap-32 items-center">
          <!-- Title with pill above -->
          <div class="container-column gap-16 items-center">
            <span class="pill pill-plain-dark">Student Portal</span>
            <h2>Cyberjaya Campus</h2>
          </div>

          <!-- Login Form -->
          <div class="container-column gap-24 w-full">
            <!-- Input Fields Container -->
            <div class="container-column gap-12">
              <!-- Student ID Field -->
              <div class="input-container">
                <label>Student ID</label>
                <input type="text" class="input-box">
              </div>

              <!-- Password Field -->
              <div class="input-container">
                <label>Password</label>
                <input type="password" class="input-box">
              </div>
            </div>

            <!-- Button Group -->
            <div class="container-row gap-8 w-full">
              <a href="#" class="btn btn-secondary flex-1 center"><span>Create Account</span></a>
              <a href="#" class="btn btn-primary flex-1 center"><span>Login</span></a>
            </div>

            <!-- Reset Password Link -->
            <div class="container-column items-center">
              <a href="#" class="link-icon">
                <span>Forgot password</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <small class="color-dark">© 2025 Raisd Sdn. Bhd. All rights reserved.</small>
  </div>
</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . BASE_URL . 'partials/html-foot.php'); ?>