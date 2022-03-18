<?php
    class Fruit {
        private $fruit;

        public function __construct() {
            $this->db = new Database;
        }

        public function getFruits() {
            $this->db->query("SELECT * FROM fruit");

            $result = $this->db->resultSet();

            return $result;
        }
    }
