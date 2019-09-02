<?php
    include 'config.php';
	$email=$_GET['email'];
	$query="select*from users where email=$email";
    $query_check=mysqli_query($con,$query);
	$user=mysqli_fetch_assoc($query_check);
	//var_dump($user);
	//echo $use['email'];
	
	
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
                    <td><label>Name :<label>   </td>
                    <td>  <?php echo $user['name']?></input></td>
                <tr>
                    <td>
                        <label>Address :<label>
                    </td>
                    <td>
						 <?php echo $user['address']?>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Contact Number :<label>
                    </td>
                    <td>
						<?php echo $user['number']?>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Email :<label>
                    </td>
                    <td>
						<?php echo $user['email']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password :<label>
                    </td>
                    <td>
						<?php echo $user['password']?>
                    </td>
                </tr>
                

                
                
            </table>
			<a href="bus-service.php?email='<?php echo $user['email']?>'"> <button name="back" type="button" class="btn">Back to Previous Page </button></a>
               
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
					
					header( "Location: RegForm.php?email='$email'");
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