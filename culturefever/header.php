<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

error_reporting(E_ALL ^ E_DEPRECATED);
include_once 'mysql_connect.php';

if(!isset($_SESSION['user']))
{
	$userRow['username']="";
}else{

	require_once('mysql_connect.php');

	$query ="SELECT * FROM user WHERE userID=".$_SESSION['user'];
	$res=mysqli_query($link,$query);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		<?php echo $page_title; ?>
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- import the webpage's stylesheet -->
	<link rel="stylesheet" href="freelancer.css">

     <script src="jquery.min.js" defer></script>
	<!-- import the webpage's javascript file -->
	<script src="script.js" defer></script>

	<!-- Aisyah using semantic for styling -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/components/dropdown.js" defer></script>

	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>  
<body id="page-top" class="index">

	<!-- Navigation -->
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
		<div class="headerwiggly"></div> 
		<div class="container mainheader">


			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="index.php">Culture Fever</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<!-- <li class="page-scroll">
						<a href="browse.php">Browse</a>
						<a href="browse.php" class="ui compact ">

							<div class="ui simple dropdown item my">
								Browse
								<i class="dropdown icon"></i>
								<div class="menu">
									<div class="item">Gesture</div>

									<div class="item">Etiquette</div>
								</div>
							</div>
						</a>
					</li> -->
					<li>
						<div class="ui pointing dropdown link item qw">
							<a href="" style="color: white">Browse</a>
							<i class="dropdown icon" style="color: white;"></i>
							<div class="menu">
								<div class="header">Categories</div>
								
								<div class="item">
									<i class="dropdown icon"></i>
									<span class="text">Gestures</span>
									<div class="menu">
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=1">Friendly gestures</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=2">Gestures of respect</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=3">Salutes</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=4">Celebratory gestures</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=5">Obscene gestures</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=6">Taunts</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=7">Head motions</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=8">Other gestures</a>
										
									</div>
								</div>
								<div class="item">
									<i class="dropdown icon"></i>
									<span class="text">Etiquettes</span>
									<div class="menu">
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=9">Greetings</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=10">Making payment</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=11">Visiting someone's house</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=12">Gifts and gift-giving</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=13">Table manners</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=14">Eating and drinking</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=15">Funerals</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=16">Bars and restaurants</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=17">Driving</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=18">Business etiquette</a>
										<a class="item" style="letter-spacing:unset;" href="type-list.php?typeID=19">Hierarchy and honoring the elder</a>
									</div>
								</div>
								
								
								
							</div>
						</div>
					</li>
					<li class="page-scroll">
						<a href="compare-list.php">Compare</a>
					</li>
					<li class="page-scroll">
						<a href="about-us.php">About Us</a>
					</li>

					<li class="page-scroll">
						<a href="vote.php">Vote</a>
					</li>
					

					<?php 
					if(!isset($_SESSION['user']))
					{
						echo '<li><a href="sign-in.php">Sign in</a></li>';	
					}
					else
					{
						$nbsptry="&nbsp;";

						echo '<li>
						<div class="ui pointing dropdown link item ">
							<a href="" style="color: white">Welcome '.$userRow['username'].'</a>
							<i class="dropdown icon" style="color: white;"></i>
							<div class="menu">
					
								<a href="my-account.php" class="item" style="letter-spacing:unset;">My Account</a>
								<a href="posted-definition.php" class="item" style="letter-spacing:unset;">Posted Definition</a>
								<a href="logout.php?logout" class="item" style="letter-spacing:unset;">Log Out</a>
							</div>
						</div>';
						
						//echo '<li><a  href="">Welcome '.$userRow['username'].'</a></li><li><a href="logout.php?logout">Log Out</a></li>';

					}
					?>
      <!-- <li >
          <a href="http://localhost/wordpress/shop/">Shop</a>
      </li>
      <li >
          <a href="http://localhost/wordpress/blog/">Blog</a>
      </li> -->
  </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
