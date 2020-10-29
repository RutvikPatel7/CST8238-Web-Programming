<?php 
require "connection.php";

$query = "select * from Books";
$result = mysqli_query($query);

$query1 = "select * from Subcategories";
$result1 = mysqli_query($query1);

$query2 = "select * from Imprints";
$result2 = mysqli_query($query2);

$query3 = "select * from Productionstatuses";
$result3 = mysqli_query($query3);

$query4 = "select * from Bindingtypes";
$result4 = mysqli_query($query4);

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

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- book panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>Book Details</h4></div>
           
           <table class="table">
             <tr>
               <th>Cover</th>
               <td></td>
             </tr>            
             <tr>
               <th>Title</th>
               <td><em></em></td>
             </tr>    
             <tr>
               <th>Authors</th>
               <td>
              
               </td>
             </tr>   
             <tr>
               <th>ISBN-10</th>
               <td></td>
             </tr>
             <tr>
               <th>ISBN-13</th>
               <td></td>
             </tr>
             <tr>
               <th>Copyright Year</th>
               <td></td>
             </tr>   
             <tr>
               <th>Instock Date</th>
               <td>
               </td>
             </tr>              
             <tr>
               <th>Trim Size</th>
               <td></td>
             </tr> 
             <tr>
               <th>Page Count</th>
               <td></td>
             </tr> 
             <tr>
               <th>Description</th>
               <td></td>
             </tr> 
             <tr>
               <th>Sub Category</th>
               <td></td>
             </tr>
             <tr>
               <th>Imprint</th>
               <td></td>
             </tr>   
             <tr>
               <th>Binding Type</th>
               <td></td>
             </tr> 
             <tr>
               <th>Production Status</th>
               <td></td>
             </tr>              
           </table>

         </div>           
      </div>



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