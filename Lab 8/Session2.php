<?php session_start(); ?>
<html>
<head>
	<title>Session 2</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>

		<?php
		require_once "Header.php";
		require_once "Menu.php";

		echo "<div id=\"content\"> ";
        
        if(isset($_SESSION["name"]))
		{
			echo "Employee Name : ".$_SESSION["name"]. " <br>";
        }

        if(isset($_SESSION["id"]))
		{
			echo "Employee ID : ".$_SESSION["id"] . " <br>";
		}
        
        if(isset($_SESSION["telephone"]))
		{
			echo "Telephone : ".$_SESSION["telephone"] . " <br>";
		}

		if(isset($_SESSION["email"]))
		{
			echo "Email : ".$_SESSION["email"] . " <br>";
		}

		if(isset($_SESSION["position"]))
		{
			echo "position : ".$_SESSION["position"] . " <br>";
		}

		if(isset($_SESSION["projects"]))
		{
			echo "Project(s) : ".$_SESSION["projects"] . " <br>";
		}
		echo "</div>";
		
		?>	
		
		<?php
		require_once "Footer.php";
	?>
</body>
</html>