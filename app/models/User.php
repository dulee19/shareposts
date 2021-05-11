<?php 
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        // Register user
        public function register($data) {
            // $data includes everything
            $this->db->query('INSERT INTO users (name,email,password) VALUES (:name, :email, :password)');
            // Bind Values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            // Execute
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
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
