<?php
 	$servername = "localhost";
			$username = "root";
			$password = "";
            $group=rand(100,150);
	$con = mysql_connect($servername, $username, $password);

			
			if (!$con) {
    		die("Connection failed: " . mysql_connect_error());
						}
			$db=mysql_select_db("registration",$con)or die(mysql_error());
			if($_POST['name1']){
$ra=rand(100000,200000);
$random="SIT".$ra;
$e1=null;
$e2=null;
$e3=null;
$e4=null;
$e5=null;
$e6=null;
$date=null;
$payment=null;
$name1 = $_POST['name1'];

$clg1 = $_POST['clg1'];

$year1 =$_POST['year1'];

$dept1 =$_POST['dept1'];

$phone =$_POST['phone1'];

$email = $_POST['email1'];
 
if (isset($_POST['e11'])) {
         $e2 ="*";
   // $e1 = mysqli_real_escape_string($con,$e1);
    }
    if (isset($_POST['e12'])) {
         $e3=="*";
   // $e2 = mysqli_real_escape_string($con,$e2);
    }
    if (isset($_POST['e13'])) {
         $e4 ="*";
   // $e3 = mysqli_real_escape_string($con,$e3);
    }
    if (isset($_POST['e14'])) {
         $e5 ="*";
   // $e4= mysqli_real_escape_string($con,$e4);
    }
     $query = "insert into singledb value ('','$random','$group','$name1','$clg1','$year1','$dept1','$phone','$email','$e2','$e3','$e4','$e5','$e1','$e6')";
        $result = mysql_query($query,$con);
        if($result){
            echo <div class='form'>
<h3>You are registered successfully.</h3>
<br/>;
        }else{
            echo "not done";
        }
    }
         if(!empty($_POST['name2'])){
        $ran=rand(100000,200000);
        $random1="SIT".$ran;
        $name2 = $_POST['name2'];
$clg2 = $_POST['clg2'];
$year2 =$_POST['year2'];
$dept2 =$_POST['dept2'];
$phone2=$_POST['phone2'];
$email2= $_POST['email2'];
$e11="ppt";
$e12=null;
$e13=null;
$e14=null;
$e15=null;
$e16=null;
if (isset($_POST['e21'])) {
         $e12 ="*";
    }
    if (isset($_POST['e22'])) {
         $e13="*";
    }
    if (isset($_POST['e23'])) {
         $e14 ="*";
    }
    if (isset($_POST['e24'])) {
         $e15 ="*";
    }
    $query = "insert into singledb value ('','$random1','$group','$name2','$clg2','$year2','$dept2','$phone2','$email2','$e12','$e13','$e14','$e15','$e11','$e16')";
     $result = mysql_query($query,$con);
        if($result){
            echo <div class='form'>
<h3>You are registered successfully.</h3>
<br/>;
        }else{
        	echo "not done";
        }
    }
 ?>