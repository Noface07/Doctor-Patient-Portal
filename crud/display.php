<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <button class="btn btn-primary my-5 mx-5"><a href="patient.php" class="text-light">Add Patient</a></button>
    <table class="table mx-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">BloodGrp</th>
      <th scope="col">Gender</th>
      <th scope="col">DOA</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM `patients`";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $mobile = $row['mobile'];
                $address = $row['address'];
                $bg = $row['bloodgrp'];
                $gender = $row['gender'];
                $doa = $row['doa'];

                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$mobile.'</td>
                <td>'.$address.'</td>
                <td>'.$bg.'</td>
                <td>'.$gender.'</td>
                <td>'.$doa.'</td>
                <td>
                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                </td>
              </tr>';
            }
        }

    ?>
   
  </tbody>
</table>
</body>
</html>