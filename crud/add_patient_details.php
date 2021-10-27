<?php
include 'connect.php';
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $gender = $_POST['gender'];
    $doa = $_POST['doa'];

    $sql = "INSERT INTO `patients` (`name`, mobile, `address`,bloodgrp, `gender`, `doa`) VALUES('$name','$mobile','$address','$bg','$gender','$doa')";

    $result = mysqli_query($conn,$sql);

    if($result){
        //echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //<strong>Success</strong> Data has been submitted successfully.
                //<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //</div>';
        header('location:http://localhost/crud/display.php');
    }
    
    else{
        die(mysqli_error($conn));
    }

}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Patient</title>
  </head>
  <body>
    
    <div class="container my-3">

    <form method = "post">

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's name" name = "name">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's mobile" name = "mobile">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's address" name = "address">
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Blood Group</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter blood group" name = "bg">
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Gender" name="gender">
  </div>
  <br>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Date of Admission</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter DOA" name="doa">
  </div>
  <br>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  
  </body>
</html>