<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phonenumber=$_POST['phonenumber'];
  $gender=$_POST['gender'];
  $language=$_POST['language'];
  $zipcode=$_POST['zipcode'];
  $about=$_POST['about'];
  

  if (empty($name)) {
    $errormsg[] = "You are required to fill this:";
}

if (empty($email)) {
    $errormsg[] = "You are required to fill this";
}
if (empty($password)) {
    $errormsg[] = "You are required to fill this";
}
if (empty($phonenumber)) {
    $errormsg[] = "You are required to fill this";
}
if (empty($gender)) {
    $errormsg[] = "You are required to fill this";
}
if (empty($language)) {
    $errormsg[] = "You are required to fill this";
}

if (empty($zipcode)) {
    $errormsg[] = "You are required to fill this";
}
if (empty($about)) {
    $errormsg[] = "You are required to fill this";
}

if (!empty($errormsg)) {
    // foreach ($errormsg as $error) {
        echo "Go back and ensure you've filled all fields!." . '<br>';
    }

  else{
    // echo"Successful";
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'users_db');
    $query = "INSERT INTO users(name,email,password,number,gender,language,zipcode,about)
    VALUES('$name','$email','$password','$phonenumber','$gender','$language','$zipcode','$about')";
    $result = mysqli_query($con,$query);
    echo "Successful: Your record has been saved.";
  }

?>
