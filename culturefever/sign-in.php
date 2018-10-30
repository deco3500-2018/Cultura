<?php
session_start();
include_once 'mysql_connect.php';

if(isset($_SESSION['user'])!="")
{
	$message = "You are already login!";
	echo "<script type='text/javascript'>alert('$message');</script>";
 
	header("Location: index.php");
	
}

if(isset($_POST['submit']))
{
	$email = mysqli_real_escape_string($link,$_POST['email']);
	$upass = mysqli_real_escape_string($link,$_POST['password']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysqli_query($link,"SELECT userID, username, password FROM user WHERE email='$email'");
	$row=mysqli_fetch_array($res);
	
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']==md5($upass))
	{
			$_SESSION['user'] = $row['userID'];
		header("Location: index.php");
	}
	else
	{
		?>
        <script>alert('Your username and password seems wrong!');</script>
        <?php
	}
	
}
?>

<?php 

$page_title = 'Sign In';
include_once('header.php'); 

?>
<!-- About Section -->
<section class="signin" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext">
				<p>Please sign in to vote and post new awesome things!</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<form class="form-horizontal sign-in" method="POST" action="sign-in.php">		

							<div class="form-group">
								<input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
								<span class="help-block">
									<strong></strong>
								</span>

							</div>


							<div class="form-group">
								<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>


								<span class="help-block">
									<strong></strong>
								</span>


							</div>


							<div class="form-group">
								<div class="checkbox">
									<label>
										<input class="" type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
							

							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-round submit">
									LOGIN
								</button>
								<input type="hidden" name="submitted" value="TRUE"/>
								<a class="reset_pass" href="register.php">
									Don't have an account? Register here
								</a></br>
								<a class="reset_pass" href="javascript:void(0)">
									Forgot your password?
								</a>

							</div>


						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php 

	include_once('footer.php'); 

	?>
