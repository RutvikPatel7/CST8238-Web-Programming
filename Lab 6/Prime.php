<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Find Prime numbers</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
    </head>
 
    <body>

    
		<?php
		require_once "Header.php";
		require_once "Menu.php";?>
		
        <h1>Prime numbers</h1>
 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            Enter Value1:<input type="number" name="minimum">
            Enter Value2:<input type="number" name="maximum">
            <input type="submit" name="submit" value="OK">
        </form>
 
        <?php
        if (isset($_POST['submit'])) {
            $minimum = $_POST['minimum'];
            $maximum = $_POST['maximum'];
           
            if ($minimum == $maximum) {
                echo "Enter different value ";
            } else {
                if ($minimum > $maximum) {
                    $t = $minimum;
                    $minimum = $maximum;
                    $maximum = $t;
                }
 
                function get_prime($minimum, $maximum) {
                    $primes = array();
                    for ($x = $minimum; $x <= $maximum; $x++) {
                        if ($x == 2) {
                            $primes[] = $x;
                        }
                        for ($i = 2; $i < $x; $i++) {
                            $r = $x % $i;
                            if ($r == 0) {
                                break;
                            }
                            if ($i == $x - 1) {
                                $primes[] = $x;
                            }
                        }
                    }
                    if ($primes == NULL) {
                        echo "No prime numbers found";
                    }  else {
                        echo "Total ". count($primes) ." prime numbers:<br>";
                        echo implode(" is prime number<br>", $primes);
                        echo " is prime number";
                    }
                     
                }
 
                get_prime($minimum, $maximum);
            }
        }
        ?>

    </body>
    <?php
		require_once "Footer.php";
	?>
    
</html>
