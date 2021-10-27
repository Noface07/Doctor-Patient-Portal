<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM `patients` where id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$mobile = $row['mobile'];
$address = $row['address'];
$bg = $row['bloodgrp'];
$gender = $row['gender'];
$doa = $row['doa'];


if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $gender = $_POST['gender'];
    $doa = $_POST['doa'];

    $sql = "UPDATE `patients` SET `id` = '$id', `name` = '$name', mobile = '$mobile',`address` = '$address', `bloodgrp` = '$bg',
    gender = '$gender',`doa` = '$doa' WHERE `id` = '$id'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> Updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
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
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's name" name = "name" value=<?php echo $name;?>>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's mobile" name = "mobile" value=<?php echo $mobile;?>>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter patient's address" name = "address" value=<?php echo $address;?>>
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Blood Group</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter blood group" name = "bg" value=<?php echo $bg;?>>
  </div>
  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Gender" name="gender" value=<?php echo $gender;?>>
  </div>
  <br>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Date of Admission</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Enter DOA" name="doa" value=<?php echo $doa;?>>
  </div>
  <br>


  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  
  </body>
</html>