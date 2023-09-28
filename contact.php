<?php

include 'header.php';

?>
	<div class="banner1">
		<div class="container">
			<div class="w3ls_logo w3ls_logo_about">
				<h1><a href="home.php">..Cafeterian..</a></h1>
			</div>
		</div>
	</div>
<!-- //banner -->	
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
				<ul>
					<li><a href="home.php">Home</a><i>|</i></li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="agileits_breadcrumbs_right">
				<h2>Contact Us</h2>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="w3_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3076293251775!2d72.79197431415943!3d21.140152389343896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04df8c842a501%3A0x263c40ab54c154c6!2sBhagwan%20Mahavir%20University!5e0!3m2!1sen!2sin!4v1649607102532!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="mail">
		<div class="container">
			<h3 class="head"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Us</h3>
			<div class="agile_mail_grids">
				<div class="agile_mail_grid">
					<form action="addcontact.php" method="post">
						<div class="col-md-6 agile_mail_grid_left">
							<input type="text" name="name" placeholder="Name" required="">
							<input type="text" name="number" placeholder="Phone" required="">
						</div>
						<div class="col-md-6 agile_mail_grid_left">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="clearfix"> </div>
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit Now">
					</form>
				</div>
			</div>
			<div class="agile_mail_grid1">
				<div class="col-md-4 agile_mail_grid1_left">
					<div class="mail_grid1_left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact By Email</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Mail1: <a href="mailto:info@example.com">sonipriyansh423@gmail.com</a></li>
							<li>Mail2: <a href="mailto:info@example.com">jeetsorathia112@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 agile_mail_grid1_left">
					<div class="mail_grid1_left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<h4>Contact By Phone</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Phone: +915 689 237 445</li>
							<li>Fax: +913 312</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 agile_mail_grid1_left">
					<div class="mail_grid1_left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<h4>Looking For Address</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Address: Bhagwan Mahavir Polytechnic,VIP</li>
							<li>Road, Vesu,Surat-395017.</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->

<?php

include 'footer.php';

?>