<?php
$dbConnection = null;
function db()
{
  global $dbConnection;
  if(!$dbConnection){
    try {
        $dbConnection = new PDO('mysql:host=localhost;dbname=kredihay;charset=utf8;', 'root', '');
    } catch (PDOException $e) {
        die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }

    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  return $dbConnection;
}
