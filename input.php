<?php include('index2.php') ?>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <form method="post" action="input.php" id="register_form">
  	<h1>Register</h1>
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<input type="password"  placeholder="Password" name="password">
  	</div>
  	<div>
  		<button type="submit" name="register" id="reg_btn">Register</button>
  	</div>
  </form>
  </body>
  <style type="text/css">
    #register_form h1 {
  text-align: center;
}
body {
  background: #A9D9C3;
}
#register_form {
  width: 37%;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 5px;
  background: white;
}
#register_form input {
  width: 80%;
  height: 35px;
  margin: 5px 10%;
  font-size: 1.1em;
  padding: 4px;
  font-size: .9em;
}
.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}
#reg_btn {
  height: 35px;
  width: 80%;
  margin: 5px 10%;
  color: white;
  background: #3B5998;
  border: none;
  border-radius: 5px;
}
  </style>
</html>