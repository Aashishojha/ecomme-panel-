
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://localhost/ecomme/panel/css/bootstrap.min.css"> <!-- for offline bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">


	<title>|dashboard|admin panel</title>
</head>

<body>

    
  <nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="no"  >
  <a class="navbar-brand" href="dashboard.php" data-toggle="tooltip" data-placement="right" title="aodev.in|Developer|Designer"><img src="http://localhost/ecomme/Img/sarwesh.png"  class="img-circle img-fluid" width="80px" height="50px" alt="aodev.in logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="collapsibleNavbar">

<ul class="navbar-nav  font-weight-bold">

<li class="nav-item active  dropdown">
<a class="nav-link " href="#">Product</a>
    <div class="dropdown-menu ">
        <a href="product1.php" class="dropdown-item">Add Product</a>
        <a href="display1.php" class="dropdown-item">View Product</a>
    </div>
</li>

<li class="nav-item dropdown">
  <a class="nav-link ">Customer</a>
    <div class="dropdown-menu">
    <a href="customer.php" class="dropdown-item">Add Customer</a>
    <a href="display2.php" class="dropdown-item ">View Customer</a>
   </div>
</li>

      <li class="nav-item dropdown">

        <a class="nav-link ">Order</a>
        <div class="dropdown-menu ">
          <a href="Order.php" class="dropdown-item">Add Order</a>
          <a href="display3.php" class="dropdown-item">View Order</a>
           </div>

      </li> 

      <li class="nav-item dropdown">
      	<a class="nav-link ">Delivery</a>
        <div class="dropdown-menu">
          <a href= "delivery.php" class="dropdown-item">Add Delivery</a>
          <a href="display3.php" class="dropdown-item">View Delivery</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
      	<a class="nav-link ">Category</a>
        <div class="dropdown-menu">
          <a href="category.php" class="dropdown-item">Add Cat</a>
          <a href="display5.php" class="dropdown-item">View Cat</a>
        </div>
      </li>
         <li class="nav-item ">
        <a href="sitemap.php" class="nav-link " >FSM</a>
       
      </li>
      
      </ul>

     <form class="form-inline ml-auto" action="http://localhost/Ecomme/login2.php">
 <input type="submit" name="logout" class=" btn btn-danger" value="Logout">

</form>
 </div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <img src="http://localhost/ecomme/Img/sarwesh.png"  class="img-circle img-fluid" width="80px" height="50px" alt="aodev.in logo">
       </div>
      <div class="col-sm-4">
           </div>
        <div class="col-sm-4">
         
             </div>
         
       
   
   
  </div>
</div>
 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->


 </body>
 </html>



