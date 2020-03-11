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

//Host Db
//function db()
//{
//    global $dbConnection;
//    if(!$dbConnection){
//        try {
//            $dbConnection = new PDO('mysql:host=localhost;dbname=kurseictbz_30711;charset=utf8;', 'kurseictbz_30711', 'db_307_pw_11');
//        } catch (PDOException $e) {
//            die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
//        }
//
//       $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    }
//    return $dbConnection;
//}