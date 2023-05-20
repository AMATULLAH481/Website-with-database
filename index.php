<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css?v=<?php echo time();?>">
    <title>Assignment</title>
</head>

<body>

    <div class="form-container">
        <img src="./20220317_113650 (3).jpg" alt="my-passport">
        <div id="form">
            <form action="process.php" method="post">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name"> <br>
                <label for="email"> Email: </label>
                <input type="Email" name="email" id="email"> <br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password"> <br>
                <label for="phonenumber">Phone-Number: </label>
                <input type="number" name="phonenumber" id="phonenumber" placeholder="'Numbers only please"> <br>
                <label for="gender">Gender: </label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label> <br>
                <label for="language" id="language">Select Languages:
                    <select name="language" id="language">
                        <option value="language">Select Languages</option>
                        <?php
                         $con = mysqli_connect('localhost','root');
                         mysqli_select_db($con,'users_db');
                          $fetch_language=mysqli_query($con,"SELECT*from language");
                         while($row=mysqli_fetch_array($fetch_language)){
                         ?>
                         <option>
                            <?php echo $row['languages'];?>
                         </option>   
                         <?php }
                         mysqli_close($con);
                         ?>
                    </select>
                </label>
                <br>
                <label for="zipcode"> Zipcode: </label>
                <input type="number" name="zipcode" id="zipcode"><br>
                <label for="about"> About: </label>
                <textarea name="about" id="about" cols="15" rows="7"></textarea> <br>
                <div class="buttonz">
                <input type="submit" onclick="return validateForm()" value="Register"> 
               <button type="button"><a href="./record.php">Check Records</a></button>
                </div>
                <div id="error-message"></div>
            </form>
        </div>
    </div>
</body>
<script src="./index.js?v=<?php echo time();?>"></script>

</html>