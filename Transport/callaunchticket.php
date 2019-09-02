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
        
        <form action="callaunchticket.php" method="get" align="center">
			
			
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
						<input name="choice[]" type="checkbox" class="btn" value="5" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="6" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="7" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="8" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="9" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="10" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="11" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="12" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="13" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="14" />  
                    </td>
					<td> 
						-------
					</td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="15" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="16" />  
                    </td>
                </tr>
				 <tr>
                    <td>
						<input name="choice[]" type="checkbox" class="btn" value="17" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="18" />  
                    </td>
					<td>
						<input name="choice[]" type="checkbox" class="btn" value="19" /> 
                    </td>
                   <td>
						<input name="choice[]" type="checkbox" class="btn" value="20" /> 
                    </td>
                    <td>
                         <input name="choice[]" type="checkbox" class="btn" value="21" />  
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
					
					$query="select*from callaunchticket where sit1='$food[0]'";
                    $query_check=mysqli_query($con,$query);
                    if($query_check)
                    {
                        if(mysqli_num_rows($query_check)>0)
                        {
                            echo"
                            <script>
                                alert ('Sit already Sold');
                                window.location.href='callaunchticket.php';
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
							echo "A3<br>";
						}
						if($food[$i] == 5){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 6){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 7){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 8){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 9){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 10){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 11){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 12){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 13){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 14){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 15){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 16){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 17){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 18){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 19){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 20){
							$price = $price + 500;
							echo "A3<br>";
						}
						if($food[$i] == 21){
							$price = $price + 500;
							echo "A3<br>";
						}
						
					}//end for
					
					
					echo "<br>Final Price is:" .$price. "<br>";
										

					
					echo"
                            <script>
                               
								alert ('Total Cost:'+$price);
                                window.location.href='launchticketverify.php';
                            </script>
                            ";
					$insertion =" insert into callaunchticket  values('$food[0]','$food[1]','$food[2]','$food[3]','$food[4]','$food[5]','$food[6]','$food[7]','$food[8]','$food[9]','$food[10]','$food[11]','$food[12]','$food[13]','$food[14]','$food[15]','$food[16]','$food[17]','$food[18]','$food[19]','$food[20]','$food[21]')";
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