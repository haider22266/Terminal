<?php
    include 'config.php';
	$query="select*from bustbl";
    $query_check=mysqli_query($con,$query);
	         
	
	
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        .container{
            height:100%;
            width: 100%;
            background-color:#E6E6FA;
            border:3x solid black;
            border-radius:25px;
            margin:0 auto;
			font-size:20px;
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
           width: 250px;
           border-radius:5px;
            background-color:#3CB371;
                    }
        
    </style>
</head>
<body>
	<div class="container">
        <br>
        <h1 align="center" >Purchasing Bus Ticket Now</h1>
		 <?php
          

        ?>
        <form action="busticket.php" method="POST" align="center">
       
             <table align="center" >
              
               </tr height="40px">
                    <td width=" 250px" >
                        <label>Station From<label>
                    </td>
                    <td>
                        <select name="from">
							<option value="">--Select--</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Rajshahi">Rajshahi</option>
							
						</select>
                    </td>
                </tr>
                <tr height="40px">
                    <td>
                        <label id="form">Station To<label>
                    </td>
                    <td>
                        <select name="to">
							<option value="" >--Select--</option>
							<option value="Dhaka">Dhaka</option>
							<option value="Rajshahi">Rajshahi</option>
							
						</select>
                    </td>
                </tr>
				 <tr>
                    <td><label>Email<label>   </td>
                    <td> <input name="email" type="text" id="form" placeholder="Enter Your Email" required></input> </td>
                <tr>
				 </tr>
				 <tr>
                    <td><label>Contact Number<label>   </td>
                    <td> <input name="number" type="text" id="form" placeholder="Contact Number" required></input> </td>
                <tr>
				 </tr>
				 <tr>
                    <td><label>Bus License<label>   </td>
                    <td> <input name="license" type="text" id="form" placeholder="Enter Bus License" required></input> </td>
                <tr>
			
			</table>
				<button name="confirm" type="submit" class="btn">Confirm</button>
		<br>
		<br>
		
		 <table align="center" class="table" border="1x solid black">
                <b>
                <tr>
                    <td><label>Bus Name<label>   </td>
					<td>
                        <label>Station From<label>
                    </td>
					<td>
                        <label>Station To<label>
                    </td>
					<td>
                         <label>Total Sit<label>
                    </td>
					<td>
                        <label>Time to Start<label>
                    </td>
					 <td>
                        <label>Ticket Price<label>
                    </td>
					  <td>
                        <label>License<label>
                    </td>
                     
             <?php while($row=mysqli_fetch_assoc($query_check)){ ?>       
                <tr>
                    <td>
						<?php echo $row['bname']?>
                    </td>
					<td>
						<?php echo $row['from']?>
                    </td>
					 <td>
						<?php echo $row['to']?>
                    </td>
					<td>
						<?php echo $row['sit']?>
                    </td>
					 <td>
						<?php echo $row['time']?>
                    </td>
					 <td>
						<?php echo $row['price']?>
						
                    </td>
					 <td>
						
						<?php echo $row['license']?>
                    </td>
					
					
                </tr>
			 <?php } ?>
                

                
                </b>
                
            </table>
			<br>
			<br>
			<br>
			
               
        </form>
       
		 <?php
           if(isset($_POST['confirm']))
            {
                $from=$_POST['from'];
                $to=$_POST['to'];
                $email=$_POST['email'];
                $number=$_POST['number'];
                $license=$_POST['license'];
               
                   
                        //  $insertion =" insert into busticketinfo (name,address,number,email,password) values('$name','$address','$number','$email','$password')";
						/* $insertion ="INSERT INTO busticketinfo  VALUES ('$from','$to','$email','$number','$license')";
						 
                          $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                alert ('Succesfully Register');
                                window.location.href='login.php';
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
                    else{
                        echo"
                            <script>
                                alert ('Database error');
                                window.location.href='busticket.php';
                            </script>
                            ";

                    }*/
					
					$insertion =" insert into busticketinfo  values('$from','$to','$email','$number','$license')";
                          $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                
                                window.location.href='calbusticket.php';
                            </script>
                            ";

                          }
                          else
                          {
                            echo"
                           
                            ";

                          }
						  
							}
                

            

        ?>


	</div>
</body>
</html>