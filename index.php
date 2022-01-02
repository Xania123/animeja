<?php
    $title = 'SignUp'; 

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    //$results= $crud->getUser();

?> 
 
    <h1 class="text-center">Animeja SignUp</h1>
 

    <form method="post" action="success.php" enctype="multipart/form-data">
        <div class="form group">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
            
        </div>

        <br>

        <div class="form group">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
            
        </div>

        <br>

        <div class="form group">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input required type="date" class="form-control" id="dob" name="dob">
            
        </div>

        <br>

        <div class="form group">
            <label for="username" class="form-label">Username</label>
            <input required type="text" class="form-control" id="username" name="username">
            
        </div>

        <br>

        <div class="form group">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <br>

        <div class="form group">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <div id="phonelHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>

        <br>

        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
            <br>
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <br>
        <br>
        <br>
    </form>
    <br>

<?php require_once 'includes/footer.php';?> 