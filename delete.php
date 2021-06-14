<?php
include_once 'includes/auth_check.php';
require_once "db/conn.php";

    if(!$_GET['id']){
        //echo "error";
        include 'includes/error_msg.php';
        header("Location: viewrecords.php");
    }else{
        //get id values
        $id=$_GET['id'];

        //call delete function
        $result=$crud->deleteAttendee($id);
        //Redirect to list

        if($result){
            header("Location: viewrecords.php");
        }else{
            //echo "error";
            include 'includes/error_msg.php';
        }

    }










?>