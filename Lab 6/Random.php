<html>
<head>
	<title>Random</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>

<body>

		<?php
		require "Header.php";
		require "Menu.php";?>
		
	<?php
			echo "<div id=\"content\">";
			echo "<h2> Random Number: </h2>";
				$num=""; 
				$one=0; 
				$two=0;
				$three=0;
				$four=0;
				$five=0;
			   
				for($i=500;$i>=1;$i--){
					$num= rand(1,50);
					
					if($num>=1 && $num<=10){
						++$one;
					}
					
					if($num>=11 && $num<=20){
						++$two;
					}

					if($num>=21 && $num<=30){
						++$three;
					}

					if($num>=31 && $num<=40){
						++$four;
					}

					if($num>=41 && $num<=50){
						++$five;
					}
				}

			   echo "$one numbers are randomly generated in the range between 01 - 10";
			   echo"<br>";
			   
			   echo "$two numbers are randomly generated in the range between 11 - 20";
			   echo"<br>";
			 
			   echo "$three numbers are randomly generated in the range between 21 - 30";
			   echo"<br>";
			 
			   echo "$four numbers are randomly generated in the range between 31 - 40";
			   echo"<br>";
			 
			   echo "$five numbers are randomly generated in the range between 41 - 50";
			   echo"<br>";

			   echo "<h1>Histogram of stars as a percentage of the number of values are displayed below</h1>";
               echo "01-10:";
			 
			   method($one);
			   echo"<br>";
			   echo "11-20:";
			   
			   method($two);
			   echo"<br>";
			   echo "21-30:";
			 
			   method($three);
			   echo"<br>";
			   echo "31-40:";
			 
			   method($four);
			   echo"<br>";
			   echo "41-50:";
			   method($five);
			   
			function method($temp)
			{
			   $Per_of_randnum=$temp*100/500;
			   
			   for($a=0;$a<$Per_of_randnum;$a++)
			   {
				   echo "*";
			   }
			}
			echo "</div>"; ?>	
		
		<?php require "Footer.php";?>
</body>
</html>