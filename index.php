<?php
	session_start();
	if(!empty($_SESSION["namaadm"]) && !empty($_SESSION["passadm"])){
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Halaman Administrator</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>

<body>
<div class="container1">
	<div class="grid">
	  <div class="dh2">
		  <ul id="menu">
			<li><a href="" class="current">Selamat Datang</a></li>
			<li><a href="<?php echo "?p=home";?>">Beranda</a></li>
			<li><a href="<?php echo "?p=olah";?>">Olah Data</a></li>
			<li><a href="<?php echo "?p=prediksi";?>">Prediksi</a></li>
			<li><a href="<?php echo "?p=logout";?>">Logout</a></li>
			</ul>
		  </div>
		<div class="dh10">
		  <div class="nav">Halaman Peramalan Dan Prediksi BI Rate</div>
				<div class="isiadmin">
<?php
	if($_GET["p"] == "olah"){
		include "olah.php";	
	}else if($_GET["p"] == "add"){
		include "add.php";	
	}else if($_GET["p"] == "addaksi"){
		include "addaksi.php";
	}else if($_GET["p"] == "olahedit"){
		include "olahedit.php";
	}else if($_GET["p"] == "olaheditaksi"){
		include "olaheditaksi.php";
	}else if($_GET["p"] == "olahdel"){
		include "olahdel.php";	
	}else if($_GET["p"] == "olahdelprediksi"){
		include "olahdelprediksi.php";	
	}else if($_GET["p"] == "olahkelo"){
		include "kelola.php";	
	}else if($_GET["p"] == "kelolaksi"){
		include "kelolaksi.php";	
	}else if($_GET["p"] == "prediksi"){
		include "prediksi.php";	
}else if($_GET["p"] == "prediksiaksi"){
		include "prediksiaksi.php";			
	}else if($_GET["p"] == "logout"){
		include "logout.php";
	}else{
		include "home.php";
	}
?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<?php
	}else{
		include "login.php";
	}
?>