<?php

session_start();
require_once "Connection.php";  
$_SESSION["email"] = NULL;

$_SESSION["password"] = NULL;

if(isset($_POST["email"]))
{
	$_SESSION["email"] = $_POST["email"];
}

if(isset($_POST["password"]))
{
	$_SESSION["password"] = $_POST["password"];
}

if( isset($_POST["email"]) || isset($_POST["password"]) ){
    
    
    if (strlen(trim($_SESSION["email"]," ")) != 0  && strlen(trim($_SESSION["password"]," ")) != 0){
        
        $database = mysqli_connect($host, $username, $password);
			
			if(!$database)
				die("Could not connect to the database. Remember this will only run on the Playdoh server.");
			
			mysqli_select_db($database, $database);
			
			$sqlQuery = "SELECT *FROM Employee where EmployeeID=(SELECT EmployeeID FROM Employee where EmailAddress=\"".$_SESSION["email"]."\" AND  Password=\"". $_SESSION["password"] ."\")" ;		
				
			$result = mysqli_query($database,$sqlQuery);
			
			$rowCount = mysqli_num_rows($result);
        
            if($rowCount == 0)
                $error = "Invalid email or password";
            else{
                $row = mysqli_fetch_row($result);
                $_SESSION["firstname"] = $row[1];
                $_SESSION["lastname"] = $row[2];
                $_SESSION["telephone"] = $row[4];
                $_SESSION["email"] = $row[3];
                $_SESSION["sin"] = $row[5];
                $_SESSION["password"] = $row[6];
                $_SESSION["desgination"] = $row[6];
                $_SESSION["admincode"] = $row[6];
                
                 header("Location: http://www.pate0635.com/CST8238/Lab9/ViewAllEmployees.php");
	               exit;
            }
    }
    else{
        $error = "Please enter email and password.";
    }
}
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

            echo "<div id=\"content\" >";
            echo "<h1>Login</h1>";
	  echo "<form method=\"POST\" action=\"Login.php\">"; 	?>
	  
<body>
        <table border="5">
	<tr>
		<td colspan="2"><center><h1>Log in</h1></center></td>
	</tr>
    
    <tr>
		<td><center><h2>Email Id:</h2></center></td>
		<td><?php echo "<input type=\"email\" name=\"email\" placeholder=\"Enter Email\"/>"; ?></td>
	</tr>
    <tr>
		<td><center><h2>Password:</center></h2></td>
		<td> <?php echo "<input type=\"password\" name=\"password\" placeholder=\"Enter Password\" />"; ?> </td>	
	</tr>


    <tr>
		<td colspan="2">
		<center>
		<h4>
			<?php echo "<input type=\"submit\" value=\"Submit Information\"/>";?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo "<input type=\"reset\" value=\"Reset\"/>"; ?>
		</h4>
		</center>
		</td>
	</tr>
</table>
</form>

	<?php   echo "<br> ".$error;
            echo "</div>";?>	
		
       <?php require_once "Footer.php";?>
</body>
</html>