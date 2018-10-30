  <?php 

  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  ?>
  <?php 
  // Check to see the URL variable is set and that it exists in the database
  if (isset($_GET['practiceID'])) {
  	// Connect to the MySQL database  
  	require_once('mysql_connect.php');

  	$practiceID = preg_replace('#[^0-9]#i', '', $_GET['practiceID']); 
  	// Use this var to check to see if this ID exists, if yes then get the product 
  	// details, if no then exit this script and give message why
  	$sql = mysqli_query($link,"SELECT * FROM practices, user, types where practices.userID=user.userID AND practiceID='$practiceID' AND practices.typeID=types.typeID LIMIT 1");
  	$productCount = mysqli_num_rows($sql); // count the output amount
  	if ($productCount > 0) {
  		// get all the product details
  		while($row = mysqli_fetch_array($sql)){ 
  			$type = $row["typeName"];
  			$name = $row["pracName"];
  			$gcountry   = $row["pracCountry"];
  			$picture  = $row["pracPicture"];
  			$description  = $row["pracDesc"];
  			$username  = $row["username"];
  			$up  = $row["pracUp"];
  			$down  = $row["pracDown"];
        $country = $row["country"];

  		}

  	} else {
  		echo "That item does not exist.";
  		exit();
  	}

  } else {
  	echo "Data to render this page is missing.";
  	exit();
  }
  //mysql_close();
  ?>

  <?php 

  $page_title = 'Gesture';
  include_once('header.php'); 

  ?>
  <!-- About Section -->
  <section class="detail" id="about">
  	

  	<div class="container-fluid">
  		<div class="row row-centered">
  			<div class="col-md-8 col-md-offset-2 col-centered detail-text">
  				
  				<div class="ui breadcrumb">
            <a class="section">Home</a>
            <i class="right angle icon divider"></i>
  					<a class="section">Gestures</a>
  					<i class="right angle icon divider"></i>
  					<a class="section"><?php echo $type;?></a>
  					<i class="right angle icon divider"></i>
  					<div class="active section"><?php echo $name;?></div>
  				</div>

  				<!-- <p><a>Gestures</a> / <a><?php //echo $type;?></a> / <a><?php //echo $name;?></a></p> -->
  				<div class="ui relaxed divided items">
  					<div class="item">
  						
  						<div class="ui large rounded image">
  							<img src="<?php echo $picture;?>"><div class="extra content ">
                  <span class="left floated like">
                    <div class="ui labeled button " tabindex="0"> 
                      <div class="ui blue button">
                        <i class="thumbs up icon"></i> 
                      </div>
                      <a class="ui basic label">
                        <?php echo $up;?>
                      </a>
                    </div>
                  </span>&nbsp;&nbsp;&nbsp;
                  <span class="right floated star">
                    <div class="ui left labeled button" tabindex="0">
                      <a class="ui basic right label">
                        <?php echo $down;?>
                      </a>
                      <div class="ui blue button">
                        <i class="thumbs down icon"></i> 
                      </div>
                    </div>
                  </span>
                </div>
  						</div>

  						<div class="content">

  							<a class="header"><?php echo $name;?></a>
  							<div class="meta">
  								<a style="font-size: 17px;"><?php echo $gcountry;?></a></br></br>
  								Added by  &nbsp<img class="ui avatar image" src="jenny.jpg"> <a><?php echo $username;?></a> from <a><?php echo $country;?></a>
  							</div>

  							<div class="description">
  								<?php echo $description;?>
  							</div>
  							<!-- <div class="extra">
  								<img src="/images/wireframe/square-image.png" class="ui circular avatar image"> Username
  							</div> -->
                
  							
  						</div>
  					</div>

  					<div class="ui comments">
  						<h3 class="ui dividing header">Comments</h3>
  						<div class="comment">
  							<a class="avatar">
  								<img src="https://semantic-ui.com/images/avatar/small/matt.jpg">
  							</a>
  							<div class="content">
  								<a class="author">Matt</a> 
  								<div class="metadata">
  									<span>from Australia</span><span class="date">Today at 5:42PM</span>
  								</div>
  								<div class="text">
  									Ehh, maybe?
  								</div>
  								<div class="actions">
  									<a class="reply">Reply</a>
  								</div>
  							</div>
  						</div>
  						<div class="comment">
  							<a class="avatar">
  								<img src="https://semantic-ui.com/images/avatar/small/elliot.jpg">
  							</a>
  							<div class="content">
  								<a class="author">Elliot Fu</a>
  								<div class="metadata">
  									<span>from United Kingdom</span><span class="date">Yesterday at 12:30AM</span>
  								</div>
  								<div class="text">
  									<p>This has been very useful for my research. Thanks as well!</p>
  								</div>
  								<div class="actions">
  									<a class="reply">Reply</a>
  								</div>
  							</div>
  							<div class="comments">
  								<div class="comment">
  									<a class="avatar">
  										<img src="https://semantic-ui.com/images/avatar/small/jenny.jpg">
  									</a>
  									<div class="content">
  										<a class="author">Jenny Hess</a>
  										<div class="metadata">
  											<span>from China</span><span class="date">Just now</span>
  										</div>
  										<div class="text">
  											Elliot you are always so right :)
  										</div>
  										<div class="actions">
  											<a class="reply">Reply</a>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  						<div class="comment">
  							<a class="avatar">
  								<img src="https://semantic-ui.com/images/avatar/small/joe.jpg">
  							</a>
  							<div class="content">
  								<a class="author">Joe Henderson</a>
  								<div class="metadata">
  									<span>from Brazil</span><span class="date">5 days ago</span>
  								</div>
  								<div class="text">
  									I agree with this!
  								</div>
  								<div class="actions">
  									<a class="reply">Reply</a>
  								</div>
  							</div>
  						</div>
  						<form class="ui reply form">
  							<div class="field">
  								<textarea></textarea>
  							</div>
  							<div class="ui blue labeled submit icon button">
  								<i class="icon edit"></i> Add Reply
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
