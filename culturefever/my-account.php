<?php
session_start();
// if(isset($_SESSION['user'])!="")
// {
//   header("Location: index.php");
// }
include_once 'mysql_connect.php';

$userquery ="SELECT * FROM user WHERE userID=".$_SESSION['user'];
  $userres=mysqli_query($link,$userquery);
  $userRow=mysqli_fetch_array($userres, MYSQLI_ASSOC);
?>

<?php 

$page_title = 'My Account';
include_once('header.php'); 

?>
<!-- About Section -->
<section class="myaccount" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext">
				<p>MY ACCOUNT</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
        <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
          <form class="form-horizontal sign-in">		

            <div class="ui form">
                <div class="field">
                    <label>Username</label>
                    <input  style="text-transform: capitalize;" type="text" name="title" placeholder="" value="<?php echo $userRow['username'] ?>" class="disabled field">
                </div>
            </div>
            <br>
            <div class="ui form">
                <div class="field">
                    <label>Email</label>
                    <input type="text" name="title" placeholder="" value="<?php echo $userRow['email'] ?>" class="disabled field">
                </div>
            </div>
            <br>
            <div class="ui form">
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="title" placeholder="" value="<?php echo $userRow['password'] ?>" class="disabled field">
                </div>
            </div>
            <br>
            <div class="ui form">
                <div class="field">
                    <label>Country</label>
                    <input type="text" name="title" placeholder="" value="<?php echo $userRow['country'] ?>" class="disabled field">
                </div>
            </div>


            <br><br>


      <div class="form-group">
        <button class="btn btn-round submit">
         EDIT
       </button>

       

    </div>


  </form>
</div>
</div>
</div>
</div>
</div>
</section>

<?php 

include_once('footer.php'); 

?>
