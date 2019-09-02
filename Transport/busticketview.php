<?php
    include 'config.php';
	$query="select*from bustbl";
    $query_check=mysqli_query($con,$query);
	$query1="select*from traintbl";
    $query_check1=mysqli_query($con,$query1);
	
	
	
?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        .container{
            height:700px;
            width: 100%;
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
            width: 100px;
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
        <h1 align="center" >Bus Information</h1>
        <form action="busticketview.php" method="POST" align="center">
        <img src="images/bus3.jpg"  width="100" height="100">
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
			<a href="bus.php"> <button name="back" type="button" class="btn">Add Bus </button></a>
			
			<br>
			<h1 align="center" >Train Information</h1>
			<img src="images/train3.jpg"  width="100" height="100">
             <table align="center" class="table" border="1x solid black">
                <b>
                <tr>
                    <td><label>Train Name<label>   </td>
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
                     
             <?php while($row1=mysqli_fetch_assoc($query_check1)){ ?>       
                <tr>
                    <td>
						<?php echo $row1['bname']?>
                    </td>
					<td>
						<?php echo $row1['from']?>
                    </td>
					 <td>
						<?php echo $row1['to']?>
                    </td>
					<td>
						<?php echo $row1['sit']?>
                    </td>
					 <td>
						<?php echo $row1['time']?>
                    </td>
					 <td>
						<?php echo $row1['price']?>
						
                    </td>
					 <td>
						
						<?php echo $row1['license']?>
                    </td>
					
					
                </tr>
			 <?php } ?>
                

                
                </b>
                
            </table>
			<a href="train-add.php"> <button name="back" type="button" class="btn">Add Train </button></a>
               
        </form>
      



	</div>
</body>
</html>