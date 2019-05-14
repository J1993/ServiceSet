<?php

    require_once './libs/DB.php';

    class BaseModel extends DB {
        public $db;

        public function __construct() {
            $this->db = new DB();
        }

        public function insert($table, $data) {
            try {
                $keys = array_keys($data);
                $sql = "INSERT INTO $table (".implode(", ", $keys).") \n";
                $sql .= "VALUES ( :".implode(", :",$keys).")";
                $q = $this->db->prepare($sql);
                return $q->execute($data);
            } catch (PDOException $e) {
                $_SESSION['mensaje'] = $e->getMessage();
            } catch (Exception $e) {
                $_SESSION['mensaje'] = $e->getMessage();
            }
        }
    
    }

?>