<?php

 $databases = array();

$config_directories = array(
  CONFIG_SYNC_DIRECTORY => '../config',
 );

$settings['hash_salt'] = '';

# $settings['deployment_identifier'] = \Drupal::VERSION;

$settings['update_free_access'] = FALSE;

# $settings['reverse_proxy'] = TRUE;

# $settings['omit_vary_cookie'] = TRUE;

# $settings['cache_ttl_4xx'] = 3600;

# $settings['class_loader_auto_detect'] = FALSE;

# $settings['allow_authorize_operations'] = FALSE;

# $settings['file_chmod_directory'] = 0775;
# $settings['file_chmod_file'] = 0664;

# $settings['file_public_base_url'] = 'http://downloads.example.com/files';

$settings['file_public_path'] = 'sites/default/files';

$settings['file_private_path'] = '../files-private';

# $settings['session_write_interval'] = 180;

$settings['maintenance_theme'] = 'bartik';

# ini_set('pcre.backtrack_limit', 200000);
# ini_set('pcre.recursion_limit', 200000);

# $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');

# $config['system.site']['name'] = 'My Drupal site';
# $config['system.theme']['default'] = 'stark';
# $config['user.settings']['anonymous'] = 'Visitor';

# $config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
# $config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
# $config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

# $settings['yaml_parser_class'] = NULL;

$settings['install_profile'] = 'lightning';

$settings['file_scan_ignore_directories'] = [
  'node_modules',  'bower_components',
];

$settings['trusted_host_patterns'] = array(
    '^elections\.sl$',
	'^dev.electiondata\.io$',
	'^test.elections\.sl$',
	'^prod.elections\.sl$',
	'^electiondata\.io$',
	'^dev.electiondata\.io$',
	'^test.electiondata\.io$',
	'^prod.electiondata\.io$',
    '^.+\.elections\.sl$',
	'^.+\.electiondata\.io$',
    '^lamtech\.sl$',
    '^.+\.lamtech\.sl$',
  );

$databases['default']['default'] = array (
'database' => '',
'username' => '',
'password' => '',
'host' => '',
'port' => '3306',
'driver' => 'mysql',
'prefix' => '',
'collation' => 'utf8mb4_general_ci',
 );

if (isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '/api/') === 0 ) {
  ini_set('memory_limit', '2G');
}

if (PHP_SAPI === 'cli') {
  ini_set('memory_limit', '2G');
}

$conf['cache_backends'][] = 'modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['page_cache_without_database'] = TRUE;
$conf['page_cache_invoke_hooks'] = FALSE;

#if (file_exists('/usr/share/nginx/oedpincludes/prod.php')) {
#   include '/usr/share/nginx/oedpincludes/prod.php';
# }
