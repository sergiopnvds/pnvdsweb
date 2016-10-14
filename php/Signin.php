<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href='../images/Pnvds.ico' rel='shortcut icon' type='image/ico'>
	<title>Pnvds - Sign in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="../css/style.css" rel="stylesheet" media="screen" type="text/css">
</head>

<header>

    <?php include("navbar.php");?>


</header>

<body>


	
<form class="form-horizontal ">
  <br>
  <br>
  <br>
  <div class="semititle terms-text">
    <h2 >SING UP <small>You are almost in!</small></h2>
    <br>
    <p><strong>Just fill in the form bellow and click "Sign me up"</strong></p>
    <p><strong>You will receive an email containing the activaton link</strong></p>
    <br>
    <p><strong>All fields with (*) are mandatory.</strong></p>
    <br>
  </div >
    <div class="form-group ">
        <label class="control-label col-xs-2">Name: *</label>
        <div class="col-xs-9">
            <input type="text" class="form-control form-text-width" placeholder="Enter your name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Lastname: *</label>
        <div class="col-xs-9">
            <input type="text" class="form-control form-text-width" placeholder="Enter your Lastname">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Email: *</label>
        <div class="col-xs-9">
            <input type="email" class="form-control form-text-width" id="inputEmail" placeholder="Enter your email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Username: *</label>
        <div class="col-xs-9">
            <input type="text" class="form-control form-text-width" placeholder="Enter your username∫">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Password: *</label>
        <div class="col-xs-9"> 
            <input type="password" class="form-control form-text-width" id="inputPassword" placeholder="Enter Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Confirm Password: *</label>
        <div class="col-xs-9">
            <input type="password" class="form-control form-text-width" placeholder="Confirm Password">
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-xs-2" >Phone:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control form-text-width" placeholder="Enter your phone number">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Date of birth: *</label>
        <div class="col-xs-1">
            <select class="form-control form-birth-width" >
                <option>Month</option>
                <option value="" disabled="disabled" class="SelectSeparator">&nbsp;</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>

            </select>
        </div>
        <div class="col-xs-1">
            <select class="form-control form-birth-width">
                <option>Day</option>
            </select>
        </div>
        <div class="col-xs-1">
            <select class="form-control form-birth-width">
                <option>Year</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Address:</label>
        <div class="col-xs-9">
            <textarea rows="3" class="form-control form-text-width" placeholder="Enter your address"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-2">Genre:</label>
        <div class="col-xs-1">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="male"> Male
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="female"> Female
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="news"> Subscribe to Pnvds.com newsletter.
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="agree">  I agree with Pnvds.com <a href="../terms&condits.html" target="_blank">Terms and conditions</a>. *
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Sign me up">
            <input type="reset" class="btn btn-default" value="Clean">
            <br>            
        </div>
    </div>

</form>
<br>
<footer>
  <div class="navbar-form navbar-right">
        <p class="navbar-text">&copy CopyRight: Sergio Pnvds</p>
      </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
<script src="js/bootstrap.min.js"> </script>	
</body>
</html>