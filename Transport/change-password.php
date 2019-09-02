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
                <br>
				 <tr>
                    <td><label>Email<label>   </td>
                    <td> <input name="email" type="text" id="form" placeholder="Enter Your Email" required></input> </td>
                <tr>
                    <td><label>New Password<label>   </td>
						  <td><input name="password" type="text" id="form" placeholder="Enter Your Password" required></input> </td>
                </tr>
                <tr>
                    <td>
                        <label>Old Password<label>
                    </td>
                    <td>
                        <input name="opassword" type="text" id="form" placeholder="Enter Your Password" required></input>
                        
                    </td>
                </tr>
              
              
                <tr>
                    
                    <td>
                    </td>
                    <td>
                        <button name="change-password" type="submit" class="btn">Change Password</button>
                    </td>
                </tr>
                </b>
                
            </table>
               
        </form>
		
		<?php

			if(isset($_POST['change-password']))
					{
			
			@$email=$_POST['email'];
			@$password=$_POST['password'];
			@$opassword=$_POST['opassword'];
			//@$pass=$_POST['pass'];
			
			@$sql="UPDATE users SET password='$password' where password='$opassword' and email='$email'";
			if($con->query($sql)==TRUE)
			{
				echo "Data successfully  ";
				header("location:login.php");
			}
			else
			{
				echo "Data not found";
			}
					}
	
		?>
		
	</div>
</body>
</html>