<html>
<head>
	<title>Input</title>
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
<?php echo "<div id=\"content\" method=\"GET\" >";
	  echo "<form action=\"Input.php\" >"; 	?>
	  
	
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
	echo "</form>"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
                
	$name = "";
	$id = "" ;
	$telephone = "";
	$email = "";
	$position = "";
	$projects = array();

	if (isset($_GET['name'])){
	  $name = $_GET["name"];
	}

	if (isset($_GET['id'])){
		$id = $_GET["id"];
	}

	if (isset($_GET['telephone'])){
		$telephone = $_GET["telephone"];
	}

	if (isset($_GET['email'])){
		$email = $_GET["email"];
	}

	if (isset($_GET['position'])){
		$position = $_GET["position"];
	}

	if (isset($_GET['projects'])){
		$projects = $_GET["projects"];
	}

	if(strlen($name) > 0)
		echo "Employee Name  : $name  <br/> ";


	if(strlen($id) > 0)   
		echo "Employee ID  : $id <br/>";
	
	if(strlen($telephone) > 0)
		echo "Phone Number  : $telephone <br/>";

	if(strlen($email) > 0)                    
	 echo "Email  : $email <br/> ";

	if(strlen($position) > 0)  
	echo "Position  : $position <br/>";

	if(sizeof($projects) > 0){
		echo "Project(s) : ";

		foreach($projects as $val){
			echo "<br>";
			echo "$val  ";
		}
	}
}	
echo "</div>";	?>

<?php
require "Footer.php";?>
</body>
</html>