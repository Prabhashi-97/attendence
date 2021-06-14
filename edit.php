<?php 
    $title="Edit Recors";
    require_once 'includes/header.php';
    include_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $result=$crud->getSpecialities();

    if(!isset($_GET['id'])){
        //echo 'error';
        include 'includes/error_msg.php';
        header("Location: viewrecords.php");
    }else{
        $id=$_GET['id'];
        $attendee=$crud->getAttendeeDetails($id);

?>
    <h1 class="text-center">Edit Record</h1>


    <form method="post" action=editpost.php>
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']?>">
    <div class="mb-3">
        <label for="exampleInputFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="exampleInputFirstName" name="firstname" >
    </div>
    <div class="mb-3">
        <label for="exampleInputLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="exampleInputLastName" name="lastname">
    </div>
    <div class="mb-3">
        <label for="exampleInputDOB" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="exampleInputDOB" name="dob">
    </div>
    <div class="mb-3">
        <label for="exampleInputSpeciality" class="form-label">Area of Expertise</label>
        <select class="form-select" aria-label="Default select example" id="exampleInputSpeciality" name="speciality">
            <?php while($r=$result->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $r['speciality_id']?>" <?php if($r['speciality_id']==$attendee['speciality_id']) echo 'selected'?>>
                    <?php echo $r['name']?>
                </option>
            <?php }?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPH" class="form-label">Contact Number</label>
        <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>"  id="exampleInputPH" aria-describedby="phoneHelp" name="phone">
        <div id="phonelHelp" class="form-text">We'll never share your contact number with anyone else.</div>
    </div>
    <a href="viewrecords.php"class="btn btn-default " >Back to List</a>
    <button type="submit"  class="btn btn-success " name="submit">Save Changes</button>
    
    </form>

<?php } ?>
    <br>
    <br>
    <br>
    <br>
    
    

<?php require_once 'includes/footer.php'; ?>