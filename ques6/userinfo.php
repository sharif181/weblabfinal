<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" 
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" 
    crossorigin="anonymous">
    <title>User info</title>
</head>
<body>

<?php
include_once('sessionCheck.php');
check_login_user();

?>

<div class="container mt-5 bg-light">
<h3 class="display-3"> User's Information</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once('config.php');
  $sql = "SELECT * from labfinal";
  $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>".$row["Fname"]."</td>".
                    "<td>".$row["Lname"]."</td>".
                    "<td>".$row["Username"]."</td>".
                    "<td>".$row["Email"]."</td>".
                    "<td>".$row["Password"]."</td>".
                "</tr>";
        }
    }
    ?>
  </tbody>
</table>

<a href="logout.php" class="btn btn-danger"> Logout </a>
</div>

</body>
</html>