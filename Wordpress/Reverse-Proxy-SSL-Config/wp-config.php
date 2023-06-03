define('WP_HOME','https://example.com');
define('WP_SITEURL','https://example.com');

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
