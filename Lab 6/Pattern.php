<html>
<head>
	<title>Pattern</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>


		<?php
		require "Header.php";
		require "Menu.php";?>

		<?php		
			echo "<div id=\"content\">";
            echo "<pre>";
            echo "<p>";
            echo "<p>";
            echo "<p>";

         
for ($i = 1; $i <= 6; $i++) {
    

    for ($j = $i; $j < 6; $j++) {
    
    }
    

    for ($k = 1; $k < ($i * 2); $k++) {
    echo " *";
    }
    echo "</br>";
   }
    
   for ($i = 5; $i >= 1; $i--) {
     
    for ($j = 6; $j > $i; $j--) {
    
    }
    
    //Loop to print star as needed
    for ($k = 1; $k < ($i * 2); $k++) {
    echo " *";
    }
    echo "</br>";
   }
			echo "</div>";
		echo "</pre>";
		?>	
		
		<?php
		require "Footer.php";
	?>
</body>
</html>