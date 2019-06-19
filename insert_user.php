<?php

$conn=mysqli_connect("localhost", "shahitya", "singlereg");

if($conn)
{

	$name=$_POST['name'];
	$college=$_POST['collegename'];
	$year=$_POST['year'];
	$dept=$_POST['department'];
	$email=$_POST['email'];
	$phone=$_POST['phonenumber'];



echo $name;
echo $collegename;
echo $year;
echo $department;
echo $email;
echo $phonenumber;

$sql="INSERT INTO singlereg(name,collegename,year,department,email,phonenumber) VALUES('$name','$collegename','$year','$department','$email','$phonenumber')";

$query=mysqli_query($conn,$sql);

if($query)
{
	
	
	echo '<script language="javascript">';
	echo 'alert("successfully Registered")';
	echo '</script>';

	header("Location:index.php?value=12");
}
else
{
	echo "sorry";
}

}
else
{
	echo "sorry";
}





?>