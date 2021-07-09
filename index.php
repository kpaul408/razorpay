
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tsf Internship</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: skyblue;
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Children Charity</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <!-- <li><a href="customer.php">Customers</a></li> -->
     <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Customers <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li> -->
      <li><a href="#">About us</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

  
<div class="container">
    <div class="col-sm-12">

        <div class="col-sm-4" >
            
        </div>
        <div class="col-sm-4" style="background-color: #800080;">
            <center>

            <h1 style="color: white; width:100%;"><b>Donation</b></h1>
        </center>
        
    </div>
  <div class="col-sm-4" >
      
    </div>
    

    
   

    <div class="col-sm-12">
        <center>

  <div >
     <img src="download.png" style="background-color: white;" height="30%" width="30%">

            
        </div>
    <div class="btn btn-primary">
     
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pay</button>
  </div>
        </center>

    </div>
    



</div>






 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     <!--  Modal content -->
      <div class="modal-content">
        <div class="modal-header">
         
          <h3 class="modal-title">Donate</h3>
          <center>
          <img src="donate.png" alt="img" height="10%" width="50%" class="rounded-circle">
          </center>
        </div>
        <div class="modal-body"> 










        

          <form action="pay.php" method="post">
           <div class="form-group">
              <label for="Name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="name" name="customername">
            </div>

            <div class="form-group">
              <label for="phone" class="col-form-label">Phone:</label>
              <input type="number" class="form-control" id="phone" name="contactno">
            </div>

             <div class="form-group">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <div class="form-group">
             <label for="price" class="col-form-label">Amount:</label>
             <input type="number" class="form-control" required="" id="price" name="price">
            </div>

            
            <input type="submit" class="btn btn-primary" name="submit" value="Proceed To Pay">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>

        </div>
        <div class="modal-footer">
          
          
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
