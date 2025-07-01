<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title><?= $page_title ?? "Dashboard" ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />

  <?php

  if (!defined('BASE_URL')) {
    $config_path = $_SERVER['DOCUMENT_ROOT'] . '/cms3/config.php';
    if (file_exists($config_path)) {
      include_once($config_path);
    } else {
      define('BASE_URL', '/cms3/');
    }
  }
  ?>

  <!-- Favicon -->
  <link rel="icon" href="<?= BASE_URL ?>assets/images/common/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="<?= BASE_URL ?>assets/images/common/favicon.ico" type="image/x-icon" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= BASE_URL ?>styles/reset.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="<?= BASE_URL ?>styles/colors.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="<?= BASE_URL ?>styles/typography.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="<?= BASE_URL ?>styles/utilities.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="<?= BASE_URL ?>styles/main.css?v=<?= time() ?>" />

  <?php if (strpos($_SERVER['PHP_SELF'], 'student-portal/login/select-campus.php') !== false): ?>
    <!-- Login Page Styles -->
    <link rel="stylesheet" href="<?= BASE_URL ?>styles/login.css?v=<?= time() ?>" />
  <?php endif; ?>

  <!-- Scripts -->
  <link rel="modulepreload" href="<?= BASE_URL ?>scripts/iconify-icon.min.js">
  <script type="module" src="<?= BASE_URL ?>scripts/iconify-icon.min.js"></script>
</head>

<body>