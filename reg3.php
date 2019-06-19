<?php
 	$servername = "localhost";
			$username = "root";
			$password = "";
	$con = mysql_connect($servername, $username, $password);

			
			if (!$con) {
    		die("Connection failed: " . mysql_connect_error());
						}
 
			$db=mysql_select_db("registration",$con)or die(mysql_error());
            $group=rand(500,550);
            if(!empty($_POST['name1'])){
$rando=rand(100000,200000);
$random="SIT".$rando;
$e1="mpt";
$e2=null;
$e3=null;
$e4=null;
$e5=null;
$e6=null;
$name1 = $_POST['name1'];
$clg1 = $_POST['clg1'];
$year1 =$_POST['year1'];
$dept1 =$_POST['dept1'];
$phone =$_POST['phone1'];
$email = $_POST['email1'];
if (isset($_POST['e11'])) {
         $e2 = $_POST['e11'];
    }
    if (isset($_POST['e12'])) {
         $e3=$_POST['e12'];
    }
    if (isset($_POST['e13'])) {
         $e4 =$_POST['e13'];
    }
    if (isset($_POST['e14'])) {
         $e5 =$_POST['e14'];
    }

    $query = "insert into singledb value ('','$random','$group','$name1','$clg1','$year1','$dept1','$phone','$email','$e2','$e3','$e4','$e5','$e6','$e1')";
     $result = mysql_query($query,$con);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>";
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
$e11="mpt";
$e12=null;
$e13=null;
$e14=null;
$e15=null;
$e16=null;
if (isset($_POST['e21'])) {
         $e12 = $_POST['e21'];
    }
    if (isset($_POST['e22'])) {
         $e13=$_POST['e22'];
    }
    if (isset($_POST['e23'])) {
         $e14 =$_POST['e23'];
    }
    if (isset($_POST['e24'])) {
         $e15 =$_POST['e24'];
    }

    $query = "insert into singledb value ('','$random1','$group','$name2','$clg2','$year2','$dept2','$phone2','$email2','$e12','$e13','$e14','$e15','$e16','$e11')";
     $result = mysql_query($query,$con);
        if($result){
            echo <div class='form'>
<h3>You are registered successfully.</h3>
<br/>;
        }else{
        	echo "not done";
        }
    }
    if(!empty($_POST['name3'])){
        $ra=rand(100000,200000);
        $random2="SIT".$ra;
        $name3 = $_POST['name3'];
$clg3 = $_POST['clg3'];
$year3 =$_POST['year3'];
$dept3 =$_POST['dept3'];
$phone3=$_POST['phone3'];
$email3= $_POST['email3'];
$e21="mpt";
$e22=null;
$e23=null;
$e24=null;
$e25=null;
$e26=null;
if (isset($_POST['2e2'])) {
         $e22 = $_POST['2e2'];
    }
    if (isset($_POST['2e3'])) {
         $e23=$_POST['2e3'];
    }
    if (isset($_POST['2e4'])) {
         $e24 =$_POST['2e4'];
    }
    if (isset($_POST['2e5'])) {
         $e25 =$_POST['2e5'];
    }
    $query = "insert into singledb value ('','$random2','$group','$name3','$clg3','$year3','$dept3','$phone3','$email3','$e22','$e23','$e24','$e25','$e26','$e21')";
     $result = mysql_query($query,$con);
        if($result){
            echo <div class='form'>
<h3>You are registered successfully.</h3>
<br/>;
        }else{
            echo "not done";
        }
    }
    if(!empty($_POST['name4'])){
        $r=rand(100000,200000);
        $random3="SIT".$r;
        $name4 = $_POST['name4'];
$clg4 = $_POST['clg4'];
$year4 =$_POST['year4'];
$dept4 =$_POST['dept4'];
$phone4=$_POST['phone4'];
$email4= $_POST['email4'];
$e31="mpt";
$e32=null;
$e33=null;
$e34=null;
$e35=null;
$e36=null;
if (isset($_POST['3e2'])) {
         $e32 = $_POST['3e2'];
    }
    if (isset($_POST['3e3'])) {
         $e33=$_POST['3e3'];
    }
    if (isset($_POST['3e4'])) {
         $e34 =$_POST['3e4'];
    }
    if (isset($_POST['3e5'])) {
         $e35 =$_POST['3e5'];
    }
    $query = insert into singledb value ('','$random3','$group','$name4','$clg4','$year4','$dept4','$phone4','$email4','$e32','$e33','$e34','$e35','$e36','$e31')";
     $result = mysql_query($query,$con);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>";
        }else{
            echo "not done";
        }
    }
        ?>