<?php
//This includes the header file.This file contains code that starts/resumes a session.
//By having it in tha header,it will be included on every page,allowing session capability to be used on every page across the website.
include_once 'includes/session.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css">
    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">IT Conference</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewrecords.php">View Attendees</a>
              </li>
            </ul>
          </div>
          <div class="nav justify-content-end"" id="navbarNav" >
            <ul class="nav navbar-nav navbar-right"">
              <li class="nav-item ">
                <?php 
                if(!isset($_SESSION['userid'])){
                ?>
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                <?php } else { ?>
                  <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only"></span></a>
                  <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
                <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
    <br>

