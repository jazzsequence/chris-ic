if (file_exists(dirname(__FILE__) . '/wp-config-pantheon.php') && isset($_ENV['PANTHEON_ENVIRONMENT'])) {
    require_once(dirname(__FILE__) . '/wp-config-pantheon.php');
}