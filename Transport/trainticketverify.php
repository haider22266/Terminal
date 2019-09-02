<?php
    include 'config.php';
	         
	
	
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
        <h1 align="center" >Payment</h1>
		 <?php
          

        ?>
        <form action="trainticketverify.php" method="POST" align="center">
       
             <table align="center" >
              
              
                    
				
				 <tr>
                    <td><label>Contact Number<label>   </td>
                    <td> <input name="number" type="text" id="form" placeholder="Contact Number" required></input> </td>
                <tr>
				 </tr>
				 <tr>
                    <td><label>bKash Transaction Id<label>   </td>
                    <td> <input name="transaction" type="text" id="form" placeholder="Enter bKash Transaction Id" required></input> </td>
                <tr>
			
			</table>
				<button name="confirm" type="submit" class="btn">Confirm</button>
		<br>
		<br>
		
               
        </form>
       
		 <?php
           if(isset($_POST['confirm']))
            {
                
                $number=$_POST['number'];
                $transaction=$_POST['transaction'];
               
                   
					
					$insertion =" insert into trainticketverify  values('$number','$transaction')";
                          $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                alert ('Verified');
                                window.location.href='index.html';
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