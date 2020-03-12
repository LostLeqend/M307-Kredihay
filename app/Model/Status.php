<?php

class Status
{
    public $statusId;
    public $statusDescription;

    public function __construct($statusId = null, $statusDescription = null)
    {
        $this->statusId = $statusId;
        $this->statusDescription = $statusDescription;
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT statusId, statusDescription FROM statuses');
        $statement->execute();

        $result = $statement->fetchAll();
        $statuses = [];
        foreach($result as $r){
          $statuses[] = Status::dbResultToStatus($r);
        }
        return $statuses;
    }

    private static function dbResultToStatus($r){
        return new Status($r['statusId'], $r['statusDescription']);
    }

    public static function getById($statusId)
    {
        $statement = db()->prepare('SELECT statusId, statusDescription FROM statuses WHERE statusId = :statusId');
        $statement->bindParam(':statusId', $statusId, PDO::PARAM_INT);
        $statement->execute();

        return Status::dbResultToStatus($statement->fetch());
    }
}
