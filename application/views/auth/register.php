<!DOCTYPE html>
<html lang="en">

<head>
	<title>KreatifHub</title>
	<!-- Css Styles -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

</head>

<body>

	<header class="header-section" style="background-color: white; border-bottom: 1px solid #dee2e6"><header class="header-section fixed-top" style="background-color: white; border-bottom: 1px solid #dee2e6">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a href="/kreativhub">
							<img src="https://www.kreatifhub.com/img/logo-kreatif-hub.png" alt="" style="width:130px; height:auto;">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">

							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="/kreativhub">CARI JASA</a>
								</li>

								<li class="nav-item">
									<a class="nav-link " href="result">TALENTS</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a href="/kreativhub/talent/register" type="button" class="btn btn-warning roboto-medium" id="signup_button" style="color: white; font-size:14px !important; min-width:80px !important">DAFTAR</a>
							</ul>
						</div>
					</nav>
				</div>
			</div>

		</div>
	</header>

	<div class="container mt" style="margin-top: 10%;">
		<?php 
			$csrf = array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			);
		?>

		<form method="post" action="<?= base_url('talent/register') ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputPassword1">Photo Profile</label>
				<input type="file" name="photo_profile" class="form-control" required />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Full Name</label>
				<input type="text" name="name" class="form-control" />
				<?= form_error('name') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" />
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				<?= form_error('email') ?>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Phone Number</label>
				<input type="text" name="phone_number" class="form-control" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Age</label>
				<input type="text" name="age" class="form-control" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				<div class="row">
					<div class="form-check ml-4">
						<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked />
						<label class="form-check-label" for="exampleRadios1">
							Male
						</label>
					</div>
					<div class="form-check ml-4">
						<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female" />
						<label class="form-check-label" for="exampleRadios2">
							Female
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Skills</label>
				<input type="text" name="skills" class="form-control" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Location</label>
				<input type="text" name="location" class="form-control" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Abaout Me</label>
				<textarea type="text" name="aboutme" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Category</label>
				<select name="id_kategori" class="form_control">
					<?php foreach ($categories as $category) : ?>
						<option value="<?= $category['id']; ?>" class="form_control"><?= $category['category_name']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			
			<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
			<button type="submit" class="btn btn-primary mb-5">Submit</button >
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>