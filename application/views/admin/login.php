<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>materialize/css/materialize.css">
	<style type="text/css">
	.input-field label,
	.input-field .prefix {
		color: #000;
	}
	.input-field input[type=text]:focus + label,
	.input-field input[type=password]:focus + label,
	.input-field .prefix.active {
		color: #ff9800;
	}
	.input-field input[type=text]:focus,
	.input-field input[type=password]:focus {
		border-bottom: 1px solid #ff9800;
		box-shadow: 0 1px 0 0 #ff9800;
	}
	input[type=submit] {
		color: #fff;
		background-color: #000;
	}
	input[type=submit]:hover {
		background-color: #ff9800;
	}
	.mepet {
		margin-bottom: 0;
	}

	</style>
</head>
<body>
<div class="row" style="margin-top:7%;">
	<div class="col l4 m6 s12 offset-l4 offset-m3">
		<h3 class="center">Login <span class="orange-text"> Crew</span></h3>
		<div class="card z-depth-2">
			<div class="card-content">
				<form method="post" class="col s12">
					<div class="row mepet">
					<div class="input-field col s12">
						<i class="mdi-action-account-circle prefix"></i>
						<input type="text" name="username" required>
						<label>Username</label>
					</div>
					</div>
					<div class="row mepet">
					<div class="input-field col s12">
						<i class="mdi-action-lock prefix"></i>
						<input type="password" name="password" required>
						<label>Password</label>
					</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<a href="<?= base_url() ?>index.php/Admin/validation"><button class="btn orange waves-effect"> Login</button></a>
						</div>
					</div>

				</form>
<script type="text/javascript" src="<?= base_url() ?>materialize/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>materialize/js/materialize.js"></script>
</body>
</html>