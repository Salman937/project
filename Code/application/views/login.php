<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

          <body>
          <div class="middlePage">
          <div class="page-header">
            <h1 class="logo">The Nerd Camp <small>Welcome to our place!</small></h1>
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
            
            <div class="row">
            
          <div class="col-md-5" >
          <a href="#"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
          <a href="#"><img src="http://techulus.com/buttons/tw.png" /></a><br/>
          <a href="#"><img src="http://techulus.com/buttons/gplus.png" /></a>
          </div>

              <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
          <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/login_controller/in" method="post">
           <fieldset>

              <input id="textinput" name="name" type="text" placeholder="Enter User Name" class="form-control input-md">
              <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
             <input id="textinput" name="pass" type="password" placeholder="Enter Password" class="form-control input-md">
             <div class="spacing"><a href="#"><small> Forgot Password?</small></a><br/></div>
             <input type="submit"  name="login" class="btn btn-info btn-sm pull-right" value="Login">


          </fieldset>
          </form>
          </div>
              
          </div>
              
          </div>
          </div>

          <p><a href="https://github.com/arjunkomath">About</a> · Salman</p>

          </div>
</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>