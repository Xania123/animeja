<?php
    $title = 'Success'; 
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    
    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$phone.$ext";
        move_uploaded_file($orig_file,$destination);


        

        $isSuccess=$crud->insertMembers($fname,$lname,$dob,$username,$email,$phone,$destination);

        if($isSuccess){
            echo '<h1 class="text-center text-success">Registration Complete! <br>☆*:.｡.o(≧▽≦)o.｡.:*☆</h1>';//custom for registration page
            //include 'includes/successssage.php'; <- generic success message
        }
        else{
            include 'includes/errormessage.php';
        }
    }
?> 

    <img src="<?php echo $destination ?>" class="rounded-circle" style="width: 60%; height: 60%"/>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] .' '.  $_POST['lastname']; ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['username']; ?>

            </h6>

            <p class="card-text">
            Date of Birth: <?php echo $_POST['dob']; ?> 

            </p>
            <p class="card-text">
            Email: <?php echo $_POST['email']; ?> 

            </p>
            <p class="card-text">
            Contact Number: <?php echo $_POST['phone']; ?> 
            
            </p>
            
            <!---<a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>-->
        </div>
    </div>
   

<br>

<?php require_once 'includes/footer.php';?> 
