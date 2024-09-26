<?php
require_once 'inc/functions.php';

// print_r(get_env('MYSQL_IP'));

// print_r(get_envs(array('MYSQL_IP', 'MYSQL_PORT')));
print_r(get_envs(['MYSQL_IP', 'MYSQL_PORT']));