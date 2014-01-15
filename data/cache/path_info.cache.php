<?php
return array(
    'namespace' => 'Yxj\App',
    'paths' =>array(
        '/' => array('views' => 'Html'),
        '#Error' => array(
            'namespace' => 'Error',
            'paths' => array(
                'Client' => array('views' => 'Html'),
                'Server' => array('views' => 'Html')
            )
        )
    )
);
