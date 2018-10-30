<?php while($row=mysqli_fetch_array($qury, MYSQLI_ASSOC)){ ?>         
  <div class="ui card card-out desc-home">
    <div class="content card-inside">
      <a><i class="right floated share icon"></i></a>
      <a><i class="right floated facebook icon"></i></a>
      <a><i class="right floated twitter icon"></i></a>
      <div class="header"><a><?php echo $row["pracName"];?></a> in <a><?php echo $row["pracCountry"];?></a></div>
      <div class="description desc-small">
        <div class="ui image desc-img centered"><img  src="<?php echo $row["pracPicture"];?>"></div>
        <div class="img-desc"><p><?php echo $row["pracDesc"];?></p></div>
        <div class="addedby"><p>By <a><b><?php echo $row["username"];?></b></a> from <a><b><?php echo $row["country"];?></b></a></p></div>
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
          <div class="ui disabled blue button">
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
          <div class="ui disabled blue button">
            <i class="thumbs down icon"></i> 
          </div>
        </div>
      </span>
    </div>
  </div>
  <?php } ?>