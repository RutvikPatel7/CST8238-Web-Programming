<html>
<head>
	<title>ArrayOfObject</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>


<?php 
require "Header.php";
require "Menu.php";
?>
<?php
include 'Employee.php';
include 'Supervisor.php';

$employee1 = new Employee(1,"Chris","Rogers");
 $employee2 = new Employee(2,"Matt","Prior") ;
 $employee3 = new Employee(3,"Cindy","Burnskill");
 $employee4 = new Employee(4,"Elizabeth","Ford");
 $employee5 = new Employee(5,"Dough","May");
 $employee6 = new Employee(6,"John","Hopkins");

$employees1 = array($employee1,$employee2,$employee3);
$employees2 = array($employee4,$employee5,$employee6);

// $supervisor1 = new Supervisor1(7,"Adam","Phillip",$employees1);
// $supervisor2 = new Supervisor2(8,"Nicolas","Jones",$employees2);

foreach($employees1 as $ary1)
{
	$supervisor1= new Supervisor($ary1->getEmployeeId(),$ary1->getFirstName(),$ary1->getLastName(),"Adam Phillip");
    echo $supervisor1;
    echo "</br>";
}
foreach($employees2 as $ary2)
{
	$supervisor2=new Supervisor($ary2->getEmployeeId(),$ary2->getFirstName(),$ary2->getLastName(),"Nicolas Jones");
    echo $supervisor2;
    echo "</br>";
}
?>
<?php
require "Footer.php";?>
</body>
<p></p>
<p></p>
<p></p>
</html>