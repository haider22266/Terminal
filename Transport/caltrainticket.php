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
            width: 100%;
         
            border:3x solid black;
            border-radius:25px;
            margin:0 auto;
			font-size:20px;
			;
        }
        #form{
            margin: 5px;
           
            text-align:center;
            padding: 3px;
            height:30px;
            width: 100px;
            border-radius:5px;
        }
        .btn{
            margin: 0px;
           text-align:center;
           padding: 3px;
           height:20px;
           width: 50px;
           border-radius:5px;
            background-color:#3CB371;
          }
			.btns{
            margin: 0px;
           text-align:center;
           padding: 3px;
           height:30px;
           width: 200px;
           border-radius:5px;
            background-color:#3CB371;
                    }
					
        
    </style>
</head>
<body>
	<div class="container" align="center">
        <br>
        <h1 align="center" >Sit PLan</h1>
        
        <form action="caltrainticket.php" method="get" align="center">
			
			
			<table align="center">
				
                <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="1" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="2" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="4" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="1" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="2" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="4" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="1" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="2" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="4" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="1" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="2" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="4" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="1" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="2" />  
                    </td>
					<td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="3" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="4" />  
                    </td>
                </tr>
			</table>
			<input type="submit" value="Total Cost" class="btns" />
		</form>
		<br>
		<br>
		<br>
					  
		<?php
				if(isset( $_GET["choice"] ))
				{
					$food = $_GET["choice"];
					$c = count($food);
					$price = 0.0;
					
					$query="select*from caltrainticket where sit1='$food[0]'";
                    $query_check=mysqli_query($con,$query);
                    if($query_check)
                    {
                        if(mysqli_num_rows($query_check)>0)
                        {
                            echo"
                            <script>
                                alert ('Sit already Sold');
                                window.location.href='caltrainticket.php';
                            </script>
                            ";

                        }
                        else
                        {
					
					 for($i=0;$i<$c;$i++){
						if($food[$i] == 1){
							$price = $price + 500;
							echo "A1<br>";
						}
						if($food[$i] == 2){
							$price = $price + 500;
							echo "A2<br>";
						}
						if($food[$i] == 3){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 4){
							$price = $price + 500;
							echo "You have selected A4<br>";
						}
					}//end for
					
					
					echo "<br>Final Price is:" .$price. "<br>";
					
					echo"
                            <script>
                               
								alert ('Total Cost:'+$price);
                                window.location.href='trainticketverify.php';
                            </script>
                            ";
					$insertion =" insert into caltrainticket  values('$food[0]','$food[1]','$food[2]','$food[3]')";
					  $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                alert ('Verified');
                               
                            </script>
                            ";

                          }
                          else
                          {
                            echo"
                           
                            ";

                          }
						}
					}
				
				}//end isset
				else{
					echo 'Please choose something!';
					
					
				}
				
		?>
		
	</div>
</body>
</html>