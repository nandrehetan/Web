<?php
        include 'connect.php';

        if(isset($_POST['submit'])){
                $name=$_POST['username'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $password=$_POST['password'];

                $sql="INSERT INTO `user`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";

                $result=mysqli_query($con,$sql);

                if($result){
                        // echo "Data inserted succefully";
                        header("Location: display.php");
                }else{
                        die(mysqli_connect_error());
                }

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <style>
                .nav{
                        background-color: antiquewhite;
                        color: brown;
                        text-align: center;
                        padding: 20px 40px;
                }
                .box{
                        margin-left: 23%;
                        height: 250px;
                        width: 500px;
                        background-color: aliceblue;
                        text-align: center;
                        box-shadow: 7px 7px 7px;
                        padding: 80px 80px;
                        border-radius: 29%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        /* height: 100vh; */
                }
                #main-form label{
                        color: black;
                        font-weight: bolder;
                }
                #main-form input{
                        background-color: white;
                        width: 400px;
                }
                #main-form button{
                        color: brown;
                        background-color: coral;
                        cursor: pointer;
                        padding: 10px 100px;

                }
                
                #main-form button:hover{
                        background-color: cornflowerblue;
                        
                }


        </style>
</head>
<body>
        <div class="nav">
               <h1>Sign In</h1>
        </div>
        <div class="box">
                <form action="sign.php" method="post">
                        <div id="main-form">

                                <label for="name">Name   </label>
                                <input type="text" name="username" id="name" required autocomplete="off"> <br><br>

                                <label for="email">Email   </label>
                                <input type="email" name="email" id="email" required autocomplete="off"><br><br>

                                <label for="mobile">Mobile   </label>
                                <input type="tele" name="mobile" id="mobile" required autocomplete="off"><br><br>

                                <label for="pass">Password</label>
                                <input type="password" name="password" id="pass" required autocomplete="off"><br><br>

                                <button name="submit">
                                        <a href="display.php">
                                                Submit
                                        </a>
                                </button>
                                
                        </div>
                        
                </form>
                
        </div>

</body>
</html>