<?php

class Creditdeal
{
    public $creditdealId;
    public $creditdealDescription;

    public function __construct($creditdealId = null, $creditdealDescription = null)
    {
    public $creditdealId;
    public $creditdealDescription;
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT
            creditdealId,
            creditdealDescription
        FROM creditdeals
        ');
        $statement->execute();

        $result = $statement->fetchAll();
        $creditdeals = [];
        foreach($result as $r){
          $creditdeals[] = Creditdeal::dbResultToCreditdeal($r);
        }
        return $creditdeals;
    }

    private static function dbResultToCreditdeal($r){
      return new Creditdeal($r['creditdealId'], $r['creditdealDescription']);
    }

    public static function getById($creditdealId)
    {
        $statement = db()->prepare('SELECT
        creditdealId,
        creditdealDescription
    FROM creditdeals
    WHERE creditdealId = :creditdealId');
        $statement->bindParam(':creditdealId', $creditdealId, PDO::PARAM_INT);
        $statement->execute();

        return Creditdeal::dbResultToCreditdeal($statement->fetch());
    }
}
