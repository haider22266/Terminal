<?php
    include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .container{
            height:450px;
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
        <h1 align="center" >Sign In</h1>
        <form action="" method="POST" align="center">
        <img src="images/avatar.png"  width="100" height="100">
            <table align="center">
                <b>
                <tr>
                    <td><label>Email<label>   </td>
                    <td> <input name="email" type="text" id="form" placeholder="Enter Your Email" required></input> </td>
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
                       <a href="RegForm.php"> <button name="reg" type="button" class="btn">Registration</button></a>
                    </td>
                    <td>
                        <button name="login" type="submit" class="btn">Log-In</button>
                    </td>
                </tr>
                </b>
                
            </table>
               
        </form>
		
		<?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				$query = "select * from users where email='$email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					
					header( "Location: index1.php?email='$email'");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>
		
	</div>
</body>
</html>