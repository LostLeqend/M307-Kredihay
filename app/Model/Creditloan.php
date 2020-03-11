<?php

class Creditloan
{
    public $creditId;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $countOfRates;
    public $deadline;
    public $fk_creditdealsId;
    public $fk_statusId;
    public $creditdeal;
    public $status;

    public function __construct($creditId = null, $firstname  = null, $lastname = null, $email = null, $phone = null, $countOfRates = null, $deadline = null, $fk_creditdealsId = null, $fk_statusId = null, $creditdeal = null, $status = null)
    {
    $this->creditId = $creditId;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->phone = $phone;
    $this->countOfRates = $countOfRates;
    $this->deadline = $deadline;
    $this->fk_creditdealsId = $fk_creditdealsId;
    $this->fk_statusId = $fk_statusId;
    $this->creditdeal = $creditdeal;
    $this->status = $status;
    }

    public function create()
    {
        $statement = db()->prepare('INSERT INTO `creditloans` (firstname, lastname, email, phone, countOfRates, deadline, fk_creditdealsId, fk_statusId) 
            VALUES (:firstname, :lastname, :email, :phone, :countOfRates, :deadline, :fk_creditdealsId, :fk_statusId)');
        $statement->bindParam(':firstname', $this->firstname, PDO::PARAM_STR);
        $statement->bindParam(':lastname', $this->lastname, PDO::PARAM_STR);
        $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
        $statement->bindParam(':phone', $this->phone, PDO::PARAM_STR);
        $statement->bindParam(':countOfRates', $this->countOfRates, PDO::PARAM_INT);
        $statement->bindParam(':deadline', $this->deadline, PDO::PARAM_STR);
        $statement->bindParam(':fk_creditdealsId', $this->fk_creditdealsId, PDO::PARAM_INT);
        $statement->bindParam(':fk_statusId', $this->fk_statusId, PDO::PARAM_INT);

        return $statement->execute();
    }

    public static function getAll()
    {
        $statement = db()->prepare('SELECT
            creditId,
            firstname,
            lastname,
            email,
            phone,
            countOfRates,
            deadline,
            fk_creditdealsId,
            fk_statusId,
            cd.creditdealDescription,
            st.statusDescription
        FROM creditloans
        Left Join creditdeals cd on cd.creditdealId = fk_creditdealsId
        Left Join statuses st on st.statusId = fk_statusId
        ');
        $statement->execute();

        $result = $statement->fetchAll();
        $creditloans = [];
        foreach($result as $r){
          $creditloans[] = Creditloan::dbResultToCreditloan($r);
        }
        return $creditloans;
    }

    private static function dbResultToCreditloan($r){
      return new Creditloan($r['creditId'], $r['firstname'], $r['lastname'], $r['email'], $r['phone'], $r['countOfRates'], $r['deadline'], $r['fk_creditdealsId'], $r['fk_statusId'], $r['creditdealDescription'], $r['statusDescription']);
    }

    public static function getById($creditId)
    {
        $statement = db()->prepare('SELECT
        creditId,
        firstname,
        lastname,
        email,
        phone,
        countOfRates,
        deadline,
        fk_creditdealsId,
        fk_statusId,
        cd.creditdealDescription,
        st.statusDescription
    FROM creditloans
    Left Join creditdeals cd on cd.creditdealId = fk_creditdealsId
    Left Join statuses st on st.statusId = fk_statusId
    WHERE creditId = :creditId');
        $statement->bindParam(':creditId', $creditId, PDO::PARAM_INT);
        $statement->execute();

        return Creditloan::dbResultToCreditloan($statement->fetch());
    }

    public function update()
    {
        $statement = db()->prepare('UPDATE `creditloans` 
            SET firstname = :firstname, 
                lastname = :lastname, 
                email = :email, 
                phone = :phone, 
                fk_statusId = :fk_statusId, 
                fk_creditdealsId = :fk_creditdealsId 
            WHERE creditId = :creditId
            ');
        $statement->bindParam(':firstname', $this->firstname);
        $statement->bindParam(':lastname', $this->lastname);
        $statement->bindParam(':email', $this->email);
        $statement->bindParam(':phone', $this->phone);
        $statement->bindParam(':fk_statusId', $this->fk_statusId);
        $statement->bindParam(':fk_creditdealsId', $this->fk_creditdealsId);
        $statement->bindParam(':creditId', $this->creditId);

        return $statement->execute();
    }

    public static function delete($creditId)
    {
        $statement = db()->prepare('DELETE FROM `creditloans` WHERE creditId = :creditId');
        $statement->bindParam(':creditId', $creditId);

        return $statement->execute();
    }
}
