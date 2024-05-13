<?php

class Nagelstudio
{
    private $db;

    public function __construct()
    {
        /**
         * Maak een nieuw database object die verbinding maakt met de 
         * MySQL server
         */
        $this->db = new Database();
    }

    /**
     * Haal alle records op uit de Country-tabel
     */
    public function getNagelstudios()
    {
        try {
            /**
             * Maak een sql-query die de gewenste informatie opvraagt uit de database
             */
            $sql = 'SELECT kleur1
                          ,kleur2
                          ,kleur3
                          ,kleur4
                          ,telefoonNummer
                          ,email
                          ,afspraakDatum
                          ,luxeManicure
                          ,nagelbijt
                          ,nagelreparatie
                          ,datumVanSchrijven
                    FROM   afspraak
                    ORDER BY afspraakDatum DESC';

            /**
             * Prepare de query voor het PDO object
             */
            $this->db->query($sql);

            /**
             * Geef de opgehaalde informatie terug aan de controller
             */
            return $this->db->resultSet();
            
        } catch (Exception $e) {
            // Behandel de uitzondering hier, bijvoorbeeld loggen of een foutmelding weergeven
            echo 'Er is een fout opgetreden: ' . $e->getMessage();
        }
    }

}