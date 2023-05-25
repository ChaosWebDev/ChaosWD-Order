<?php

require(__DIR__ . "/../vendor/autoload.php");

use Order\Dispatcher;

$router = Dispatcher::loadRoutes(__DIR__ . "/../server/src/config/routes.php"); // * THIS LINK SHOULD GO TO WHERE YOUR routes ARE DEFINED * //








require_once(__DIR__ . "/../server/views/base.php"); // ! THIS SHOULD BE CALLED LAST - UNLESS THERE IS A SCRIPT YOU WANT RAN *AFTER* PAGE LOAD ! //