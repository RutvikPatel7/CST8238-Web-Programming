<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Book Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>  

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

<?php include 'book-header.inc.php'; ?>
   
<div class="container">
   <div class="row">  <!-- start main content row -->

      <div class="col-md-2">  <!-- start left navigation rail column -->
         <?php include 'book-left-nav.inc.php'; ?>
      </div>  <!-- end left navigation rail --> 

      <div class="col-md-10">  <!-- start main content column -->
        
         <!-- Customer panel  -->
         <div class="panel panel-danger spaceabove">           
           <div class="panel-heading"><h4>My Customers</h4></div>
           <table class="table">
             <tr>
               <th>Name</th>
               <th>Email</th>
               <th>University</th>
               <th>City</th>
            <tr>

<?php              
      $printing = file('customers.txt') or die('Error: cannot find file');
      $printarray = array();
      $delimiter = ',';

      foreach($printing as $info){

         $print = explode($delimiter,$info);
         $printarray[] = $print;
         $id = $print[0];
         $fname= utf8_encode($print[1]);
         $lname= utf8_encode($print[2]);
         $email = utf8_encode($print[3]);
         $university = utf8_encode($print[4]);
         $city = utf8_encode($print[6]);

         echo "<tr>
         <td><a href= 'BookRepCRM.php?id=$id'>".$fname." ".$lname."</a></td>
         <td>". $email."</td>
         <td>". $university."</td>
         <td>". $city."</td>
         </tr>"; 
      }
      echo "
      </table>
      </div>"; 

      $ordfromfile =null;
      foreach ($_GET as $temp => $check) {
         
         if ($temp == "id") {
            $id = $_GET["id"];
            
            $ordfromfile = file("orders.txt") or die('ERROR: Cannot find file');
            $capture = false;
            
            foreach ($ordfromfile as $ordinfo) {

               $bookorder = explode($delimiter, $ordinfo);

               if ($bookorder[1] == $id) {
                  
                  print_ord($id);  
                  $capture = true;
               break;
               }
            }

            if ($capture == false) {
               echo "<div class='panel panel-heading'> No Orders for that customer </div>";
            }
         }
      }

   function print_ord($id)
      {
         global $printarray;

         foreach ($printarray as $print) {

            if ($id == $print[0]) {

               echo '<div class="panel panel-danger spaceabove">
               <div class="panel-heading">
                  <h4>Orders from '. utf8_encode($print[1]." ".$print[2]).'s</h4>
               </div>
               <table class="table">
               <tr>
               <th></th>
               <th>ISBN</th>   
               <th>Title</th>
               <th>Category</th>
               </tr>';
            }
         }
         
         global $ordfromfile;
         
         foreach ($ordfromfile as $ordinfo) {
            
            $bookorder = explode(',', $ordinfo);
            if ($bookorder[1] == $id) {
               echo '
                  <tr>
                  <td><img src=.jpg></td>
                  <td>'.$bookorder[2] .'</td>
                  <td><a href>'.$bookorder[3] .'</a></td>
                  <td>'.$bookorder[4] .'</td>
                  </tr>';
            }
         }
         echo '</table> </div>';
      }
   ?>
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