<?php include_once 'header1.php' ?>

<!-- mail -->

	<div class="full_contact">
	
		<div class="container">
			<h3 class="title"> Contact <span> Us </span>
			</h3>
				<div class="contact-grid11">
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact By Email</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Mail1: <a href="mailto:info@example.com">info@example1.com</a></li>
							<li>Mail2: <a href="mailto:info@example.com">info@example2.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
						<h4>Contact By Phone</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Phone: +0000 123 312</li>
							<li>Fax: +123 312</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						<h4>Looking For Address</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
							voluptatibus maiores alias.</p>
						<ul>
							<li>Address: General Pvt 66, Dong Da</li>
							<li>Hanoi, Vietnam.</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="contact-grids">
				<div class="contact-grid">
					<div class="col-md-6 contact-grid-left">
						<form action="#" method="post">
							<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="text" value="Phone" name="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
						</form>
					</div>
					<div class="col-md-6 contact-grid-left">
						<form action="#" method="post">
							<input type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="Subject" name="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
						</form>
					</div>
					<div class="clearfix"> </div>
					<form action="#" method="post">
						<textarea name="Message" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit Now">
					</form>
				</div>
			</div>
			
		
			
		</div>
	</div>
<!-- //mail -->

<?php include_once 'footer.php' ?>