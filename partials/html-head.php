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

  <!-- Favicon -->
  <link rel="icon" href="../../assets/images/common/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="../../assets/images/common/favicon.ico" type="image/x-icon" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../styles/reset.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="../../styles/colors.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="../../styles/typography.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="../../styles/utilities.css?v=<?= time() ?>" />
  <link rel="stylesheet" href="../../styles/main.css?v=<?= time() ?>" />

  <?php if (strpos($_SERVER['PHP_SELF'], 'student-portal/login.php') !== false): ?>
    <!-- Login Page Styles -->
    <link rel="stylesheet" href="../../styles/login.css?v=<?= time() ?>" />
  <?php endif; ?>

  <!-- Scripts -->
  <link rel="modulepreload" href="../../scripts/iconify-icon.min.js">
  <script type="module" src="../../scripts/iconify-icon.min.js"></script>
</head>

<body>