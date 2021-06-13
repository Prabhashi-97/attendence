<?php

require_once 'db/conn.php';

     //get values from post operation 
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality'];
        
         //call crud fuction
        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality);
        
        if ($result) {
            header("Location: viewrecords.php");
        } else {
            //echo "error";
            include 'includes/error_msg.php';
            
        }
    } else {
        //echo "error";
        include 'includes/error_msg.php';
        

    }



?>