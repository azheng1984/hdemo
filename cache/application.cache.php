<?php
return array (
  '/' => 
  array (
    'Action' => 
    array (
      'class' => 'HomeAction',
      'methods' => 
      array (
        'GET' => true,
      ),
      'before_filter' => true,
      'after_filter' => true,
    ),
    'View' => 
    array (
      'Screen' => 'HomeScreen',
    ),
  ),
  '/error/internal_server_error' => 
  array (
    'View' => 
    array (
      'Screen' => 'InternalServerErrorScreen',
    ),
  ),
  '/error/not_found' => 
  array (
    'View' => 
    array (
      'Screen' => 'NotFoundScreen',
    ),
  ),
  '/hi/sub' => 
  array (
    'Action' => 
    array (
      'class' => 'SubAction',
    ),
  ),
);