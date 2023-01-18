<html>
<head>
</head>
<body>
<?php
$name=$_POST['name'];
$msg=$_POST['msg'];

$con=mysqli_connect("localhost","root","");
if(!($con))
{
die("error in connecting to DB");
}
else
{
print "<i style='color:green'>connection successfull</i><br />";
}
$db=mysqli_select_db($con,"ss");
$query="insert into safe values('$name','$msg')";
mysqli_query($con,$query);
echo "<i style='color:blue'>Thank you!!!!</i><br />";
mysqli_close($con);
?>

</form>
</body>
</html>