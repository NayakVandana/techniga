<!doctype html>
<html>
<head>
<style>
ul
{
	list-style-type:none;
}
ul li{
	display:inline;
	margin-left:30px;
}
ul li a
{
	padding-top:10px;
	text-decorration:none;
}
</style>
</head>
<body>
<ul>
<li><a href="checkuser.php">check user</a></li>
<li><a href="viewcheckuser.php">view check user</a></li>
<li><a href="deleteuser.php">delete user</a></li>
<li><a href="addcamps.php">add camps</a></li>
<li><a href="sendreq.php">send request for requirement</a></li>
<li><a href="viewsendreq.php"> view send request for requirement</a></li>

</ul>
<?php
$host='localhost';
$username='root';
$password='';
$dbname='blood_donate';
$con=mysqli_connect($host,$username,$password,$dbname);
//$edited=$_REQUEST['id'];
//$id=$_POST['uid'];
		$qry="select * from tbl_checkuser";
		$res=mysqli_query($con,$qry);
		echo '<center>';
		echo '<table border="1px"><tr><th> id </th> <th> username</th> <th>email</th> <th>contact</th><th>address</th><th>bloodgroup</th><th>Edit</th></tr>';
		while($row=mysqli_fetch_assoc($res))
		{
echo '<tr><td>'.$row['id'].'</td> <td>'.$row['username'].'</td> <td>'.$row['email'].'</td> <td>'.$row['contact'].'</td><td>'.$row['address'].'</td><td>'.$row['bloodgroup'].'</td><td><a href="checkuser.php?editid='.$row['id'].'">Edit</td></tr>';
		}
		echo '</table></center>';
	

?>