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


</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55G599M" height="0" width="0" style="display:none;visibility:hidden">
		</iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="header-section fixed-top" style="background-color: white; border-bottom: 1px solid #dee2e6">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a href="/localhost/kreativhub">
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
									<a class="nav-link " href="home/result">TALENTS</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a href="talent/register" type="button" class="btn btn-warning roboto-medium" id="signup_button" style="color: white; font-size:14px !important; min-width:80px !important">DAFTAR</a>
							</ul>
						</div>
					</nav>
				</div>
			</div>

		</div>
	</header>
	<style>
		.featured-item {
			border-radius: 5px;
			transition: all 0.5s;
		}

		.featured-item img {
			width: 100%;
			height: 200px;
			object-fit: cover;
			padding-bottom: 0%;
			object-position: center center;
		}

		.section-card-mp {
			background: white;
			border-radius: 25px 25px 0 0;
			height: auto;
			padding-top: 100px;
			margin-top: -35px;
		}

		.btn-pasang-iklan {
			padding: 10px !important;
			width: 200px;
		}

		.img-ilustrasi img {
			display: block;
			margin: auto;
		}

		/* section header */

		.object-cover {
			width: 71em !important;
			height: auto;
			margin-left: auto;
			margin-right: auto;
		}

		.section-header .owl-nav {
			position: absolute;
			top: 40%;
			width: 100%;
			display: flex;
		}

		.section-header .owl-nav .owl-prev {
			text-align: center;
			background: white;
			background: #ffffff;
			color: #363636;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			border-radius: 50%;
			font-size: 32px;
			width: 42px;
			height: 42px;
		}

		.section-header .owl-nav .owl-next {
			margin-left: auto;
			text-align: center;
			background: white;
			background: #ffffff;
			color: #363636;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			border-radius: 50%;
			font-size: 32px;
			width: 42px;
			height: 42px;
		}

		.section-header .owl-dots {
			margin-left: 195px;
		}

		.section-header .owl-dot {
			background-color: #c4c4c4;
			height: 12px;
			width: 12px;
			display: inline-block;
			border-radius: 25px;
			cursor: pointer;
			outline: none;
			margin: 2px;
		}

		.section-header .owl-dot.active {
			width: 25px;
			background-color: #F5AA0E;
		}

		.section-header .owl-stage-outer {
			min-height: 300px;
		}

		/* end section header */

		/* section search */

		.section-search {
			background: url('https://www.kreatifhub.com/img/marketplace/landingpage/bg_blue_lp_mp.svg');
			background-size: cover;
			background-repeat: no-repeat;
			padding-top: 75px;
			height: 350px;
			margin-top: 40px;
		}

		.kategori-mp .owl-nav {
			width: 100%;
			display: flex;
			height: 0px;
		}

		.kategori-mp .owl-nav .owl-prev {
			position: absolute;
			top: 20%;
			left: -20px;
			text-align: center;
			background: white;
			background: #ffffff;
			color: #363636;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			border-radius: 50%;
			font-size: 28px;
			width: 35px;
			height: 35px;
		}

		.kategori-mp .owl-nav .owl-prev.disabled {
			display: none;
		}

		.kategori-mp .owl-nav .owl-next {
			position: absolute;
			top: 20%;
			right: -20px;
			text-align: center;
			background: white;
			background: #ffffff;
			color: #363636;
			box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
			cursor: pointer;
			border-radius: 50%;
			font-size: 28px;
			width: 35px;
			height: 35px;
		}

		.kategori-mp .owl-nav .owl-next.disabled {
			display: none;
		}

		/* end section search */

		/* Media CSS */

		@media (min-width: 1800px) {
			.section-header .owl-dots {
				margin-left: 18px;
				margin-top: 15px;
			}

			.section-header .owl-nav {
				position: absolute;
				top: 40%;
				width: 100%;
				display: flex;
			}

			.bannerhidden {
				display: none;
			}
		}

		@media (min-width: 1200px) and (max-width: 1799px) {
			.section-header .owl-dots {
				margin-left: 20px;
				margin-top: 15px;
			}

			.bannerhidden {
				display: none;
			}
		}

		@media (min-width: 1000px) and (max-width: 1199px) {
			.section-header .owl-dots {
				margin-left: 20px;
				margin-top: 15px;
			}

			.object-cover {
				width: 57em !important;
				height: auto;
				margin-left: auto;
				margin-right: auto;
			}

			.bannerhidden {
				display: none;
			}
		}

		@media screen and (max-width: 992px) {
			.section-post-project {
				background-size: 100vw 800px;
			}

			.section-header .owl-dots {
				margin-left: -2px;
				margin-top: -30px;
			}

			.bannerhidden2 {
				display: none;
			}
		}

		@media (min-width: 321px) and (max-width: 480px) {
			.section-header .owl-dots {
				margin-left: 28px;
				margin-top: -175px;
			}

			.section-header .owl-nav {
				position: absolute;
				top: 30%;
				width: 100%;
				display: flex;
			}

			.section-post-project {
				background-image: url('https://www.kreatifhub.com/img/marketplace/landingpage/bg_blue_lp_mp.svg');
				background-size: cover;
				background-repeat: no-repeat;
				height: 375px;
			}

			.img-ilustrasi img {
				display: block;
				margin: auto;
			}

			.object-cover {
				width: 22em !important;
				height: auto;
				margin-left: auto;
				margin-right: auto;
			}

			.bannerhidden2 {
				display: none;
			}

			.kategori-mp .owl-nav {
				position: absolute;
				top: 15%;
				left: 5%;
				width: 100%;
				display: flex;
				height: 0px;
			}
		}

		@media (max-width: 320px) {
			.section-header .owl-dots {
				margin-left: 10px;
				margin-top: -185px;
			}

			.section-header .owl-nav {
				position: absolute;
				top: 25%;
				width: 100%;
				display: flex;
			}

			.kategori-mp .owl-nav {
				position: absolute;
				top: 1%;
				width: 107%;
				display: flex;
			}

			.bannerhidden2 {
				display: none;
			}
		}

		/* END Media CSS */
	</style>

	<form method="post" action="<?= base_url('/home/result') ?>">
		<?php 
			$csrf = array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			);
		?>
		<div class="row m-0 justify-content-center" style="padding-top:5em">
			<div class="col-md-12 section-search">
				<div class="row m-0 justify-content-center mb-5">
					<div class="col-sm-12 col-md-12 col-lg-10 col-xl-10">
						<div class="row">
							<div class="col-md-12">
								<h4 style="color: #FFFFFF; font-weight:600">Jasa apa yang kamu butuhkan?</h4>
							</div>

							<div class="col-md-8 mt-3">
								<div class="input-group">
									<input name="keyword" type="text" class="form-control" id="search" placeholder="Contoh: Foto Produk, Desain Logo, Penerjemah, Voice Over, Makeup Artist" aria-label="" aria-describedby="basic-addon2">
								</div>
							</div>
							<div class="col-md-12 mt-3">
								<div class="kategori-mp owl-carousel owl-theme">

									<?php foreach ($categories as $categorie) : ?>
										<div class="card justify-content-center" style="height: 60px; cursor:pointer;">
											<div class="row m-0 align-items-center">
												<div class="form-check ml-4">
													<input class="form-check-input" type="checkbox" name="category[]" id="exampleRadios1" value="<?= $categorie['id']; ?>" />
													<label class="form-check-label" for="exampleRadios1">
														<?= $categorie['category_name']; ?>
													</label>
												</div>
											</div>
										</div>
									<?php endforeach; ?>

									<?php foreach ($select_skills as $key => $skill) : ?>
										<div class="card justify-content-center" style="height: 60px; cursor:pointer;">
											<div class="form-check ml-4">
												<input class="form-check-input" type="checkbox" name="skill[]" id="exampleRadios1" value="<?= $skill['skills'];  ?>" />
												<label class="form-check-label" for="exampleRadios1">
													<?= $skill['skills'];  ?>
												</label>
											</div>
										</div>
									<?php endforeach; ?>

								</div>
							</div>

						</div>
						<button type="submit" class="btn btn-default mt-4 btn-lg">Cari Jasa</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />		
	</form>			

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<script src="https://www.tokopda.com/themes/tokopda/css/owl.carousel.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/jquery.maskMoney.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(function() {
			get_marketplace_filter();

			$(document).on("click", ".pagination li button", function(event) {
				event.preventDefault();
				var pagination = $(this).data("ci-pagination-page");
				filter_marketplace(pagination);
			});

			$('.kategori-mp').owlCarousel({
				loop: false,
				nav: true,
				lazyLoad: true,
				dots: false,
				margin: 10,
				mouseDrag: true,
				responsive: {
					0: {
						items: 2,
					},
					320: {
						items: 2,
						nav: true,
					},
					480: {
						items: 3,
						nav: false,
					},
					600: {
						items: 3,
						stagePadding: 0,
					},
					1000: {
						items: 5,
					}
				}
			});

		});

		function get_marketplace_filter() {
			$('#list_marketplace').load('https://www.kreatifhub.com/marketplace/get_marketplace_filter_relevance');
		}

		function filter_marketplace(page) {
			let id_categories = $('#id_categories').val();
			let id_subcategories = $('#id_subcategories').val();
			let id_location = $('#id_location').val();
			let id_sort = $("#id_sort").val();
			let search = $("#search").val();

			$.ajax({
				url: "https://www.kreatifhub.com/marketplace/get_marketplace_filter_relevance_search",
				type: 'post',
				data: {
					id_categories: id_categories,
					id_subcategories: id_subcategories,
					id_location: id_location,
					id_sort: id_sort,
					search: search,
					page: page
				},
				cache: false,
				dataType: 'json',
				success: function(msg) {
					if (msg.count == 0) {
						$('#pages').html('');
						$('#list_katmarketplace').html('<div class="text-center"><img src="https://www.kreatifhub.com/img/404_activity.png" class="center" style="width:300px; height:auto;"><br/><span class="roboto-bold" style="font-size:20px">Tidak ada produk ditemukan</span><br/></div>');
						$('#list_marketplace').hide();
					} else {
						$('#pages').html(msg.pages);
						$('#list_katmarketplace').html(msg.send);
						$('#list_marketplace').hide();
					}
				},
				beforeSend: function(msg) {
					$('#list_katmarketplace').html('<p align="center">Loading...</p>');
				}
			});
		}
	</script>

	<style>
		.footer-empat {
			margin-top: -23px !important;
			border-top-right-radius: 24px;
			border-top-left-radius: 24px;
			background-color: #114997;
			line-height: 1.57;
			letter-spacing: 1px;
			font-size: 14px;
		}

		/*@media (max-width: 480px){
			.footer-empat{
				margin-top:
			}
		}*/
	</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/bootstrap.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/main.js"></script>
	<script src="https://www.kreatifhub.com/assets/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
	<script src="https://www.kreatifhub.com/assets/sweetalert2/sweetalert2.all.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/jquery.viewbox.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/jquery.maskMoney.js" type="text/javascript"></script>
	<script src="https://www.kreatifhub.com/assets/js/bootstrap-datepicker.min.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/tagsinput.js"></script>
	<script src="https://www.kreatifhub.com/assets/js/boxicons.js"></script>



</body>

</html>