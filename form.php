<?php
if(isset($_POST['submit']))
    {

    $name1 = $_POST['name'];
    $mail = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['cal'];
    $det = $_POST['from1'];
    

    
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="stores";
	$con = mysqli_connect($hostname, $username, $password, $dbname);
	if($con){
		echo "success";
	}
	else{
		echo "no";
	}

	
     $sql = "INSERT INTO `results`(`name`,email, `mobile`, `cal`,from1) VALUES ('$name1','$mail','$mobile','$date','$det')";
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
        mysqli_close($con);
    }
        ?>