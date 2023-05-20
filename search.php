<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="database.css">
    <title>Search</title>
</head>
<body>
<div class="navbar">
        <div>
            <h1>Records</h1>
        </div>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
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
      <th>Phone number</th>
      <th>Password</th>
      <th>Gender</th>
      <th>Language</th>
      <th>Zip Code</th>
      <th>About</th>
    </tr>
  </thead>
  <tbody>          
    
    <?php
    
    
        while ($row = mysqli_fetch_assoc($result)):
        $Name=$row["name"];
        $Email=$row["email"];
        $Password=$row["password"];
        $Phonenumber=$row["number"];
        $Gender=$row["gender"];
        $Language=$row["languages"];
        $Zipcode=$row["zipcode"];
        $About=$row["about"];
        if ($search===$Name|| $search===$Email || $search===$Password || $search===$Phonenumber ||
        $search===$Gender || $search===$Language || $search===$Zipcode || $search===$About): 
            $Name1=$Name;
            $Email1=$Email;
            $Password1= $Password;
            $Phonenumber1=$Phonenumber;
            $Gender1=$Gender;
            $Language1=$Language;
            $Zipcode1=$Zipcode;
            $About1=$About;
        
        
        ?>
            <tr>
            <td><?php echo $Name1; ?></td>
            <td><?php echo $Email1; ?></td>
            <td><?php echo $Password1; ?></td>
            <td><?php echo $Phonenumber1; ?></td>
            <td><?php echo $Gender1; ?></td>
            <td><?php echo $Language1; ?></td>
            <td><?php echo $Zipcode1; ?></td>
            <td><?php echo $About1; ?></td>
            
        </tr>
        <?php endif;
                ?>
        <?php
            
            ?>
        <?php endwhile; ?>
        </tbody>
        </table>
        <div class="btn">
        <button type="button"><a href="./index.php">Back to form </a></button>
      <button type="button" ><a href="./record.php">Back to Records</a></button>
        </div>
</body>
</html>