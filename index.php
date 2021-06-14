<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialities();

?>
    
    <h1 class="text-center">Registration for IT Conference </h1>

    <form method="post" action="success.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFirstName">First Name</label>
            <input required type="text" class="form-control" id="exampleInputFirstName" name="firstname">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputLastName">Last Name</label>
            <input required type="text" class="form-control" id="exampleInputLastName" name="lastname">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputDOB">Date Of Birth</label>
            <input type="text" class="form-control" id="exampleInputDOB" name="dob">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputSpeciality">Area of Expertise</label>
            <select class="form-control" id="exampleInputSpeciality" name="speciality">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br>
        <div class="form-groupform-group">
            <label for="exampleInputPH">Contact Number</label>
            <input type="text" class="form-control" id="exampleInputPH" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <br>
            <div class="input-group mb-3">
            <input type="file" accept="image/*"class="form-control" id="inputGroupFile02" name="avatar">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        
        
        <button type="submit" name="submit" class="btn btn-primary col-12">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>