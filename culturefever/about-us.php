<?php 

$page_title = 'Culture Fever';
include_once('header.php'); 

?>

<section class="introabout" id="about">
	<div class="container">
		<div class="row">
			<br><br><br><br>
			<div class="col-lg-8 col-lg-offset-2">
				<h1><u class="txtpeach">Explore</u> how <u class="txtgreen">people</u><br>around the <u class="txtblue">world</u> behave <br>in <u class="txtpink">social interaction</u></h1>
			</div>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div  class="col-lg-6 col-lg-offset-3 text-center" id="introtext">
				<p>FEATURES</p>
				<div class="page-scroll"><a href="#howto" class="circular ui icon button">
					<i class="icon chevron down"></i>
				</a></div>
				
			</div>
		</div>
	</div>
</section>

<section class="howto" id="howto">
	<div class="container">

		<div class="row">
			<br>
			<br>
			<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext">
				<p style="font-size: 16px;">FEATURES</p>
			</div>
		</div>

		<br><br>

		<div class="ui grid container">
			<div class="ui relaxed divided items howto1">
				<div class="item">
					<div class="middle aligned content">
						<h1 class="ui header">
							Compare cultural norms between<br> different cultures <span class="disabled"></span>
						</h1>
						<div class="description">
							<p>
								It will blow your mind how some gestures that we take as innocent may be seen by someone else as deeply insulting. What seems normal to one person might deem inappropriate to another person that have different cultural upbringing. For example, in Japan it's common to use the hand 'V Sign' as it generally means good whereas it can be an insulting gesture in Australia if the 'V Sign' palm facing the signer's face.
							</p>
						</div>
					</div>
					<div class="ui right floated big circular image">
						<img src="https://www.mci.gov.sg/~/media/mcicorp/images/portfolios/infocommmedia/4%20compare-prices.gif?h=400&&w=600&la=en" />
					</div>
				</div>
				<div class="item">
					<div class="ui large rounded image">
						<img style="border-radius: 40px;" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f4737f40554139.57863e1e049d3.gif" />
					</div>
					<div class="content">
						<h1 class="ui header">
							Upvote and downvote<span class="disabled"></span>
						</h1>
						<div class="description">
							<p>
								Culture Fever allows user to upvote/downvote any definitions about the social interactions happening in their country only. This is a crowdsourcing mechanism where we can measure the acceptibility of a definition and the accuracy by allowing only locals to vote.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="middle aligned content">
						<h1 class="ui header">
							Add your own experience<br> in social interaction <span class="disabled"></span>
						</h1>
						<div class="description">
							<p>
								If you've been in a foreign country and encounter rather strange/unfamiliar interaction where you wrongly use a body language in a way that it is different to your own culture, you may add it to this website to let others know. Or it can be the locals behaving or using gestures that may be disrespectful to you but is normal to them. Any experience you can think of!
							</p>
						</div>
					</div>
					<div class="ui bordered right floated big circular image">
						<img src="sc2.jpg" />
					</div>
				</div>
			</div>
		</div>



		
	</div>
</section>

<!-- About Section -->
<section class="success about" id="about">
	<div class="container">
		<div class="row">
			<br>
			<br>
			<div class="col-lg-6 col-lg-offset-3 text-center" id="introtext">
				<p>Say Goodbye To Culture Shock</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">

				<div id="code">
					<div id="groupcircle">
						<div id="red" class="circle"></div>
						<div id="yellow" class="circle"></div>
						<div id="green" class="circle"></div>
					</div>


					<div id="console">
						<p><center>About Culture Fever</center><br><br>
							<strong>Bonjour handsome 👦 and beautiful! 👧</strong><br><br>

							Are you travelling abroad or going on a business trip abroad?✈️ But……. having cultural difficulties during your trip?👉👈 Or shy to ask the locals? 😰
							Or you don’t understand the information from internet 📱 <br><br>

							Say no more ❌ to cultural difficulties!<br><br>

							We created Culture Fever to help you during your trip by looking up on how to behave appropriately in certain situation.
							Culture Fever provide guides for you to understand more about the culture in your visiting country.
							All you have to do is choose your visiting country 📍 and choose the social interaction you wish to know ❓❓ and wallahhh! 🎉
							And the information you need will be there!<br><br>

							Hmm.. what if you are not travelling to any country? But eager to know others’ country culture? 🤗 Or you are doing research on different culture? 🗺️<br><br>

							You also can use Culture Fever! Feel free to explore more on others’ country culture through Culture Fever! 💖<br><br>

							Love,<br>
							Culture Fever Team
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<?php 

	include_once('footer.php'); 

	?>

	<script>
		(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
    	var $anchor = $(this);
    	$('html, body').stop().animate({
    		scrollTop: ($($anchor.attr('href')).offset().top - 100)
    	}, 1000, 'easeInOutExpo');
    	event.preventDefault();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
    	offset: {
    		top: 100
    	}
    })


})(jQuery); // End of use strict

</script>
