<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link href='../images/pnvds.ico' rel='shortcut icon' type='image/ico'>
	<title>Pnvds - Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../css/login.css" rel="stylesheet" media="screen" type="text/css">

</head>

<header>
  
</header>

<body>
	
  <section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" action="userInit.php">
        <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <input type="submit" name="commit" value="Login">
          <input type="submit" name="cancelLogin" value="Cancel" onclick="window.location='../index.html'">
      </form>

    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="../index.html">Click here to reset it</a>.</p>
    </div>
  </section>



<script>
  
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
<script src="js/bootstrap.min.js"> </script>
	
</body>


</html>