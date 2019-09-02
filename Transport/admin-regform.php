<?php
    include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        .container{
            height:650px;
            width: 600px;
            background-color:#E6E6FA;
            border:3x solid black;
            border-radius:25px;
            margin:0 auto;
        }
        #form{
            margin: 5px;
           
            text-align:center;
            padding: 3px;
            height:30px;
            width: 250px;
            border-radius:5px;
        }
        .btn{
            margin: 5px;
           text-align:center;
           padding: 3px;
           height:40px;
           width: 220px;
           border-radius:5px;
            background-color:#3CB371;
                    }
        
    </style>
</head>
<body>
	<div class="container">
        <br>
        <h1 align="center" >Create Your Admin Account</h1>
        <form action="admin-regform.php" method="POST" align="center">
        <img src="images/avatar.png"  width="100" height="100">
            <table align="center">
                <b>
                <tr>
                    <td><label>Name<label>   </td>
                    <td> <input name="name" type="text" id="form" placeholder="Enter Your Name" required></input></td>
                <tr>
                    <td>
                        <label>Address<label>
                    </td>
                    <td>
                        <input name="address" type="text" id="form" placeholder="Enter Your Address" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact Number<label>
                    </td>
                    <td>
                        <input name="number" type="text" id="form" placeholder="Enter Your Contact Number" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Email<label>
                    </td>
                    <td>
                        <input name="email" type="text" id="form" placeholder="Enter Your Email" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password<label>
                    </td>
                    <td>
                        <input name="password" type="password" id="form" placeholder="Enter Your Password" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confirm Password<label>
                    </td>
                    <td>
                          <input name="cpassword" type="password" id="form" placeholder="Confirm Your Password" required></input>
                    </td>
                </tr>

                </tr>
                <tr>
                    <td>
                    <a href="login.php"> <button name="back" type="button" class="btn">Back to Login </button></a>
                    </td>
                    <td>
                         <button name="reg" type="submit" class="btn">Sign-Up</button>
                    </td>
                </tr>
                </b>
                
            </table>
               
        </form>
        <?php
           if(isset($_POST['reg']))
            {
                $name=$_POST['name'];
                $address=$_POST['address'];
                $number=$_POST['number'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $cpassword=$_POST['cpassword'];
                if($password==$cpassword)
                {
                    $query="select*from admin where email='$email'";
                    $query_check=mysqli_query($con,$query);
                    if($query_check)
                    {
                        if(mysqli_num_rows($query_check)>0)
                        {
                            echo"
                            <script>
                                alert ('Email already in use');
                                window.location.href='login.php';
                            </script>
                            ";

                        }
                        else
                        {
                          $insertion =" insert into admin (name,address,number,email,password) values('$name','$address','$number','$email','$password')";
                          $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                alert ('Succesfully Register');
                                window.location.href='busticketview.php';
                            </script>
                            ";

                          }
                          else
                          {
                            echo"
                            <script>
                                alert ('Connection Failed');
                                window.location.href='login.php';
                            </script>
                            ";

                          }
                        }
                    }
                    else{
                        echo"
                            <script>
                                alert ('Database error');
                                window.location.href='login.php';
                            </script>
                            ";

                    }

                }
                else
                {
                    echo"
                            <script>
                                alert ('Password Don't match');
                                window.location.href='admin-regform.php';
                            </script>
                            ";

                }

            }
            else
            {

            }

        ?>



	</div>
</body>
</html>