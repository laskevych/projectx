<?php
session_start();
require_once 'config/config.php';
require_once 'core/Core.php';
require_once 'core/Boot.php';
require_once 'core/Route.php';
Route::run();