<div class="row" style="margin-top:7%;">
	<div class="col l4 m6 s12 offset-l4 offset-m3">
		<h3 class="center">Login <span class="orange-text"> Admin</span></h3>
		<div class="card z-depth-2">
			<div class="card-content">
		<?php
			echo form_open('Login/reguser');
			echo "<label>Nama</label>";
			echo form_input('nama');
			echo "<label>Email</label>";
			echo form_input('email');
			echo "<label>username</label>";
			echo form_input('username');
			echo "<label>Password</label>";
			echo form_password('password');
			echo form_submit('submit', 'Daftar');
			echo form_close();
		?>
			</div>
		</div>
	</div>
</div>

		