<?php
define('GLPI_CONFIG_DIR', '__INSTALL_DIR__/config/');

if (file_exists(GLPI_CONFIG_DIR . '/local_define.php')) {
   require_once GLPI_CONFIG_DIR . '/local_define.php';
}
