<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    

    if(!isset($_GET['id'])){
        //echo'Error (；￣Д￣)';
        
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
        
    }else{
        $id = $_GET['id'];
        $member = $crud->getMembersDetails($id);
    
    
    
?> 
   
    <h1 class="text-center">Edit Record</h1>
 

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $members['member_id']?>"/>
    <div class="form group">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" value="<?php echo $member['firstname']?>" id="firstname" name="firstname">
            
        </div>

        <div class="form group">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" value="<?php echo $member['lastname']?>" id="lastname" name="lastname">
            
        </div>

       
        <div class="form group">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" value="<?php echo $member['dateofbirth']?>" id="dob" name="dob">
            
        </div>

        <div class="form group">
            <label for="username" class="form-label">Username</label>
            <input required type="text" class="form-control" value="<?php echo $member['username']?>" id="username" name="username">
            
        </div>

        

        <div class="form group">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" value="<?php echo $member['emailaddress']?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="form group">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $member['contactnumber']?>" id="phone" name="phone">
            <div id="phonelHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <br>
        <a href="viewrecords.php" name="submit" class="btn btn-default">Back to list</a>
        <button type="submit" name="submit" class="btn btn-success">Save changes</button>
    </form>

<?php } ?>
<br>

<?php require_once 'includes/footer.php';?> 
  