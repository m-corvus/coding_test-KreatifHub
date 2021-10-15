<!DOCTYPE html>
<html lang="en">

<head>
	<title>KreatifHub</title>
	<!-- Css Styles -->
	<link rel="stylesheet" href="https://www.kreatifhub.com/assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://www.kreatifhub.com/assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="https://www.kreatifhub.com/assets/css/bootstrap-datepicker.min.css" type="text/css" />
	<link rel="stylesheet" href="https://www.kreatifhub.com/assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://www.kreatifhub.com/assets/css/boxicons.min.css" type="text/css">

	<script src="https://www.kreatifhub.com/assets/js/jquery.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-PMKNDTH3RR"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

</head>

<body>
	
	<header class="header-section fixed-top" style="background-color: white; border-bottom: 1px solid #dee2e6">
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
	
    <div class="container align-item-center mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Profile Photo</th>
                    <th scope="col">Category</th>
                    <th scope="col">Skill</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($talents->result() as $key => $talent) : ?>
                    
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><?= $talent->name ?></td>
                    <td>
                        <?php if(!$talent->profile_photo == null) : ?>
                        <img src="<?= base_url() . 'uploads/' . $talent->profile_photo ?>" alt="asd" class="rounded-circle" height=70>
                        <?php else : ?>
                        <img src="<?= base_url() . 'uploads/default.png' ?>" alt="asd" class="rounded-circle" height=70>
                        <?php endif; ?>
                    </td>
                    <td><?= $talent->category_name ?></td>
                    <td><?= $talent->skills ?></td>
                    <td>Detail</td>
                    
                </tr>                 
                <?php endforeach; ?>
            </tbody>
        </table>

		<?= $this->pagination->create_links(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>