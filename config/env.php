<?php

/**
 * Environment specific application configuration.
 *
 * You should store all secret information (username, password, token) here.
 *
 * Make sure the env.php file is added to your .gitignore
 * so it is not checked-in the code
 *
 * Place the env.php _outside_ the project root directory, to protect against
 * overwriting at deployment.
 *
 * This usage ensures that no sensitive passwords or API keys will
 * ever be in the version control history so there is less risk of
 * a security breach, and production values will never have to be
 * shared with all project collaborators.
 */
require __DIR__ . '/development.php';

// Database
//$settings['db']['driver']   = 'pdo_mysql';
$settings['db']['host']     = 'ec2-54-228-251-117.eu-west-1.compute.amazonaws.com'; 
$settings['db']['database'] = 'd68i0vtk27v33j';
$settings['db']['username'] = 'jsezzwkxwhkidz';
$settings['db']['password'] = 'eea4bd40f58ba0ced65bcbc74a8e15492ec94284982e1b446ff0b4f7e3b0ec1e';
$settings['db']['port'] = 5432;
$settings['db']['URI'] = 'postgres://jsezzwkxwhkidz:eea4bd40f58ba0ced65bcbc74a8e15492ec94284982e1b446ff0b4f7e3b0ec1e@ec2-54-228-251-117.eu-west-1.compute.amazonaws.com:5432/d68i0vtk27v33j'
$settings['db']['CLI'] = 'heroku pg:psql postgresql-cubed-33102 --app konline'
