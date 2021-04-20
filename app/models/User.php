<?php 
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Find user by email
        public function findUserByEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');

            $this->db->bind(':email', $email);

            $row = $this->db->single(); // data

            // Check row
            if($this->db->rowCount() > 0) {
                // email is found > 0
                return true;
            } else {
                return false;
            }

            //  Bind the value to the email ($email) - from the controller
            // : - prepared statement
            // query from libraries Database.php, it's a function
        }
        
    }
