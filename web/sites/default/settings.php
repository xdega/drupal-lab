<?php
$databases['default']['default'] = [
  'database' => 'drupaldb',
  'username' => 'drupal',
  'password' => 'guest',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

$settings['hash_salt'] = '-rRCQAJk3DzbbgPsesOuULk2MenEVs0XYEhzwoAdI1n-0uryLU4naZGiEYmd_1WDl842U_L6HA';
$settings['config_sync_directory'] = 'sites/default/files/config/sync';
$settings['trusted_host_patterns'] = [
  '^localhost$',
];
