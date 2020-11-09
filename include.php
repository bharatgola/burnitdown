<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script>-->
 
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 600px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #4d4d4d;
      height: 100%;
    }
        .well{
          background-color: #ccff99;
        }
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
     .top {
  overflow: hidden;
  background-color: #333;
}
.top a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.top a:hover {
  background-color: #ddd;
  color: black;
}
.top .search-container {
  float: right;
}

.top input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.top .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.top .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .top .search-container {
    float: none;
  }
  .top a, .top input[type=text], .top .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .top input[type=text] {
    border: 1px solid #ccc;  
  }
}
.dash{
  background-color: #77ff33;
  font-family: sans-serif;
}
.col-sm-3.sidenav.hidden-xs{
  background-color:#333333 ;
}
.drpbtn{
  background-color: #0066ff;
  font-size: 40px;
}
  
  </style>
</head>
<body>
<div class="top">
<a href="" class="dash">Dashboard</a>
<a href="">Home</a>
<a href="alert.html">contact</a>
<a href="">About</a>
<div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div> 


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h1>Logo</h1>
      <ul class="nav nav-pills nav-stacked">
        <div class="dropdown"></div>
        <li class="active"><a href="jquery.html">Dashboard</a></li> 
       <li><a href="user.html"><i class="fa fa-user" style="font-size: 30px;"></i>   User Profile</a></li>
        <li><a href="management.html"><i class="  fa fa-file-o" style="font-size: 30px;"></i>  User Management</a></li>
      <li><a href="station.html"><i class="fa fa-bookmark-o" style="font-size: 30px;"></i> station Management</a></li>
        <li><a href="penalty.html"><i class="fa fa-stop-circle" style="font-size: 30px;"></i>     Payment</a></li>
        <li><a href="booking.html"><i class="fa fa-book" style="font-size: 30px;"></i>     Booking</a></li>
        <li><a href="report.php"><i class="  fa fa-bell-o" style="font-size: 30px;"></i>     sales to report</a></li>
        <li><a href="cart.php"><i class="fa fa-anchor" style="font-size: 30px;"></i>   Add to Cart</a></li>
      </ul><br>
    </div>
    <br>
    

</body>
</html>