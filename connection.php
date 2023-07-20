<?php
class SIMPLE
{
    public static function connection()
    {
        try {
            $con-new PDO("mysql:host-localhost;dbname=SIMPLE",'root','');
            return $con;
        } catch (PODException $error1) {
            echo $error1->getMessage();
        }catch(Exception $error2){
            echo $error2->getMessage();
        } 
        }
        public static function insert($name, $email, $level,$password)
        {
        $insert=SIMPLE::connection()->prepare("INSERT INTO users(name,email,level, password) VALUES(:n,:e,:l,:p");
        $insert->bindValue(':n', $name);
        $insert->bindValue(':e', $email);
        $insert->bindValue(':l', $level);
        $insert->bindValue(':p', $password);
        $insert->execute();
        if ($insert) {
            echo"<script>alert('Registered!');</script>";
        
         } else {
        echo "script>alert('Not Registered');</script>";
            }
        }
        public static function login($name, $password);
        }
        $login= SIMPLE:: connection()->prepare("SELECT level FROM users WHERE name=:n and password=:p");
        $login->bindValue(':n', $name);
        $login->bindValue(':p', $passwword);
        $login->execute();
        If($login->rowCount()>0) {
            $fetch=$login->fetch(PDO::FETCH_ASSOC);

            session_start();
            
            If ($fetch) {
                switch ($fetch['level']) {
                    case '1':
                        $_SESSION['level'] = 1;
                        header('location:admin.php');
                        break;

                    case '2' 
                        $_SESSION['level'] = 2;
                        header('location:user.php');
                        break;
                    }
                }
            }else{
                echo "<script>alert('User not registered!');</script>";
            }

        {

    }

    
    
?>