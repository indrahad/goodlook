<!DOCTYPE html>
<head>
	<link rel="stylesheet" type=" text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/kustom.css">
	<title>
		Homepage	
	</title>
</head>
<body>
	<!-- body -->
	<div>
		<!-- header -->
		<div id="header" >
			<div class="container paddingbawah">
					<img src="foto/logo2.png" alt="">
			</div>
		</div>
		<!-- navbar -->
		<nav id="navbarlass" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">HOME </a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="article.php">Article</a></li>
					<li><a href="photos.php">Photos</a></li>
					<li><a href="videos.php">Videos</a></li>
					<li class="active"><a href="fucktric.php">Fucktric</a></li>
					<li><a href="community.php">Community</a></li>
				</ul>
			</div>
		</nav>
		<!-- nav end -->
		<!-- konten -->
		<div class="container">
		<div class="row">
		<div id="konten" class="col-md-8">
			<ul class="breadcrumbs breadcrumb">
				<li>
					Beranda
				</li>
				<li>
					Fucktrick
				</li>
			</ul>
		</div>			
		</div>
		</div>
		<!-- anyar end -->
		<!-- Body -->
		<div class="container" id="artikel" >
			<div class="row">
				<div class="col-md-9">
					<h2 class="remove"> 
						<a href="artikel.php" class="fontartikel">Parkir Motor, Jangan Malas Pakai Standar Tengah</a>
					</h2>
					<p class="afterr"></p>
					<h4>
						<img src="foto/parkirr.jpg" class="ctr" alt="">
						<p class="paragraf">
							Sepeda motor saat parkir paling mudah menggunakan standar samping. Hanya tinggal menurunkan standar tanpa usaha lebih, motor sudah berdiri.
							<br>
							<br>
							Namun ternyata penggunaan standar samping ini kurang direkomendasikan untuk jangka waktu lama. Beberapa alasannya ternyata tidak kita sadari.
							<br>
							<br>
							“Standar samping buat ruang lebih banyak untuk motor karena motor miring. Resiko lecet, sampai jatuh juga besar bila di parkiran umum. Jangka waktu lama, berpengaruh pada beberapa bagian motor,” ucap Agus dari Dairy Motor Pondok Bambu, saat ditemui beberapa waktu lalu.
							<br>
							<br>
							Menurut Agus, karena beban motor di sebelah kiri, kemungkinan besar dapat merusak suspensi motor di sebelah kiri. Ini karena bobot motor ditahan satu penyangga.						
							<br>
							<br>
							Di lahan parkir, penggunaan standar samping memang memaksimalkan tempat. Namun juga beresiko motor tersenggol sehingga jatuh menimpa motor lain.
							<br>
							<br>
							Untuk itu disarankan melihat kondisi lahan parkir. Gunakan standar tengah bila memungkinkan. Bila berada di satu tempat lebih dari 30 menit, baiknya gunakan standar tengah yang lebih stabil.
							<br>
						</p>
					</h4>
					<ul class="medsos">
						<li><a href=""><img src="foto/fb.jpg" alt=""></a></li>
						<li><a href=""><img src="foto/twitter.jpg" alt=""></a></li>
						<li><a href=""><img src="foto/wa.jpg" alt=""></a></li>
						</u>
					</div>
					<div class="col-md-3">
						<div>
							<img src="foto/iklan.jpg" class="ctriklan" alt="">
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="videotitle">
							Artikel Terkait
						</h2>	
						<p class="afterr"></p>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h3>
										<a class="fontsatu" href="#">Cara Semir Ban Motor yang baik</a>
									</h3>
									<span class="post-date"> 
										30 Juni 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Memilih Oli motor terbaik</a>
									</h2>
									<span class="post-date"> 
										09 Mei 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Helm Motor bau, ini Solusinya</a>
									</h2>
									<span class="post-date"> 
										17 April 2017
									</span>
								</div>							
							</div>
						</article>
						<article class="post">
							<div class="post-content">
								<div class="post-title">
									<h2>
										<a class="fontsatu" href="#">Mencuci motor yang benar</a>
									</h2>
									<span class="post-date"> 
										28 Maret 2017
									</span>
								</div>							
							</div>
						</article>					
					</div>

				</div>
			</div>	
		</div>
		<!-- Body end -->
		<!-- footer -->
		<div id="footer">
			<h5>&copy; 2017 all wheels Indonesian.</h5>
		</div>

	</div>
	<!-- Scrip SLider -->
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<!-- scrip slider end -->
</body>
</html>