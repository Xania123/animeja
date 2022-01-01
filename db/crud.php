<?php

    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }
        
        public function insertMembers($fname,$lname,$dob,$username,$email,$phone){
            try {
                $sql = "INSERT INTO members (firstname,lastname,dateofbirth,username,emailaddress,contactnumber)VALUES (:fname, :lname,:dob, :username, :email, :phone)";
                $stmt = $this-> db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':username',$username);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editMember($id,$fname,$lname,$dob,$username,$email,$phone){
            try{ 
                 $sql = "UPDATE `members` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`username`=:username,`emailaddress`= :email,`contactnumber`=:phone WHERE `member_id`=:id";

                 $stmt = $this->db->prepare($sql);
                 
                 $stmt->bindparam(':id',$id);
                 $stmt->bindparam(':fname',$fname);
                 $stmt->bindparam(':lname',$lname);
                 $stmt->bindparam(':dob',$dob);
                 $stmt->bindparam(':username',$username);
                 $stmt->bindparam(':email',$email);
                 $stmt->bindparam(':phone',$phone);
 
                 // execute statement
                 $stmt->execute();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
             
         }

        public function getMembers(){
            try {
                $sql = "SELECT * FROM `members`";
                $result = $this->db->query($sql);
                return $result;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        
        public function getMembersDetails($id){
          try{
            $sql = "select * from `members` WHERE member_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id',$id);
            $stmt->execute();
            $result= $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        }


        public function deleteMember($id){
            try {
                $sql = "delete from members where member_id = :id";
                $stmt= $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
    }



?>