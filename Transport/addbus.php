<?php
    include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        .container{
            height:700px;
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
        <h1 align="center" >Add New Bus</h1>
        <form action="addbus.php" method="POST" align="center">
        <img src="images/bus3.jpg"  width="100" height="100">
            <table align="center">
                <b>
                <tr>
                    <td><label>Bus Name<label>   </td>
                    <td> <input name="bname" type="text" id="form" placeholder="Enter Bus Name" required></input></td>
                <tr>
                    <td>
                        <label>Station From<label>
                    </td>
                    <td>
                        <input name="from" type="text" id="form" placeholder="Enter From" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Station To<label>
                    </td>
                    <td>
                        <input name="to" type="text" id="form" placeholder="Enter Station To" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Total Sit<label>
                    </td>
                    <td>
                        <input name="sit" type="text" id="form" placeholder="Enter Bus Sit Number" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time to Start<label>
                    </td>
                    <td>
                        <input name="time" type="text" id="form" placeholder="Enter Time" required></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Ticket Price<label>
                    </td>
                    <td>
                          <input name="price" type="text" id="form" placeholder="Ticket Price" required></input>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>License<label>
                    </td>
                    <td>
                          <input name="license" type="text" id="form" placeholder="License" required></input>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Again License<label>
                    </td>
                    <td>
                          <input name="clicense" type="text" id="form" placeholder="Again License" required></input>
                    </td>
                </tr>

                <tr>
                    <td>
                    <a href="login.php"> <button name="back" type="button" class="btn">Cancel </button></a>
                    </td>
                    <td>
                         <button name="reg" type="submit" class="btn">Add Bus</button>
                    </td>
                </tr>
                </b>
                
            </table>
               
        </form>
        <?php
			if(isset($_POST['reg']))
			{
				$bname=$_POST['bname'];
				$from=$_POST['from'];
				$to=$_POST['to'];
				$sit=$_POST['sit'];
				$time=$_POST['time'];
				$price=$_POST['price'];
				$license=$_POST['license'];
				$clicense=$_POST['clicense'];
				
				if($license==$clicense)
				{
					$query = "select * from bustbl where license='$license'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This bus Already exists.. Please try another lisence!")</script>';
						}
						else
						{
							
							
							$sql =" insert into bustbl (bname,from,to,sit,time,price,license) values('$bname','$from','$to','$sit','$time','$price','$license')";
                      if($con->query($sql)==TRUE)
							{
								echo "Data successfully  inserted";
								header( "Location: login.php");
							}
							else
							{
								echo "Data not inserted";
							}
													
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("License and Confirm Password do not match")</script>';
				}
										
			}
			else
			{
			}
		?>



	</div>
</body>
</html>