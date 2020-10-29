<?php

session_start();
$_SESSION["name"] = NULL;
$_SESSION["id"] = NULL;
$_SESSION["telephone"] = NULL;
$_SESSION["email"] = NULL;
$_SESSION["position"] = NULL;
$_SESSION["projects"] = NULL;

if(isset($_POST["name"]))
{
	$_SESSION["name"] = $_POST["name"];
	
}

if(isset($_POST["id"]))
{
	$_SESSION["id"] = $_POST["id"];
	
}


if(isset($_POST["telephone"]))
{
	$_SESSION["telephone"] = $_POST["telephone"];
}

if(isset($_POST["email"]))
{
	$_SESSION["email"] = $_POST["email"];
}

if(isset($_POST["position"]))
{
	$_SESSION["position"] = $_POST["position"];
}

if(isset($_POST["projects"])){
    $stringData = implode(",",$_POST["projects"]);
    $_SESSION["projects"] = $stringData;
}

if( isset($_POST["name"]) || isset($_POST["id"])  || isset($_POST["telephone"])  || isset($_POST["email"]) 
|| isset($_POST["position"]) || isset($_POST["projects"]) ){
    header("Location: Session2.php");
	exit;
}
?>

<html>
<head>
	<title>Session 1</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<?php 
require "Header.php";
require "Menu.php";
?>
<center><br><br><br>
<style>

</style>
<body>
<?php echo "<div id=\"content\" >";
	  echo "<form action=\"Session1.php\" method=\"POST\" >"; 	?>
	  
	
 	<table border="5">

	
	<tr>
		<td colspan="2"><center><h1>My World</h1></center></td>
	</tr>
	
	
	<tr>
		<td><center><h2>Employee Name:</center></h2></td>
		<td> <?php echo "<input type=\"text\" name=\"name\" placeholder=\"Enter your Name\" />"; ?> </td>
		
	</tr>
	
    
	<tr>
		<td><center><h2>Employee ID:</center></h2></td>
		<?php echo "<td> <input type=\"text\" name=\"id\" placeholder=\"Enter your id\" /> </td>"; ?>
	</tr>
    
	<tr>
		<td><center><h2>Telephone number:</center></h2></td>
		<td><?php echo "<input type=\"number\" name=\"telephone\" placeholder=\"Enter your Telephone\" /> ";?></td>
	</tr>
	
	<tr>
		<td><center><h2>Email Id:</h2></center></td>
		<td><?php echo "<input type=\"email\" name=\"email\" placeholder=\"Enter Email\"/>"; ?></td>
	</tr>
	
	
	<tr>
		<td><center><h2>Position:</h2></center></td>
		<td><?php
			echo "<input type=\"radio\" name=\"position\" value=\"Manager\"/>Manager";
			echo "<input type=\"radio\" name=\"position\" value=\"Teamlead\"/>Team lead";
            echo "<input type=\"radio\" name=\"position\" value=\"Developer\"/>IT Developer";
			echo "<input type=\"radio\" name=\"position\" value=\"Analyst\"/>IT Analyst";
			?>
		</td>
	</tr>	
	
	<tr>
		<td><center><h2>IT PROJECTS:</h2></center></td>
		<td>
	<div>
<?php echo "<input type=\"checkbox\" value=\"Project A\" name=\"projects[]\">"; ?>
<label for="project A">Project A</label>
</div>

<div>
  <?php echo "<input type=\"checkbox\" value=\"Project B\" name=\"projects[]\">"; ?>
  <label for="project B">Project B</label>
</div>

<div>
  <?php echo "<input type=\"checkbox\" value=\"Project C \" name=\"projects[]\">"; ?>
  <label for="project C">Project C</label>
</div>

<div>
  <?php echo "<input type=\"checkbox\" value=\"Project D\" name=\"projects[]\">"; ?>
  <label for="project D">Project D</label>
</div>
		</td>
	</tr>	
	
	<tr>
		<td colspan="2">
		<center>
		<h4>
			<?php echo "<input type=\"submit\" value=\"Submit\"/>";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo "<input type=\"reset\" value=\"Reset\"/>"; ?>
		</h4>
		</center>
		</td>
	</tr>
	</center>	
	 <?php echo "</table>";
    echo "</form>"; 
    
    echo "</div>";
    ?>


<?php
require "Footer.php";?>
</body>
</html>