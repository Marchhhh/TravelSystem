<!DOCTYPE HTML>
<html>
<head>
	<title>Add information</title>
		<meta name="keywords" content="Add"/>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		<?php include("header.php") ?>
	</head>
	<body>
	<div class="container">
	<?php include("menu.php"); ?>
<div class="row">
<div class="col-md-2">
	<?php include("vmenu.php"); ?>
</div>

<div class="col-md-10">
<?php
session_start();

$db=mysqli_connect("127.0.0.1","root","","travel_information") or die('Could not connect:'.mysql_error());
mysqli_query($db,"set names utf8");

mysqli_select_db($db,"travel_information");
$a="INSERT INTO  `travel_information`.`schedule` (
`route` ,
`cost` ,
`introduction`
)
VALUES (
'$_POST[route]',  '$_POST[cost]',  '$_POST[introduction]')";


// echo $a;
mysqli_query($db,$a);
mysqli_close($db);
?>

<div class="jumbotron">
  <h2>添加成功</h2>

  <p>添加成功。</p>

<div class="row">
<div class="col-md-offset-10">
  <p><a class="btn btn-primary btn-lg" href="schedule.php">Ok</a></p>
  </div>
 </div>
</div>


</div>

</div>
</div>

<?php include("footer.php"); ?>
	</body>
</html>
