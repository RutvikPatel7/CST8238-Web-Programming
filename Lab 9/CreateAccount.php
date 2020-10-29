<?php
require "header.php";
require "menu.php";
require_once "Connection.php";
$error = "";

session_start();
$_SESSION["firstname"] = NULL;
$_SESSION["lastname"] = NULL;
$_SESSION["telephone"] = NULL;
$_SESSION["email"] = NULL;
$_SESSION["sin"] = NULL;
$_SESSION["password"] = NULL;
$_SESSION["designation"] = NULL;
$_SESSION["admincode"] = NULL;

if(isset($_POST["firstname"]))
{
	$_SESSION["firstname"] = $_POST["firstname"];
}

if(isset($_POST["lastname"]))
{
	$_SESSION["lastname"] = $_POST["lastname"];
}


if(isset($_POST["telephone"]))
{
	$_SESSION["telephone"] = $_POST["telephone"];
}

if(isset($_POST["email"]))
{
	$_SESSION["email"] = $_POST["email"];
}

if(isset($_POST["sin"]))
{
	$_SESSION["sin"] = $_POST["sin"];
}

if(isset($_POST["password"]))
{
	$_SESSION["password"] = $_POST["password"];
}

if(isset($_POST["designation"]))
{
	$_SESSION["designation"] = $_POST["designation"];
}

if(isset($_POST["admincode"]))
{
	$_SESSION["admincode"] = $_POST["admincode"];
}

if( isset($_POST["firstname"]) || isset($_POST["lastname"])  || isset($_POST["telephone"])  || isset($_POST["email"]) || 
isset($_POST["sin"]) || isset($_POST["password"]) || isset($_POST["designation"]) || isset($_POST["admincode"])){
    
    
    if (strlen(trim($_SESSION["email"]," ")) != 0  && strlen(trim($_SESSION["password"]," ")) != 0){
        
        $datacon = mysqli_connect($host, $username, $password);
        
        if ($datacon->connect_error) {
			die("Connection failed: " . $datacon->connect_error);
		}
		//echo "Connected successfully" . "<br>";		
        
        mysqli_select_db($datacon, $datacon);
		
		$sqlQuery = "INSERT INTO employee (FirstName,LastName,EmailAddress,TelephoneNumber,SocialInsuranceNumber,Password,Designation,AdminCode) VALUES('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["telephone"]."', '". $_POST["sin"]."', '".$_POST["password"]. "', '".$_POST["designation"]."', '".$_POST["admincode"]."')";
		
		if (mysqli_query($datacon, $sqlQuery)) {
			
			//echo "Employee Successfully Added.<br>";
		   
			header("Location: ViewAllEmployees.php");
	       exit;
		} else {
			$error = "Employee Could not be added: " . $sql . "<br>" . mysqli_error($datacon);
		}
		
		mysqli_close($datacon);
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
<center><br><br><br>
<style>

</style>
<body>
	<div id=\"content\">";
	<form action=\"CreateAccount.php\" method="POST" >	
	  
<body>
        <table border="5">
	<tr>
		<td colspan="2"><center><h1>My World</h1></center></td>
	</tr>
	
	
	<tr>
		<td><center><h2>First Name:</center></h2></td>
		<td> <?php echo "<input type=\"text\" name=\"firstname\" placeholder=\"Enter First Name\" />"; ?> </td>
		
	</tr>
	
    
	<tr>
		<td><center><h2>Last Name:</center></h2></td>
		<?php echo "<td> <input type=\"text\" name=\"lastname\" placeholder=\"Enter Last Name\" /> </td>"; ?>
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
		<td><center><h2>SIN:</center></h2></td>
		<td> <?php echo "<input type=\"number\" name=\"sin\" placeholder=\"Enter Social Insurance Number\" />"; ?> </td>
		
	</tr>

    <tr>
		<td><center><h2>Password:</center></h2></td>
		<td> <?php echo "<input type=\"password\" name=\"password\" placeholder=\"Enter Password\" />"; ?> </td>	
	</tr>

    <tr>
		<td><center><h2>Designation:</center></h2></td>
		<td> <?php echo "<input type=\"text\" name=\"designation\" placeholder=\"Enter Designation\" />"; ?> </td>
		
	</tr>

    <tr>
		<td><center><h2>Admin Code:</center></h2></td>
		<td> <?php echo "<input type=\"number\" name=\"admincode\" placeholder=\"Enter Admin Code\" />"; ?> </td>
		
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

	</center>
    </table>
    </form>	

           <?php echo "<br>".$error;
            echo "</div>"; ?>
        <?php 
        require_once "Footer.php";
	?>
</body>
</html>