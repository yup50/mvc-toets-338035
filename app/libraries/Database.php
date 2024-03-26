<?php
/**
 * Dit is de database class die alle communicatie met de database verzorgt
 */

class Database
{
    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;


    private $dbHandler;
    private $statement;

    public function __construct()
    {
        /**
         * Dit is de connectiestring die nodig voor het maken van een
         * nieuw PDO object
         */
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;

        /**
         * We geven nog wat options mee voor het PDO-object om 
         * fouten weer te geven
         */
        $options = array(
            PDO::ATTR_PERSISTENT =>true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );

        try {
            /**
             * Maken we eenverbinding met de database mysql server
             */
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            /**
             * Wanneer er een error optreed daarbij wordt er een PDOException object 
             * aangemaakt met informatie over de error
             */
            echo $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    public function resultSet()
    {
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}