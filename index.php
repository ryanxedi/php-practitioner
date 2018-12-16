<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

//die(var_dump($app));

Router::load('routes.php')

	->direct(Request::uri(), Request::method());