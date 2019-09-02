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
        <h1 align="center" >Add New Train</h1>
        <form action="train-add.php" method="POST" align="center">
        <img src="images/train3.jpg"  width="100" height="100">
             <table align="center">
                <b>
                <tr>
                    <td><label>Train Name<label>   </td>
                    <td> <input name="bname" type="text" id="form" placeholder="Enter Bus Name" required></td>
                <tr>
                    <td>
                        <label>Station From<label>
                    </td>
                    <td>
                        <input name="from" type="text" id="form" placeholder="Enter From" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Station To<label>
                    </td>
                    <td>
                        <input name="to" type="text" id="form" placeholder="Enter Station To" required>
                    </td>
                </tr>
                <tr>
                    <td>
                         <label>Total Sit<label>
                    </td>
                    <td>
                        <input name="sit" type="text" id="form" placeholder="Enter Bus Sit Number" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Time to Start<label>
                    </td>
                    <td>
                        <input name="time" type="text" id="form" placeholder="Enter Time" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Ticket Price<label>
                    </td>
                    <td>
                          <input name="price" type="text" id="form" placeholder="Ticket Price" required>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>License<label>
                    </td>
                    <td>
                          <input name="license" type="text" id="form" placeholder="License" required>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Again License<label>
                    </td>
                    <td>
                          <input name="clicense" type="text" id="form" placeholder="Again License" required>
                    </td>
                </tr>

                <tr>
                    <td>
                    <a href="busticketview.php"> <button name="back" type="button" class="btn">Cancel </button></a>
                    </td>
                    <td>
                         <button name="reg" type="submit" class="btn">Add Train</button>
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
                    $query="select*from traintbl where license='$license'";
                    $query_check=mysqli_query($con,$query);
                    if($query_check)
                    {
                        if(mysqli_num_rows($query_check)>0)
                        {
                            echo"
                            <script>
                                alert ('Email already in use');
                                window.location.href='train-add.php';
                            </script>
                            ";

                        }
                        else
                        {
                          $insertion =" insert into traintbl  values('$bname','$from','$to','$sit','$time','$price','$license')";
                          $run=mysqli_query($con,$insertion);
                          if($run)
                          {
                            echo"
                            <script>
                                alert ('Succesfully Register');
                                window.location.href='http://localhost/Transport/busticketview.php';
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
                                window.location.href='RegForm.php';
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