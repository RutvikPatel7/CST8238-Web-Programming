<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css" />
</head>
<body>


<?php 
require "Header.php";
require "Menu.php";
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            case 'exp':
            return $this->a ** $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <td><input type="text" name="n1"></td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="exp">exp</option>
        </select></td>
        <td><input type="text" name="n2"></td>
    
        <td><input type="submit" name="submit" value="    =    "></td>
    </tr>
    
    <tr>
        <td><strong><?php 
        function prime($result){ 
    if ($result == 1) 
    return 0; 
    for ($i = 2; $i <= $result/2; $i++){ 
        if ($result % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
   
$key = prime($result); 
if ($key == 1) 
    echo $result." is a prime number"; 
else
    echo $result." is Not a prime number";
?>  
<p>
<?php 
function evenodd($result){ 
    if($result % 2 == 0){ 
        echo $result." is an even number";  
    } 
    else{ 
        echo $result." is an odd number"; 
    } 
} 
evenodd($result) 
?> 
 <strong></td>
    </tr>
</table>
</form>
<?php 	require "Footer.php";?>
</body>
</html>