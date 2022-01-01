<?php
    
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];


            

        $result = $crud->editMember($id,$fname,$lname,$dob,$username,$email,$phone);
        if($result){
            header("location: viewrecords.php");
        }
        else{
            //echo 'error';
            include 'includes/errormessage.php';
        }
    }
    else{
        //echo 'error';
        include 'includes/errormessage.php';
    }
?> 