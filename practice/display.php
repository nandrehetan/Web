<?php
        include 'connect.php';

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display</title>
        

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
                        background-color: black;
                        
                }

                .btn1{
                        background-color: white;
                        color: red;
                        font-size: large;
                        border-color: black 100px;
                        height: 75px;
                        width: 110px;
                        padding: 11px 11px 11px;
                        margin-left: 420px;
                        border-radius: 20px 20px;
                        
                }
                .table{
                        margin-top: 100px;
                }



        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <div class="btn1">
                <a href="sign.php">
                        Add User
                </a>
                
        </div>
        <div id="table">
        <table class="table">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Password</th>
                <th scope="col">Opeations</th>
                </tr>
                </thead>
                <tbody>

                        <?php

                                $sql = "SELECT * FROM `user`";
                                $result = mysqli_query($con,$sql);

                                if($result){
                                        while($row=mysqli_fetch_assoc($result)){
                                                $id=$row['id'];
                                                $name=$row['name'];
                                                $email=$row['email'];
                                                $mobile=$row['mobile'];
                                                $password=$row['password'];

                                                echo '<tr>
                                                        <th scope="row">'.$id.'</th>
                                                        <td>'.$name.'</td>
                                                        <td>'.$email.'</td>
                                                        <td>'.$mobile.'</td>
                                                        <td>'.$password.'</td>
                                                </tr>';

                                        }
                                }

                        ?>

                
                </tbody>
                </table>
        </div>

</body>
</html>