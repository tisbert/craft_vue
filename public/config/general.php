<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the default settings in `vendor/craftcms/cms/src/config/defaults/general.php`.
 */

return array(
  '*' => array(
  ),
  'vue-craft' => array(
    'siteUrl'    => 'http://craft-vue:8888/',
    'defaultWeekStartDay' => 0,
    'enableCsrfProtection' => true,
    'omitScriptNameInUrls' => true,
    'cpTrigger' => 'admin',
    'devMode'    => true,
    'isSystemOn' => true
  ),
);
