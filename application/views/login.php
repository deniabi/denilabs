<div class="row" style="margin-top:7%;">
	<div class="col l4 m6 s12 offset-l4 offset-m3">
		<h4 class="center white-text"><span class="red-text">I - News </span> Spot</h4>
		<div class="card z-depth-2">
			<div class="card-content">
				<?php
					echo form_open('Login/validate_login');
				?>
						<label>Username</label><br />
						<input type="text" name="username" required><br />
						<label>Password</label><br />
						<input type="password" name="password" required><br />
					
						<input type="submit" name="submit" id="submit" value="Login">
					<?php
					
					echo form_close();
				?>
		</div>
	</div>
	
	<br />
	<br />
	<br />
	<br />
	<br />
	<p class="white-text center">2015 &copy<span class="red-text"> Denilabs.tk </span></p>
</div>
