<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="iphone6.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="iphone6.js"></script>
	</head>

	<body>

		<div class="header">
			<a href="http://www.apple.com/">
				<img src="assets/apple_logo.png" alt="Mountain View" style="width:99px;height:85px;">
			</a>
			<h1>Apple</h1>
			<div class="main_menu">
				<ul class="menu">
					<li><a href="">test</a></li>
					<li><a href="">test</a></li>
				</ul>
			</div>
		</div>

		<h2>iPhone 6</h2>

		<p class="infoiphone">
			<video type="video/mp4" src="assets/fb1a6323-1b5c-4717-a11c-4181a0ea58a6.mp4" autoplay loop  class = "mediaObject-element" style="visibility: visible;"></video>
		</p>
		<p class="infoiphone">iPhone 6 isn't simply bigger - it's better in every way. Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. It's one continuous form where hardware and software function in perfect unison, creating a new generation of iPhone that's better by any measure.</p>

		<div class="container">
			<div id="div2"></div>
			<div id="div1"></div>
			<div id="form_container">
				<form method="post" action="thankyou.php" id="formiphone">

					<div>
				    <label class="desc"  for="title">
				    	Title
				    </label>
				    <div>
				    <select id="title" name="title" class="field select medium" tabindex="11"> 
				      <option value="None">None</option>
				      <option value="Mr">Mr</option>
				      <option value="Mrs">Mrs</option>
				      <option value="Ms">Ms</option>
				    </select>
				    </div>
				  </div>
				  
				  <div>
				    <label class="desc" for="firstname">First Name</label>
				    <div>
				      <input id="firstname" name="firstname" type="text" class="field text fn" value="" size="8" tabindex="1">
				      <span id= "name_error" class = "hidden error">*</span>
				    </div>

				  </div>


				  <div>
				    <label  for="lastname">Last Name</label>
				    <div>
				      <input id="lastname" name="lastname" type="text" class="field text fn" value="" size="8" tabindex="2">
				    </div>
				  </div>

				  <div>
				    <label class="desc" for="phone">Phone</label>
				    <div>
				      <input id="phone" name="phone" type="text" class="field text fn" value="" size="8" tabindex="3">
				    </div>
				  </div>
	    
				  <div>
				    <label class="desc"  for="email">
				      Email
				    </label>
				    <div>
				      <input id="email" name="email" type="email" spellcheck="false" value="" maxlength="255" tabindex="4"> 
				   </div>
				  </div>
	    
				  <div>
				    <label class="desc" for="comment">
				      Comment
				    </label>
				  
				    <div>
				      <textarea id="comment" name="comment" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
				    </div>
				  </div>
	  
				  <div>
						<div>
				  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
				    </div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>