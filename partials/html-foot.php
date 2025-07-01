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
<script src="<?= BASE_URL ?>scripts/main.js" defer></script>
</body>

</html>