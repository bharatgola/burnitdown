<html lang="en">
<body>
<head>
<title>form validation</title>
 <link rel='stylesheet' type='text/css' href='form.css'>
</head>
<meta name="viewport" content="width=device-width" initial-scale="1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>  
function validateform(){  
var fname=document.myform.fname.value;  
var pwd=document.myform.pwd.value; 
if (fname==null || fname==""){  
  alert("Name can't be blank");     // for first name user should enter a name . blank fill will not considered 
  return false;  
}else if(pwd.length<6){  
  alert("Password should be at least 6 characters long.");    // psswrd should be 6 characters long
  return false;  
  } 
}  
</script>
<script>
 function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please provide a valid credentials (e-mail address) \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
    }     
  }
</script>
<script  type="text/javascript">
	function Validate() {
        var password = document.getElementById("pwd").value;
        var confirmPassword = document.getElementById("repwd").value;
        if (password != confirmPassword) {
            alert("Please provide the same password from the user.");
            return false;
        }
        return true;
    }
</script>

<script>
function myFunction() {
  var x = document.getElementById("repwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<div class="login-box">          
<form method="post" name="myform" action="index3.php" id="form" onsubmit="return validateform()|| validateemail();">
  <!--<h1>form validation</h1>   -->               
<div class="user-box">                    <!-- class name is user box for particular box from section-->
First Name<i class="fa fa-user"></i><input type="text" name="fname" id="fname" placeholder="Name can't be blank" required></div>
<div class="user-box">
Last Name<i class="fa fa-user"></i><input type="text" name="lname" id="lname" required></div>
<div class="user-box">
Password<i class="fa fa-lock" style="font-size:20px"></i><input type="password" name="pwd" id="pwd" minlength="6" placeholder="Must atleast 6 characters long" required></div>
<div class="user-box">
Re-Type Password<i class="fa fa-lock" style="font-size:20px;color: red"></i><input type="password" name="repwd" id="repwd" required></div>
<input type="checkbox" onclick="myFunction()">show password
<div class="user-box">
Email-id<i class='fas fa-envelope-square' style='font-size:20px;color:white'></i><input type="text" name="email" id="email" placeholder="example@gmail.com" required></div>
<div class="user-box">
Phone-no<i style="font-size:18px" class="fa">&#xf095;</i><input type="tel" action="/action_page.php" id="phone" name="phone" pattern="[0-9]{10}"  title="Enter 10 digit mobile number & avoid characters" maxlength="10" placeholder="1234-567-890" minlength="10" required></div>
<div class="user-box">
<a href="" id="">
	<input type="submit" class="submit" id="submit1" name="submit" onclick="validate()"></div></a>
  <button class="third1" onclick="window.location.href='http://localhost/practice/error.php';">
      Already exit users!
    </button>
     <script  type="text/javascript">
       $( "#email" ).blur(function() {
 localStorage.setItem("email",  this.value);

});
       $( "#pwd" ).blur(function() {
 localStorage.setItem("pwd",  this.value);
});
 /*  function validate(){
    alert("hi")
     var inputEmail= document.getElementById("#email");
     localStorage.setItem("email", inputEmail.value);
    }
    function validate(){
       var password= document.getElementById("#pwd");
       localStorage.setItem("pwd", password.value);
    }  */
     </script>   
  
</form>
</body>
</html>