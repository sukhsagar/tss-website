<?php
session_start();

$u=$_SESSION["username"];
$p=$_SESSION["password"];
//echo $a;
//echo $b;

if($u==null || $p==null)
{
	 die("<script>location.href = 'admin1.php'</script>");
}
else
{


?>
<!DOCTYPE HTML>
<html>
<title>Technical Students Society</title>

<head>
<?php include 'common_bs_files.php';include 'connection.php'; 
   

?>
<style>
tr:hover{
	color:black;
	
}
.tr1:hover{
	color:black;
}
</style>
</head>


<body style="background-image:url(assets/bk8.jpg)">
 <?php
 include 'header.php'?><br/>
  <div class="container" id="brdr"  style="border:1px solid white;border-radius:2%">
  <div class="row">
  <div class="col-sm-12"  >
   </div>
   </div><br/>
	   <div class="row">
			   <div class="col-sm-12"  >
			   
			  <center> <h2 style="color:white"><u>Non-Technical Events</u></h2> </center>
	<?php	 include 'connection2.php';

//LET'S INITIATE CONNECT TO DB

$query3=mysqli_query($conn, "select * from events_record  ");
$query4=mysqli_fetch_array($query3);
echo mysqli_error($conn);
if($query4){
$query1=mysqli_query($conn, "select * from events_record where nontechflag='category-2' ORDER BY id DESC ");
echo "<table class='table table-hover' style='font-size:18px;color:white;background-image:url(assets/bk88.png);border-radius:2%'><tr style='font-size:20px;font-family:times new roman' class='tr1'><th> </th><th> </th><th> Name</th><th> Date</th><th>Image</th></tr>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td><a href='delete2.php?id=".$query2['id']."' class='btn btn-danger'>DELETE</a></td>";
echo "<td><a href='update_nontech.php?id=".$query2['id']."'  class='btn btn-primary'>UPDATE</a></td>";
echo "<td>".$query2['name']."</td>";
echo "<td>".$query2['day']."    ".$query2['month']."   ".$query2['year']."</td>";
echo "<td><img src=".substr($query2['image'], 6)." width= '100px' height= '50px'  ></td></tr>";
}

}
else
{
?>  <script>
  	document.write("<h1 style='color:white;font-size:20px;'>No Such Record Exists.. Sorry :(</h1>");
</script>
<?php
}

?>
		   
			   </div>
		</div>
    </div>
</body>
</html>
<?php
 
}

?>