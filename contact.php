<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "ashika1301";
$dbdatabase ="IT";
if(isset($_POST['contact']))
{
$dbc=mysqli_connect($dbhost,$dbuser,$dbpass,$dbdatabase) or die ('error connecting to Mysql server: mysqli_connect_error()');/*database connection*/
if(isset($dbc))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
	$res="insert into contact (name,email,subject,message) values ('$name','$email','$subject','$message')";
	$query=mysqli_query($dbc,$res)or die('error inserting the values,try again');
	if($query==1)
		header("testindex.php#contact");
	}
mysqli_close($dbc);
}
?>
