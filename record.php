<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="database.css">
    <title>Document</title>
</head>
<body>
    
    <div class="navbar">
        <div>
            <h1>Records</h1>
        </div>
        <div>
            <br>
            <br>
            <form action="search.php" method="post">
                <input type="search" name="search" id="">
                <input type="submit" value="Search">
                </form>
            
    </div>
    </div>
    
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    $gender=$_POST['gender'];
    $language=$_POST['languages'];
    $zipcode=$_POST['zipcode'];
    $about=$_POST['about'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'users_db');
    $query="SELECT *From users";
    $result = mysqli_query($con,$query);
    $aantal  = $result->num_rows;
    $search= $_POST['search'];
   
    ?>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email <Address></Address></th>
      <th>Password</th>
      <th>Phone number</th>
      <th>Gender</th>
      <th>Language</th>
      <th>Zip Code</th>
      <th>About</th>
    </tr>
  </thead>
  <tbody>

  <?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["number"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["language"]; ?></td>
            <td><?php echo $row["zipcode"]; ?></td>
            <td><?php echo $row["about"]; ?></td>
            
    </tr>
        <?php endwhile; ?>
</tbody
  ></table>
  <div class="btn">
        <button type="button"><a href="index.php">Go back</a></button>
        </div>
</body>
</html>