<?php 
    $title="Index";
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $result=$crud->getSpecialities();
?>
    <h1 class="text-center">Registration for IT Conference</h1>


    <form method="post" action=success.php>
    <div class="mb-3">
        <label for="exampleInputFirstName" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="exampleInputFirstName" name="firstname" >
    </div>
    <div class="mb-3">
        <label for="exampleInputLastName" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="exampleInputLastName" name="lastname">
    </div>
    <div class="mb-3">
        <label for="exampleInputDOB" class="form-label">Date of Birth</label>
        <input  type="text" class="form-control" id="exampleInputDOB" name="dob">
    </div>
    <div class="mb-3">
        <label for="exampleInputSpeciality" class="form-label">Area of Expertise</label>
        <select class="form-select" aria-label="Default select example" id="exampleInputSpeciality" name="speciality">
            <?php while($r=$result->fetch(PDO::FETCH_ASSOC)){?>
            <option value=<?php echo $r['speciality_id']?>><?php echo $r['name']?></option>
            <?php }?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPH" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="exampleInputPH" aria-describedby="phoneHelp" name="phone">
        <div id="phonelHelp" class="form-text">We'll never share your contact number with anyone else.</div>
    </div>
    <button type="submit"  class="btn btn-primary col-12" name="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    
    

<?php require_once 'includes/footer.php'; ?>