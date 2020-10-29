<?php
session_start();
require_once "Connection.php";

if($_SESSION["email"]==null  || strlen($_SESSION["email"]) == 0)
   header("Location: http://www.pate0635.com/CST8238/Lab9/Login.php");
?>
<html>
<head>
	<title>Lab9</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>

		<?php
		require_once "Header.php";
		require_once "Menu.php";
        
        function getEmployee($firstName, $lastName){
            header("Location: http://www.pate0635.com/CST8238/Lab9/GetEmployee.php/firstname=$firstname,lastname=$lastanme");
        }

		
		echo "<div id=\"content\"> ";
        echo "<h1>Session State Data</h1>";
		if(isset($_SESSION["firstname"]) || isset($_SESSION["lastname"]) )
		{
			echo "Name : ".$_SESSION["firstname"]. "  ".  $_SESSION["lastname"] . " <br>";
		}
		if(isset($_SESSION["telephone"]))
		{
			echo "Telephone : ".$_SESSION["telephone"] . " <br>";
		}

		if(isset($_SESSION["sin"]))
		{
			echo "SIN : ".$_SESSION["sin"] . " <br>";
		}
    
        if(isset($_SESSION["email"]))
		{
			echo "Email : ".$_SESSION["email"] . " <br>";
		}

		if(isset($_SESSION["password"]))
		{
			echo "Password : ".$_SESSION["password"] . " <br>";
		}

		if(isset($_SESSION["designation"]))
		{
			echo "Designation : ".$_SESSION["designation"] . " <br>";
		}
		
			if(isset($_SESSION["admincode"]))
		{
			echo "Admin Code : ".$_SESSION["admincode"] . " <br>";
		}
		
		$connection = mysqli_connect($host, $username, $password);
			
			if(!$connection)
				die("Could not connect to the database. Remember this will only run on the Playdoh server.");
			
			mysqli_select_db($connection, $database);
			
			$sql = "SELECT * FROM Employee";		
				
			$result = mysqli_query($connection,$sql);
			
			$rowCount = mysqli_num_rows($result);
            
             if($rowCount > 0){
                echo "<h1>Database Data</h1>";
				    
                echo "<table>";
                 echo "<tr>";
                    echo "<th><b>First Name</b></th>";
                    echo "<th><b>Last Name</b></th>";
                    echo "<th><b>Email Address</b></th>";
                    echo "<th><b>Phone Number</b></th>";
                    echo "<th><b>SIN</b></th>";
                    echo "<th><b>Designation</b></th>";
                    echo "</tr>"; 
                for($i=0; $i<$rowCount; ++$i)
				{
					$row = mysqli_fetch_row($result);
                    echo "<tr>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    echo "<td>$row[5]</td>";
                    echo "<td>$row[6]</td>";
                    echo "</tr>";                
                }
                 echo "</table>";
             }
    
    echo "</div>";		
    
    require_once "Footer.php";
	?>
</body>
</html>