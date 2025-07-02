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
                <img src="<?= BASE_URL ?>assets/images/student-portal/lesotho-bg.jpg" alt="Student Portal" class="cover-image img-position-top">
            </div>

            <!-- Right column -->
            <div class="login-column-right">
                <!-- Logo -->
                <div class="logo">
                    <img src="<?= BASE_URL ?>assets/images/common/lkw-logo-no-bg.svg" alt="LKW Logo" height="70">
                </div>

                <div class="container-column gap-32 items-center">

                    <!-- Title -->
                    <h2>Maseru Campus</h2>

                    <!-- Subtitle -->
                    <p>Login to your account :</p>

                    <!-- Login Form -->
                    <div class="container-column gap-24 w-full login-form">
                        <!-- Input Fields Container -->
                        <div class="container-column gap-12">
                            <!-- Student ID Field -->
                            <div class="input-container pulse-border pulse-white">
                                <label>Student ID</label>
                                <input type="text" class="input-box">
                            </div>

                            <!-- Password Field -->
                            <div class="input-container pulse-border pulse-white">
                                <label>Password</label>
                                <input type="password" class="input-box">
                            </div>
                        </div>

                        <!-- Button Group -->
                        <div class="container-row gap-8 w-full">
                            <a href="#" class="btn btn-secondary pulse-border pulse-white flex-1 center"><span>Create Account</span></a>
                            <a href="#" class="btn btn-primary pulse-border pulse-blue flex-1 center"><span>Login</span></a>
                        </div>

                        <!-- Reset Password Link and Back Button -->
                        <div class="container-column items-center gap-16">
                            <!-- Forgot password link -->
                            <a href="#" class="link-icon">
                                <span>Forgot password</span>
                            </a>

                            <!-- Expanding Back Button -->
                            <a href="<?= BASE_URL ?>pages/student-portal/login/select-campus.php" class="btn-expand pulse-border pulse-white">
                                <iconify-icon icon="material-symbols:arrow-back-rounded" class="icon"></iconify-icon>
                                <span>Back to campus selection</span>
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