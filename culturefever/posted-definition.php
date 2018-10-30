<?php 

$page_title = 'Posted Definition';
include_once('header.php'); 

?>
<!-- About Section -->
<section class="myaccount" id="about">
	<div class="container">
		<?php 

		require_once('mysql_connect.php');


		$query ="SELECT * FROM user WHERE userID=".$_SESSION['user'];
		$res=mysqli_query($link,$query);
		$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

		$usercountry = $userRow['country'];
		$query = "SELECT * FROM practices, user WHERE practices.userID=user.userID AND practices.userID=".$userRow['userID'];
		$result = mysqli_query($link,$query);

		$count = mysqli_num_rows($result); // if uname/pass correct it returns must be 1 row


		if($count == 0)
		{
			?>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext" style="color: #000;">
					<p>You haven't posted anything yet. Know something or experience an unforgettable social interaction? Post it.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-10 col-lg-offset-1">
					<a href="addnew.php" class="fluid huge ui button black">Post your experience!</a>
				</div>


			</div>
		</br>
		<?php
	}


	else
	{
		?>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext" style="color: #000;">
				<p>Your posted definition</p>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-10 col-lg-offset-1">
				<a href="addnew.php" class="fluid huge ui button black">Post more experience!</a>
			</div>


		</div>
	</br>
	<div class="ui horizontal divider">
		<i class="circle icon"></i><i class="circle icon"></i><i class="circle icon"></i>
	</div>
</br>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<?php

		while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){

			?>

			<div class="ui card card-out desc-home">
				<div class="content card-inside">
					<a><i class="right floated share icon"></i></a>
					<a><i class="right floated facebook icon"></i></a>
					<a><i class="right floated twitter icon"></i></a>
					<div class="header"><a><?php echo $row["pracName"];?></a> in <a><?php echo $row["pracCountry"];?></a></div>
					<div class="description desc-small">
						<div class="ui image desc-img centered"><img  src="<?php echo $row["pracPicture"];?>"></div>
						<div class="img-desc"><p><?php echo $row["pracDesc"];?></p></div>
						<div class="addedby"><p>By <a><b style="text-transform: capitalize;"><?php echo $row["username"];?></b></a> from <a><b><?php echo $row["country"];?></b></a></p></div>
						<div class="ui large label">
							<i class="comment outline icon"></i>
							23
							<a href="details.php?practiceID=<?php echo $row['practiceID']?>" class="detail">See comments</a>
						</div>
					</div>
				</div>
				<div class="extra content ">
					<span class="left floated like">
						<div class="ui labeled button " tabindex="0"> 
							<div class="ui blue button">
								<i class="thumbs up icon"></i> 
							</div>
							<a class="ui basic label">
								<?php echo $row["pracUp"];?>
							</a>
						</div>
					</span>&nbsp;&nbsp;&nbsp;
					<span class="right floated star">
						<div class="ui left labeled button" tabindex="0">
							<a class="ui basic right label">
								<?php echo $row["pracDown"];?>
							</a>
							<div class="ui blue button">
								<i class="thumbs down icon"></i> 
							</div>
						</div>
					</span>
				</div>
			</div>
		<?php } }?>
	</div>
</div>



<?php  ?>

</div>
</section>
<?php 

include_once('footer.php'); 

?>
