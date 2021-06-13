<?php 
    $title='Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if (isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname= $_POST['firstname'];
        $lname= $_POST['lastname'];
        $dob= $_POST['dob'];
        $email= $_POST['email'];
        $contact= $_POST['phone'];
        $speciality= $_POST['speciality'];
        //call function to insert and track ifsuccess or not
        $isSuccess=$crud->insertAttendees($fname,$lname,$dob,$email,$contact,$speciality);
    }

        if ($isSuccess){
           // echo ' <h1 class="text-center text-success">You have been successfully Registered!</h1>';
           include 'includes/success_msg.php';
        }
        else {
            //echo ' <h1 class="text-center text-danger">There is an error in processing</h1>';
            include 'includes/error_msg.php';
        }


?>

   
    <!-- get method code -->
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['firstname'].' '. $_GET['lastname'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['speciality']?></h6>
            <p class="card-text">Date of Birth: <?php //echo $_GET['dob'];?></p>
            <p class="card-text">Email Address: <?php //echo $_GET['email'];?></p>
            <p class="card-text">Contact Number: <?php //echo $_GET['phone'];?></p>
            
        </div>
    </div> -->
    <!-- <?php
        // echo $_GET['firstname']."<br>";
        // echo $_GET['lastname']."<br>";
        // echo $_GET['dob']."<br>";
        // echo $_GET['speciality']."<br>";
        // echo $_GET['email']."<br>";
        // echo $_GET['phone']."<br>";
    ?> -->

    <!-- post method code -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'].' '. $_POST['lastname'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']?></h6>
            <p class="card-text">Date of Birth: <?php echo $_POST['dob'];?></p>
            <p class="card-text">Email Address: <?php echo $_POST['email'];?></p>
            <p class="card-text">Contact Number: <?php echo $_POST['phone'];?></p>
            
        </div>
    </div>






    <br>
    <br>
    <br>
    <br>

<?php require_once 'includes/footer.php'; ?>