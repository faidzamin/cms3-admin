<?php
$page_title = "LKW Student Portal";
include('../../partials/html-head.php');
?>

<main class="main-login">
  <div class="content items-center center gap-32">
    <div class="login-container">
      <!-- Left column (image placeholder) -->
      <div class="login-column-left">
        <img src="../../assets/images/student-portal/ABC_9070-01.jpg" alt="Student Portal" class="cover-image">
      </div>

      <!-- Right column -->
      <div class="login-column-right">
        <!-- 1. Logo -->
        <div class="logo">
          <img src="../../assets/images/common/lkw-logo-no-bg.svg" alt="LKW Logo" height="70">
        </div>

        <div class="container-column gap-24 items-center">
          <!-- 2. Title -->
          <h2>Student Portal</h2>

          <!-- 3. Subtitle -->
          <p>Select Campus :</p>

          <!-- 4. Campus Grid -->
          <div class="campus-grid">
            <!-- Malaysia -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-malaysia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Malaysia</h5>
                <small>Cyberjaya</small>
              </div>
            </div>

            <!-- Botswana -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-botswana" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Botswana</h5>
                <small>Gaborone</small>
              </div>
            </div>

            <!-- Cambodia -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-cambodia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Cambodia</h5>
                <small>Phnom Penh</small>
              </div>
            </div>

            <!-- eSwatini -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-swaziland" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>eSwatini</h5>
                <small>Mbabane</small>
              </div>
            </div>

            <!-- Lesotho -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-lesotho" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Lesotho</h5>
                <small>Maseru</small>
              </div>
            </div>

            <!-- Namibia -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-namibia" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Namibia</h5>
                <small>Windhoek</small>
              </div>
            </div>

            <!-- Uganda -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-uganda" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Uganda</h5>
                <small>Kampala</small>
              </div>
            </div>

            <!-- Sierra Leone -->
            <div class="campus-item">
              <div class="title-icon">
                <iconify-icon icon="emojione-v1:flag-for-sierra-leone" class="icon"></iconify-icon>
              </div>
              <div class="container-column gap-4 items-center">
                <h5>Sierra Leone</h5>
                <small>Freetown</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <small class="color-dark">© 2025 Raisd Sdn. Bhd. All rights reserved.</small>
  </div>
</main>

<?php include('../../partials/html-foot.php'); ?>