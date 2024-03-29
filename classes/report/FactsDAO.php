<?php
/**
 * Created by PhpStorm.
 * User: brianslaght
 * Date: 6/1/15
 * Time: 5:10 PM
 */

class FactsDAO {

    protected $db = '';

    function __construct(PDO $pdo){

        $this->db = $pdo;
    }

    function createFact($reportID,$value,$type){
        $sql = $this->db->prepare("INSERT INTO report_facts (rf_report_id,rf_value,rf_type) VALUES (:reportID,:fact,:factType)");

        try{
            $sql->execute(array(
                ':reportID' => $reportID,
                ':fact' => $value,
                ':factType' => $type
            ));

            return TRUE;
        }catch(PDOException $e){
            echo $e;
            return FALSE;
        }
    }




}