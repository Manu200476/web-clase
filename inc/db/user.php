<?php
    class User{
        private $db;

        public function __construct($conn){
            $this->db = $conn;
        }

        public function isLoggedIn($token){
            $query = "SELECT * FROM users WHERE user_token = :token";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':token', $token);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if($result){
                return true;
            }
            return false;
        }

        public function register($name, $email, $password){
            $encrypted_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12,]);
            $token = bin2hex(openssl_random_pseudo_bytes(8));
            
            $search = "SELECT * FROM `users` WHERE email = :email";
            $stmp = $this->db->prepare($search);
            $stmp->bindparam(':email', $email);
            $r = $stmp->execute();
            $result = $stmp->fetch();

           if(!$result){
                try{
                    $query = "INSERT INTO users(full_name, email, password, user_token) VALUES(:name, :email, :password, :user_token)";
                    $stm = $this->db->prepare($query);
    
                    $stm->bindparam(':name', $name);
                    $stm->bindparam(':email', $email);
                    $stm->bindparam(':password', $encrypted_password);
                    $stm->bindparam(':user_token', $token);
    
                    $stm->execute();
                    
                    setcookie('user_token', $token, time() + 7 * 24 * 60 * 60); 
    
                    header("Location: usuario.php?token=$token");
                    die();
                    return true;
                }catch(PDOException $e){
                    print_r($e);
                }
            }else{
                header("Location: login.php");
                die();
                return false;
            }
        }

        public function login($email, $password){
            $user_token = $_COOKIE['user_token'];
            if(!$user_token){
                $query = "SELECT * FROM `users` WHERE email = :email";
                $stmp = $this->db->prepare($query);

                $stmp->bindparam(':email', $email);

                $stmp->execute();
                $result = $stmp->fetch();
                $verify_password = password_verify($password, $result['password']);
                $user_token = $result['user_token'];

                if($verify_password AND $result){
                    header("Location: usuario.php?token=$user_token");
                    setcookie('user_token', $user_token, time() + 7 * 24 * 60 * 60); 
                    return true;
                }else{
                    header("Location: register.php");
                    return false;
                }
            }else{
                header("Location: usuario.php?token=$user_token");
                return false;
            }
        }

        public function getUserInfo($token){
            if(!$token){
                try{
                    $query = "SELECT * FROM `users` WHERE token = :token";
                    $stmp = $this->db->prepare($query);

                    $stmp->bindparam(':token', $token);

                    $stmp->execute();
                    $result = $stmp->fetch(PDO::FETCH_ASSOC);
                    return $result;
                }catch(PDOException $e){
                    return $e;
                }
            }else{
                return false;
            }
        }

        public function logout(){
            setcookie ("user_token", "", time() - 3600);
            unset($_COOKIE['user_token']);
            header("Location: ./");
            return true;
        }

        public function updateUser($name, $email, $password){
            $user_token = $_COOKIE['user_token'];
            $encrypted_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12,]);
            if($user_token){
                try{
                    $query = "UPDATE `users` SET `name` = :name, `email` = :email, `password` = :password WHERE email = :email";
                    $stm = $this->db->prepare($query);
                    
                    $stm->bindparam(':name', $name);
                    $stm->bindparam(':email', $email);
                    $stm->bindparam(':password', $encrypted_password);
                    
                    $stm->execute();
                    $results = $stm->fetch(PDO::FETCH_ASSOC);
                    return true;
                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
            }else{
                return false;
            }
        }
    }
?>