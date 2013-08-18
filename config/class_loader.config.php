<?php
//return array('app', 'lib', HYPERFRAMEWORK_PATH.'web/lib');
//todo 如何指定 application 类?
return array(
  'Hft\Application' => array(
      array('wow/Wow2.php'),
      array('app_lib', '@folder_mapping' => false, array('app_lib/Test', '@exclude' => true)),
      //'Test\Test3' => array('app_lib/Test3', '@exclude' => true),//独立声明
      'app',
      //array(HYPERFRAMEWORK_PATH . 'web/lib', '@folder_mapping' => true),
      '@folder_mapping' => false
  ),
  'Hft' => array('lib'),
  'Hyperframework\Web' => HYPERFRAMEWORK_PATH . 'web/lib'
);

return array(
  'Hft' => array('lib', 'Application' => array('app', '@folder_mapping' => false, 'Sub' => array('app/sub', '@folder_mapping' => false))),
  'Hyperframework\Web' => HYPERFRAMEWORK_PATH . 'web/lib',
  'Hft\Application' => array('lib/Application'),
  'Xxx' => array('@recursive' => false, 'app/xxx'),
  '1XX' => array('@root' => '/etc/lib', '.', array('@exclude' => true, 'a', 'b', 'c')),
  '2XX' => array('/etc/lib', array('@root' => '/etc/lib', 'a', 'b', 'c', '@exclude' => true)),
);
