<?php
class DB {
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "stripesample";

    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }

    public function insert_payment_details($arr_data = array()) {
        $isPaymentExist = $this->db->query("SELECT * FROM payments WHERE payment_id = '".$arr_data['payment_id']."'");

        if($isPaymentExist->num_rows == 0) {
            $i = 0;
            $values = '';
            foreach($arr_data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $values .= $pre."'".$this->db->real_escape_string($val)."'";
                $i++;
            }

            $insert = $this->db->query("INSERT INTO payments(".implode(",", array_keys($arr_data)).") VALUES(".$values.")");
        }
    }
}

?>