<?php
return array('app', 'lib', HYPERFRAMEWORK_PATH.'web/lib');

array(
  'Hft\Application' => array('app', '@folder_mapping' => false),
  'Hft' => array('lib'),
  'Hyperframework\Web' => HYPERFRAMEWORK_PATH . 'web/lib'
);

array(
  'Hft' => array('lib', 'Application' => array('app', '@folder_mapping' => false, 'Sub' => array('app/sub', '@folder_mapping' => false))),
  'Hyperframework\Web' => HYPERFRAMEWORK_PATH . 'web/lib',
  'Hft\Application' => array('lib/Application'),
  'Xxx' => array('app/xxx', '@recursive' => false),
  'XX' => array('@root' => 'libp', '.', 'a', 'b', 'c'),
);
