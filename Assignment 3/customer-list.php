<?php require "connection.php";

 $query = "select * from Customers order by lastName asc";
 $result = mysqli_query($connection, $query);

 $query1 = "select * from Subcategories order by SubcategoryName asc";
$result1 = mysqli_query($connection,$query1);

$query2 = "select * from Imprints order by Imprint asc";
$result2 = mysqli_query($connection,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">   

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_bookTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap theme CSS -->
   <link href="bootstrap3_bookTheme/theme.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_bookTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_bookTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'includes/book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'includes/book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-8">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>My Customers</h4></div>
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Address</th>
               <th><a href= >City</a></th>
               <th><a href= >Country</a</th>
             </tr>
<?php    

$totalRows = mysqli_num_rows($result);
    for ($counter = 0; $counter < $totalRows; ++$counter) {
                     $rows = mysqli_fetch_row($result);

?>
            <tr>
               <td><a href= ""><?php echo utf8_encode($rows[1]." ".$rows[2]) ?></a></td>
               <td><?php echo $rows[4]?></td>
               <td><?php echo $rows[5]?></td>
               <td><?php echo utf8_encode($rows[6])?></td>
               <td><?php echo $rows[9]?></td>
            </tr>
<?php   } ?>
           </table>
         </div>           
      </div>
      
      <div class="col-md-2">  <!-- start left navigation rail column -->
         <div class="panel panel-info spaceabove">
            <div class="panel-heading"><h4>Categories</h4></div>
               <ul class="nav nav-pills nav-stacked">
               <?php       
  
$totalRows = mysqli_num_rows($result1);
    for ($counter = 0; $counter < $totalRows; ++$counter) {
                     $rows = mysqli_fetch_row($result1);
?>
               <ul><a href= ><?php echo utf8_encode($rows[2])?></a></ul>
               <br>
<?php   } ?>
               </ul> 
         </div>
         
         <div class="panel panel-info">
            <div class="panel-heading"><h4>Imprints</h4></div>
            <ul class="nav nav-pills nav-stacked">
            <?php
$totalRows = mysqli_num_rows($result2);
    for ($counter = 0; $counter < $totalRows; ++$counter) {
                     $rows = mysqli_fetch_row($result2); ?>
               <ul><a href= ><?php echo utf8_encode($rows[1])?></a></ul>
               <br>
<?php   } ?> 
            </ul>
         </div>         
      </div>  <!-- end left navigation rail --> 


      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end container -->
   


   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_bookTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_bookTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_bookTheme/assets/js/holder.js"></script>
</body>
</html>