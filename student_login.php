<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page-Student</title>
</head>
<style>

body{
    margin: 0;
    padding: 0%;
    background-image: url(login.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
header{
    overflow: hidden;
    margin: 0%;
    padding: 2px;
    display: grid;
    grid-template-columns:0.5fr 1fr 1.7fr 12fr 2fr;
    color: white;
    font-size: large;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-color: #B50000;
}

header a, header div{    
    text-decoration: none;
    color: white;
}
.dropdown {
    float: left;
    overflow: hidden;
  }  
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 2;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
    
    #form {
        border-radius: 30px;
        height: 400px;
        width: 400px;
        display: flex;
        flex-direction: column;
        background-color:rgba(3, 74, 98, 0.658);
        align-content: center;
        justify-content: center;
        text-align: center;
        flex-wrap: wrap;
        margin: 7%;
    }
    #form:hover{
        transform: scale(1.1);
		box-shadow: 20px 20px 10px rgb(46, 46, 28);
		
    }

    input {
        font-size: 20px;
        border: none;
        text-decoration-color: white;
        color: white;
        border-bottom: 1px solid black;
        text-align: center;
        height: 8%;
        background-color: rgba(240, 248, 255, 0.664);
    }

    #regiJump {
        margin-top: 20px;
        text-decoration: none;
        color: white;
        text-align: center;
    }
    legend{
        color: white;
        text-align: center;
        font-family:  sans-serif;
        font-weight: bold;
        font-size: 20px;
    }
    footer{
      flex-wrap: wrap;
      text-align: center;
      background-color: #B50000;
      color: white;
      padding: 10px;
  }
    input[type="submit"]{
        text-align: center;
        font-family: Calibri;
        background-color: indianred;
        color: white;
        font-size: 20px;
        padding: 10px 20px 20px 20px;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        width: 80px;
        height: 40px;
        margin-left: 20%;
    }
  
</style>

<body>
        <header id="navbar">
            <br>
            <a href="index.html">Home</a>
            <a href="..//Order Menu/Order Menu Page.html">Order Online</a>
            <a href="">Cart</a>
            <div class="dropdown">
                <section class="dropbtn">Login</section>
                <div class="dropdown-content">
                <a href="student_login.php">Student Login</a>
                <a href="login_Staff.php">Staff Login</a>
                </div>
            </div>
        </header>
        <div id="form">
            <legend>Student Login</legend>
            <br><br>
            <form action="student_login.php" method="post">

                <input type="email" placeholder="Username/Email-Id" name="mail">
                <br>
                <input type="password" placeholder="Password" name ="pass">
                <br>
                <input type="submit" name="Login" value="Login">
                <a href="Register.php" id="regiJump">New User? Click here to register.</a>

            </form>
        </div>

        <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "canteen_register";
                $connect = mysqli_connect($servername, $username, $password, $database);

                $email = $_POST['mail'];
                $passwrd = $_POST['pass'];


                $sqlQ = "Select * from register where (email = '$email' AND password = '$passwrd') AND position = 'student' ";
                $result = mysqli_query($connect,$sqlQ);
                $rows = mysqli_num_rows($result);


                
                if ($rows==1) {
                    echo "<script> alert('Welcome back, lets get you some good food.')</script>";
                }
                else {
                    echo "<script> alert('Wrong credentials, please enter password and email carefully.')</script>";
                    
                }

        ?>

        <footer>
            Copyright © 2021 Keshav Mahavidyalaya
         </footer>
    </div>
</body>
</html>