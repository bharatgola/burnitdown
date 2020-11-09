<!DOCTYPE html>
<html>
<head>
  <title>message</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body> 
<div class="top">
<a href="">Home</a>
<a href="">contact</a>
<a href="">About</a>
<div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div> 
  <div class="login-box">
    <form method="post" action="" name="myform" id="login" >
    <h1> Login credential </h1>
  <div class="user-box">
  User name<i class="fa fa-user"></i><input type="text" name="fname" id="fname" placeholder="Enter Phone num or Registered email id" required></br>
</div>
<div class="user-box">
  Password<i class="fa fa-lock"></i><input type="Password" name="password" id="password" minlength="6" placeholder="Please provide secure Password" required></br><i class="fa fa-eye"></i>
</div>
<div class="user-box">
<button class="third" >Let me catch you.!</button>
    <button class="third1" onclick="window.location.href='http://localhost/practice/form.php';">
      New User!
   <span style='font-size:100px; font-size: 20px;'>&#10068;</span></button>
<!--<input type="submit" class="third" id="third" name="submit">  -->
</div>
</form>               
<script type="text/javascript">
  console.log("hi");
  $(document).ready(function(){
  $("#login").submit(function(){
  if(fname.value == localStorage.getItem("email") && password.value == localStorage.getItem("pwd")) {
    jQuery.alerts.okButton = 'Yes';
     jQuery.alerts.cancelButton = 'No';  
       jconfirm("you are logged in ..!!", '', function(r){
        if (r==true){
               $('#login').submit();
        }
       }
        );
      
        //window.location.replace('file:///C:/xampp/htdocs/practice/jquery.html');
       // window.location.href = "file:///C:/xampp/htdocs/practice/jquery.html";
    }else {
         alert("ERROR"); 
    //  window.location.href = "error.php";
      //  header('Location: http://localhost/practice/error.php?$id=1');
    }
});
});
</script> 
</body>
</html>
