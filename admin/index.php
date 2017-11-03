<?php
session_start();
require_once '../config/config.php';
require_once '../admin/core/CoreAdmin.php';
require_once '../admin/core/BootAdmin.php';
require_once '../admin/core/RouteAdmin.php';
RouteAdmin::run();