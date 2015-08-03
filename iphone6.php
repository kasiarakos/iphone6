<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="iphone6.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="iphone6.js"></script>
	</head>

	<body>

		<div class="header">
			
			<img src="apple_logo.png" alt="Mountain View" style="width:99px;height:85px;">
			<h1>iPhone 6</h1>
		</div>

		<h2>iPhone 6</h2>

		<p class="infoiphone">
			<video type="video/mp4" src="fb1a6323-1b5c-4717-a11c-4181a0ea58a6.mp4" autoplay loop  class = "mediaObject-element" style="visibility: visible;"></video>
		</p>

		<p class="infoiphone">iPhone 6 isn't simply bigger - it's better in every way. Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display. It's one continuous form where hardware and software function in perfect unison, creating a new generation of iPhone that's better by any measure.</p>

<!-- 		<div class="form_container">
			<form method="post" action="thankyou.php" id="formiphone">
				<table>
					<tr>
						<td>
							<label for="title">Title:</label>
						</td>
						<td>
							<select name="title" id="title" >
							  <option value="None">None</option>
							  <option value="Mr">Mr</option>
							  <option value="Ms">Ms</option>
							  <option value="Mrs">Mrs</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>
							<label for="firstname">First Name:</label>
						</td>
						<td>
							<input type="text" name="firstname" id="firstname" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="lastname">Last Name:</label>
						</td>
						<td>
							<input type="text" name="lastname" id="lastname" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="email">Email:</label>
						</td>
						<td>
							<input type="text" name="email" id="email" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="phone">Phone:</label>
						</td>
						<td>
							<input type="tel" name="phone" id="phone" required>
						</td>
					</tr>

					<tr>
						<td>
							<label for="comment">Comment:</label>
						</td>
						<td>
							<textarea  rows="10" name="comment" id="comment"></textarea>
						</td>
					</tr>

					<tr>
						<td colspan="2" class="button">
							<input type="submit">
						</td>
					</tr>
				</table>
			</form>
		</div>
 -->


<div class="container">
	<div id="div2">
	</div>

	<div id="div1"></div>
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
		



	</body>
</html>