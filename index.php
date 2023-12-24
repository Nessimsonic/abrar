<?php
$First Name=$_REQUEST["First Name"];
$Last Name=$_REQUEST["Last Name"];
$Telephone Number=$_REQUEST["Telephone Number"];
$Address=$_REQUEST["Address"];
$Date=$_REQUEST["Date"];
if(isset($_POST["btntest"]))
{
$host="local host";
$user="root";
$password="";
$db="Pizza Restaurant";
@$conn=mysqli_connect($host,$user,$password,$db);
$insert="insert into Customers Values ('$First Name','$Last Name','$Telephone Number','$Address','Date');
mysqli_query(conn,insert);
if($conn)
{
echo("<h1 'style=color:blue;">Your Registration is Done</h1>
}
else{

echo("<h1 'style=color:pink;">Your Registration is Failed</h1>
}
}
?>