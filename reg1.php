<?php
 	$servername = "localhost";
			$username = "root";
			$password = "";
	$con = mysql_connect("localhost", "shahitya", "singlereg");

			
			if (!$con) {
    		die("Connection failed: " . mysql_connect_error());
						}
 
			$db=mysql_select_db("shahitya",$con)or die(mysql_error());
$ra=rand(100000,200000);
$random="SIT".$ra;
$group=null;
$e1=null;
$e2=null;
$e3=null;
$e4=null;
$e5=null;
$e6=null;
$date=null;
$payment=null;
$name1 = $_POST['name'];

$clg1 = $_POST['clg'];

$year1 =$_POST['year'];

$dept1 =$_POST['dept'];

$phone =$_POST['phone'];

$email = $_POST['email'];
 
if (isset($_POST['event1'])) {
         $e1 = $_POST['event1'];
   // $e1 = mysqli_real_escape_string($con,$e1);
    }
    if (isset($_POST['event2'])) {
         $e2=$_POST['event2'];
   // $e2 = mysqli_real_escape_string($con,$e2);
    }
    if (isset($_POST['event3'])) {
         $e3 =$_POST['event3'];
   // $e3 = mysqli_real_escape_string($con,$e3);
    }
    if (isset($_POST['event4'])) {
         $e4 =$_POST['event4'];
   // $e4= mysqli_real_escape_string($con,$e4);
    }


        $query = insert into singlereg value ('','$random','$group','$name1','$clg1','$year1','$dept1','$phone','$email','$e1','$e2','$e3','$e4','$e5','$e6');
        $result = mysql_query($query,$con);
        if($result){
            echo <div class='form'>
 <h3>You are registered successfully</h3>
<br/>;
        }else{
        	echo "not done";
        }
?>