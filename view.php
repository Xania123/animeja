<?php
    $title = 'View Member'; 

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
//Get attendee by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    }else{
        $id = $_GET['id'];
        $result = $crud->getMembersDetails($id);
    


?> 

<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.jpg" : $result['avatar_path']; ?>" class="rounded-circle" style="width: 60%; height: 60%"/>

<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $result['firstname'] .' '.  $result['lastname']; ?>
            </h5>

            <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['username']; ?>

            </h6>

            <p class="card-text">
            Date of Birth: <?php echo $result['dateofbirth']; ?> 

            </p>
            <p class="card-text">
            Email: <?php echo $result['emailaddress']; ?> 

            </p>
            <p class="card-text">
            Contact Number: <?php echo $result['contactnumber']; ?> 
            
            </p>
            
            <!---<a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>-->
        </div>
        
</div>

    
<br>
    <a href="viewrecords.php?id=" class= "btn btn-primary">Back to List</a>

    <a href="edit.php?id=<?php echo $result['member_id']?>" class= "btn btn-warning">Edit</a>
    
    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['member_id']?>" class= "btn btn-danger">Delete</a>

<?php } ?>
<br>

<?php require_once 'includes/footer.php';?> 