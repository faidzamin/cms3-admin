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

        <div class="container-column gap-24 items-center">
          <!-- Title -->
          <h2>Student Portal</h2>

          <!-- Subtitle -->
          <p>Select Campus :</p>

          <!-- Campus Grid -->
          <div class="campus-grid">
            <!-- Malaysia -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/malaysia.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-malaysia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Malaysia</h5>
                <small>Cyberjaya</small>
              </div>
            </a>

            <!-- Botswana -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/botswana.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-botswana" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Botswana</h5>
                <small>Gaborone</small>
              </div>
            </a>

            <!-- Cambodia -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/cambodia.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-cambodia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Cambodia</h5>
                <small>Phnom Penh</small>
              </div>
            </a>

            <!-- eSwatini -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/eswatini.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-swaziland" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>eSwatini</h5>
                <small>Mbabane</small>
              </div>
            </a>

            <!-- Lesotho -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/lesotho.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-lesotho" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Lesotho</h5>
                <small>Maseru</small>
              </div>
            </a>

            <!-- Namibia -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/namibia.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-namibia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Namibia</h5>
                <small>Windhoek</small>
              </div>
            </a>

            <!-- Uganda -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/uganda.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-uganda" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Uganda</h5>
                <small>Kampala</small>
              </div>
            </a>

            <!-- Sierra Leone -->
            <a href="<?= BASE_URL ?>pages/student-portal/login/sierra-leone.php" class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-sierra-leone" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Sierra Leone</h5>
                <small>Freetown</small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <small class="color-dark">© 2025 Raisd Sdn. Bhd. All rights reserved.</small>
  </div>
</main>

<?php include($_SERVER['DOCUMENT_ROOT'] . BASE_URL . 'partials/html-foot.php'); ?>