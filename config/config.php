<?php 
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'crud-system-php';

  $connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  if ($connection->connect_errno) {
    echo "Error on connect database";
  } else {
    echo "Database connected";
  }
?>