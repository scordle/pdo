<?php

/**
 * Configuration for database connection
 *
 */

$host       = "172.16.22.21";
$username   = "scordle";
$password   = "Summer20!9";
$dbname     = "csc272_scratchpad";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );