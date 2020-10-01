<?php
    $filepath = realpath(dirname(__FILE__));
    include_once $filepath.'/../lib/Session.php';
    Session::init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login-Register</title>
	<link rel="icon" type="jpg/images" href="img/icon.png">
	<link rel="stylesheet" href="inc/style.css">
	<!-- Fontawesome-4.7.0 compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<?php
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
    	Session::destroy();
    }
?>
<body>
	<div class="container">
		<nav class=" top navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><i class="fa fa-leaf" aria-hidden="true"></i> Login & Register System</a>
				</div>
				<ul class=" nav navbar-nav   pull-right">

				<?php
                   $id = Session::get("id");
                   $userlogin = Session::get("login");
                   if ($userlogin == true) {?>
                   	 <li><a href="index.php">Home</a></li>
				     <li class=""><a href="profile.php?id=<?php echo $id;?>">Profile</a></li>
				     <li><a href="?action=logout">Logout</a></li>
                 <?php  }else{?>
					 <li><a href="login.php">Login</a></li>
					 <li><a href="register.php">Register</a></li>
                 <?php }
                ?>
				</ul>
			</div>
		</nav>	
