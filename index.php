<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Naufal</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Selamat Datang <small> Di Web Saya</small>
				</h1>
			</div>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="#profile">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#pengalaman">Pengalaman</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#kontak">Kontak</a>
				</li>
			</ul><img alt="" src="../img/th.jpeg">
			<div class="profile">
				<h1>
					Perkenalan
				</h1>
			</div>
			<?php 
			$perkenalan = "Halo nama saya Naufal Rizqi Ramadhan. Saya adalah mahasiswas di salah satu kampus swasta di bandung yaitu kampus STMIK Jabar yg ada di jalan Soekarno-Hatta dan saya tinggal di bandung selatan atau lebih tepat nya di KAB.Bandung, dan saya sedang mengambil program kampus merdeka yaitu Studi Independen di Mitra PT.Hendevane mengambil program Full Stack Web Developer";
			$pengalaman = array(array("title" => "Anggota Osis", "description" => "Saat SMP saya pernah menjadi anggota osis dan aktif ikut serta dalam kegiatan yg selalu di adakan di sekolah"), array("title" => "Anggota HIMA", "description" => "Saat ini saya menjadi Ketua Minat & Bakat di dalam organisasi di kampus yaitu HIMATIF dan saya bergerak di bidang olahraga & juga menyalurkan minat dan bakat mahasiswa khusus nya di HIMATIF"));
			$kontak = array("instagram" => "@nau.falramadhan", "alamat" => "Bandung, Jawa Barat", "phone" => "(+62)82120785492");

			echo "<p>$perkenalan</p>";
			echo "<div class=\"pengalaman\">";
    foreach ($pengalaman as $experience) {
        echo "<div class=\"col-md-6\">";
        echo "<h2>" . $experience["title"] . "</h2>";
        echo "<p>" . $experience["description"] . "</p>";
        echo "</div>";
    }
    echo "</div>";
	echo "<div class=\"kontak\">";
	echo "<div class=\"col-md-12\">";
	echo "<address>";
	echo "<strong>Kontak</strong><br> Instagram : ".$kontak["instagram"]."<br>".$kontak["alamat"]."<br>".$kontak["phone"];
	echo "</address>";
	echo "</div>";
	echo "</div>";
			?>
			
			  	
			
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<strong>Kontak</strong><br> Instagram : @nau.falramadhan<br> Bandung, Jawa Barat<br> <abbr title="Phone"> (+62)82120785492