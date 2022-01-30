<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; {{ $mempelai_pria->nama_panggilan }} & {{ $mempelai_wanita->nama_panggilan }} </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Web Undangan Nikah {{ $mempelai_pria->nama_panggilan }} & {{ $mempelai_wanita->nama_panggilan }}" />
	<meta name="keywords" content="Web Undangan Nikah {{ $mempelai_pria->nama_panggilan }} & {{ $mempelai_wanita->nama_panggilan }}" />
	<meta name="author" content="{{ $mempelai_pria->nama_panggilan }} & {{ $mempelai_wanita->nama_panggilan }}" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="Samsul Rijal" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="https://twitter.com/samsul_r" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<!-- Fancybox -->
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="/">Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-2">
					<audio id="track">
						<source src="{{ asset($musik->audio) }}" type="audio/mpeg" />
					</audio>

					<div id="player-container">
						<div id="play-pause" class="play"></div>
					</div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="/">Home</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	<!-- Background awal depan -->
	<header id="fh5co-header" class="fh5co-cover sam" role="banner" style="background-image:url({{ asset($background_foto->gambar) }} );" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-8 col-md-offset-2 text-center"> -->
				<div class="text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>{{ $mempelai_pria->nama_panggilan }} &amp; {{ $mempelai_wanita->nama_panggilan }}</h1>
							<h2>
								Akan segera melangsungkan pernikahan
								<p style="color:#f6993f">
									<span id="hari"></span>
									<span id="tanggal"></span>
								</p>
							</h2>
							<div class="simply-countdown simply-countdown-one" id="tanggal-countdown" style="font-size:15px; color: #fff "></div>
							<!-- <p><a href="#couple" class="btn btn-sm" id="play-pause">Save the date</a> -->
						</p>
							<div class="scroll-down d-flex justify-content-center">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<span class="text d-flex justify-content-center">Scroll down</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Assalamu'alaikum</h2>
					<p>Dengan Rahmat Allah yang Maha Kuasa <br>Insya Allah kami akan melangsungkan pernikahan pada:</p> 
					<p>
						<span style="color:black; font-size:15px" id="hari2"></span> 
						<span style="color:black; font-size:15px" id="tanggal2"></span>
					</p>
					<p>di {{ $akad_nikah->tempat }}</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="{{ $mempelai_pria->gambar }}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>{{ $mempelai_pria->nama_lengkap }}</h3>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
						<p>Putra {{ $mempelai_pria->putra }} Dari <br> Ayahanda {{ $mempelai_pria->nama_bapak }} <br> &amp; Ibu {{ $mempelai_pria->nama_ibu }}</p>					
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="{{ $mempelai_wanita->gambar }}" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>{{ $mempelai_wanita->nama_lengkap }}</h3>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
						<p>Putri {{ $mempelai_wanita->putri }} Dari <br> Ayahanda {{ $mempelai_wanita->nama_bapak }}  <br> &amp; Ibu {{ $mempelai_wanita->nama_ibu }}</p>					

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg bg-sam" style="background-image:url({{ asset($background_foto2->gambar) }}); background-position: center;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Undangan dan Acara</h2>
					<span>BAHAGIA RASANYA APABILA ANDA BERKENAN HADIR DAN MEMBERIKAN DOA RESTU KEPADA KAMI. KAMI MENGUNDANG ANDA UNTUK HADIR DALAM ACARA RESEPSI PERNIKAHAN KAMI BERIKUT INI</span>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Akad Nikah</h3>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span id="hari3"></span>
										<span id="tanggal3"></span>
									</div>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>Pukul</span>
										<span>{{ $akad_nikah->jam_mulai }} s/d {{ $akad_nikah->jam_selesai }} WIB</span>
									</div>
									<p>Bertempat di {{ $akad_nikah->tempat }}</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Resepsi</h3>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span id="hari4"></span>
										<span id="tanggal4"></span>
									</div>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>Pukul</span>
										<span>{{ $resepsi->jam_mulai }} s/d {{ $resepsi->jam_selesai }} WIB</span>
									</div>
									<p>Bertempat di {{ $resepsi->tempat }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Galeri Foto</h2>
					<p>Foto-foto kebahagian kami yang kami kenang selalu.</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-gallery-list">
						@foreach ($galeri_foto as $result)
						<!-- <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset($result->gambar) }}); ">
							<a class="color-6">
								<div class="case-studies-summary">
									<h2>{{ $result->keterangan }}</h2>
								</div>
							</a>
						</li> -->

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ asset($result->gambar) }}); ">
							<a
								data-fancybox="gallery"
								data-src="{{ asset($result->gambar) }}"
								data-caption="{{ $result->keterangan }}"
							>
							</a>
						</li>
						@endforeach
					</ul>		
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Video Prewedding</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 animate-box text-center">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
						<a href="https://youtu.be/_aI9zLLKf_U" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
					<iframe width="330" height="330" src="https://www.youtube.com/embed/_aI9zLLKf_U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div> -->

	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Doa dan Ucapan</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							@if(Session::has('success'))
								<div class="alert alert-success alert-dismissible show fade">
									<div class="alert-body">
									<button class="close" data-dismiss="alert">
										<span>&times;</span>
									</button>
									{{ Session('success') }}
									</div>
								</div>
							@endif
							<div class="owl-carousel-fullwidth">
								@foreach ($ucapan as $result)
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											
											@if (isset($result->gambar))
												<img src="{{ asset($result->gambar) }}" alt="user">
											@else
												<img src="{{ asset('frontend/images/user.jpg') }}" alt="user">											
											@endif
										</figure>
										<span>{{ $result->nama }} - <a class="twitter">{{ $result->alamat }}</a></span>
										<blockquote>
											<p>"{{ $result->ucapan }}"</p>
										</blockquote>
									</div>
								</div>
								@endforeach
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="{{ asset('frontend/images/couple-2.jpg') }}" alt="user">
										</figure>
										<span>John Doe - <a href="#" class="twitter">Bandung</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="{{ asset('frontend/images/couple-3.jpg') }}" alt="user">
										</figure>
										<span>John Doe - <a href="#" class="twitter">Jakarta</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);"> -->
	<div id="fh5co-started" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Kirim doa dan Ucapan</h2>
					<p>Tuliskan sesuatu ucapan berupa harapan ataupun doa untuk kedua mempelai.</p>
				</div>
			</div>

			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
    				<form action="{{ route('ucapan.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="form wow fadeIn">
					@csrf 
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="nama" class="form-control" name="nama" placeholder="Tulis nama lengkap anda" required="required">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="alamat" class="form-control" placeholder="Tulis alamat tinggal anda (optional)" >
								</div>
							</div>
					
							<div class="col-md-12">
								<div class="form-group">
									<textarea id="ucapan" name="ucapan" class="form-control"  cols="30" rows="10"  placeholder="Tuliskan ucapan atau doa untuk kedua mempelai" required="required"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fileName" class="label" style="color:#fff">Upload Gambar (optional)</label>
									<div class="file-upload">
										<div class="file-select">
											<div class="file-select-button" id="fileName">Choose File</div>
											<div class="file-select-name" id="noFile">No file chosen...</div> 
											<input type="file" name="gambar" id="chooseFile">
										</div>
									</div>
									
								</div>
							</div>
							
							<div class="col-md-12 text-center mt-4">
								<button class="btn btn-md btn-primary">Kirim doa dan Ucapan</button>
							</div>
              			</div>
            		</form>
				</div>
			</div>
		</div>
	</div>
	

	<div id="mapss" class="fh5co-section-gray">
		<div class="container">
			<div class="row"> 
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn" style="margin-bottom:20px;">
					<br><h2>Peta Lokasi</h2><span id="maps"></span>
					<p>Anda dapat menuju lokasi acara kami dengan bantuan peta dibawah ini. Atau anda bisa buka di <strong>
                    <br><br><a href="{{ $maps->url }}" target="_blank" class="btn btn-primary">Buka di Google Maps</a></strong></p>
				</div>
			
				<div class="col-md-12 text-center">
					<div id="map" class="mapbox">
						<iframe 
							src="{{ $maps->embed }}" 
							width="330" 
							height="250" 
							style="border:0;" 
							allowfullscreen="" 
							loading="lazy">
						</iframe>
					</div><br><br>
				</div>
			</div>
		</div>
	</div>
	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Copyright &copy; 2021. <a href="#">Samsul Rijal</a></small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<!-- <script src="js/jquery.min.js"></script> -->
	<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>

	<!-- jQuery Easing -->
	<!-- <script src="js/jquery.easing.1.3.js"></script> -->
	<script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>

	<!-- Bootstrap -->
	<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

	<!-- Waypoints -->
	<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>

	<!-- Carousel -->
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

	<!-- countTo -->
	<script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>

	<!-- Magnific Popup -->
	<!-- <script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script> -->

	<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('frontend/js/magnific-popup-options.js') }}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
	<script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
	
	<!-- Main -->
	<!-- <script src="js/main.js"></script> -->
	<script src="{{ asset('frontend/js/main.js') }}"></script>

	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("{{ $akad_nikah->tanggal }}").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		// Get today's date and time
		var now = new Date().getTime();
			
		// Find the distance between now and the count down date
		var distance = countDownDate - now;
			
		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			
		// Output the result in an element with id="demo"
		document.getElementById("tanggal-countdown").innerHTML = days + "hari " + hours + "jam "
		+ minutes + "menit " + seconds + "detik ";
			
		// If the count down is over, write some text 
		if (distance < 0) {
			clearInterval(x);
			document.getElementById("tanggal-countdown").innerHTML = "Pernikahan sudah berlangsung";
		}
		}, 1000);

		// convert date
		// akad nikah
		Date.prototype.toShortFormat = function() {
			let monthNames = [
				"Januari","Febuari","Maret","April",
				"Mei","Juni","Juli","Agustus",
				"September", "Oktober","November","Desember"
			];

			let day = this.getDate();

			let monthIndex = this.getMonth();
			let monthName = monthNames[monthIndex];

			let year = this.getFullYear();

			return `${day} ${monthName} ${year}`;  
		}

		let anyDate = new Date('{{ $akad_nikah->tanggal }}');

		document.getElementById("tanggal").innerHTML = anyDate.toShortFormat();
		document.getElementById("tanggal2").innerHTML = anyDate.toShortFormat();
		document.getElementById("tanggal3").innerHTML = anyDate.toShortFormat();

		var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
		var d = new Date('{{ $akad_nikah->tanggal }}');
		var dayName = days[d.getDay()];

		document.getElementById("hari").innerHTML = dayName + ',';
		document.getElementById("hari2").innerHTML = dayName + ',';
		document.getElementById("hari3").innerHTML = dayName;

		// Resepsi

		Date.prototype.toShortFormatResepsi = function() {
			let monthNamesResepsi = [
				"Januari","Febuari","Maret","April",
				"Mei","Juni","Juli","Agustus",
				"September", "Oktober","November","Desember"
			];

			let dayResepsi = this.getDate();

			let monthIndexResepsi = this.getMonth();
			let monthNameResepsi = monthNamesResepsi[monthIndexResepsi];

			let yearResepsi = this.getFullYear();

			return `${dayResepsi} ${monthNameResepsi} ${yearResepsi}`;  
		}

		let anyDateResepsi = new Date('{{ $resepsi->tanggal }}');

		document.getElementById("tanggal4").innerHTML = anyDateResepsi.toShortFormatResepsi();

		// hari
		var daysResepsi = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
		var dResepsi = new Date('{{ $resepsi->tanggal }}');
		var dayNameResepsi = daysResepsi[dResepsi.getDay()];

		document.getElementById("hari4").innerHTML = dayNameResepsi;

		</script>

		<script>
			// btn upload image
			$('#chooseFile').bind('change', function () {
				var filename = $("#chooseFile").val();
				if (/^\s*$/.test(filename)) {
					$(".file-upload").removeClass('active');
					$("#noFile").text("No file chosen..."); 
				}
				else {
					$(".file-upload").addClass('active');
					$("#noFile").text(filename.replace("C:\\fakepath\\", "").substring(0,30) + '...'); 
				}
			});
		</script>

		<script>
			function togglePlay(video) {
			var audio = document.getElementsByTagName("audio")[0];
			if (audio) {
				if (audio.paused) {
					audio.play();
					document.getElementById("button").src = "https://image.flaticon.com/icons/svg/149/149658.svg";
				} else {
					audio.pause();
					document.getElementById("button").src = "https://image.flaticon.com/icons/svg/149/149657.svg";
				}
			}
			}
		</script>

		<!-- JS Fancybox -->
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
		
		<!-- Alert success -->
    	<script>    
		$("document").ready(function(){
			setTimeout(function(){
			$("div.alert").remove();
			}, 5000 ); // 5 secs
		});
		</script>

		<!-- Music -->
		<script>
			var track = document.getElementById('track');

			var controlBtn = document.getElementById('play-pause');

			function playPause() {
				if (track.paused) {
					track.play();
					//controlBtn.textContent = "Pause";
					controlBtn.className = "pause";
				} else { 
					track.pause();
					//controlBtn.textContent = "Play";
					controlBtn.className = "play";
				}
			}

			controlBtn.addEventListener("click", playPause);
			track.addEventListener("ended", function() {
			controlBtn.className = "play";
			});

		</script>

	</body>
</html>

