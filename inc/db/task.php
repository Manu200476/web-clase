<?php
    class Task{
        private $db;

        public function __construct($conn){
            $this->db = $conn;
        }

        public function createTask($name, $description, $date, $token){
            $query = "INSERT INTO tasks(name, description, date, user_token) VALUES(:name, :description, :date, :token)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':token', $token);
            $stmt->execute();
            return true;
        }

        public function getTasks($token){
            try{
                $query = "SELECT * FROM `tasks` WHERE user_token = :token";
                $stmp = $this->db->prepare($query);
                $stmp->bindparam(':token', $token);
                $stmp->execute();
                $results = $stmp->fetchAll();
                return $results;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function getTask($task_id, $token){
            try{
                $query = "SELECT * FROM `tasks` WHERE user_token = :token AND task_id = :task_id";
                $stmp = $this->db->prepare($query);
                $stmp->bindparam(':token', $token);
                $stmp->bindparam(':task_id', $task_id);
                $stmp->execute();
                $results = $stmp->fetch();
                return $results;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function deleteTask($task_id, $user_token){
            try{
                $query = "DELETE FROM `tasks` WHERE user_token = :user_token AND task_id = :task_id";
                $stmp = $this->db->prepare($query);
                $stmp->bindparam(':user_token', $user_token);
                $stmp->bindparam(':task_id', $task_id);
                $stmp->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function updateTask($task_id, $name, $description, $date, $user_token){
            try{
                $query = "UPDATE `tasks` SET name = :name, description = :description, date = :date WHERE user_token = :user_token AND task_id = :task_id";
                $stmp = $this->db->prepare($query);
                $stmp->bindparam(':user_token', $user_token);
                $stmp->bindparam(':task_id', $task_id);
                $stmp->bindparam(':name', $name);
                $stmp->bindparam(':description', $description);
                $stmp->bindparam(':date', $date);
                $stmp->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>