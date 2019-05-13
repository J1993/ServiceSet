<?php

    require_once '.libs/DB.php';

    class BaseModel extends DB {
        public $db;

        public function__construct() {
            $this->db = new DB();
        }

        public function insert($table, $data) {
            $keys = array_keys($data);
            $sql = "INSERT INTO $table (".implode(", ", $keys).") \n";
            $sql .= "VALUES ( :".implode(", :", $keys).")";
            $q = $this->db->prepare($sql);
            return $q->execute($data);
        }
    }

?>