<?php
    include('data.php');
    $name = $_GET['nama'];
    $hasil = Tampil($name)
?>
<html>
    <head>
        <link rel="stylesheet" href="css/stylesheet.css">
        <!--<link rel="shortcut icon" href="img/logo_sicemet.png" type="image/x-icon" />-->
        <title>SiCemet</title>
    </head>
    <header style="position: fixed; background-color: #fff; margin:0; padding:20px 20px;">
            <div class="header-left">
                <img src="img/logo_sicemet.png">
            </div>
            <div class="header-right" style="padding-left: 200px;">
                <a class="btn-ulang" href="index.php">Mulai Ulang</a>
            </div>
    </header>
    <body>
        <article class="isi" id="isi">
			<ul class="isi-content">
				<li class="isi-left">
                    <div class="card">
                        <h1 class="judul-isi"><?php echo $name;?></h1>
                    </div>
				</li>
				<li class="isi-right">
                    <div class="card">
                        <center><img class="gambar" src="img\<?php echo $hasil['gambar']?>"></center>
                        <br>
                        <p><?php echo $hasil['penjelasan']?></p>
                        <h2 class="judul-sub">Kelebihan</h2>
                        <p>
                            <ul class="circle">
                            <?php 
                                $kelebihan = $hasil['kelebihan'];
                                foreach($kelebihan as $value){
                                    echo "<li><span>$value</span></li>";
                                }
                            ?>
                            </ul>
                        </p>
                        <h2 class="judul-sub">Kelemahan</h2>
                        <p>
                            <ul class="circle">
                            <?php 
                                $kekurangan = $hasil['kekurangan'];
                                foreach($kekurangan as $value){
                                    echo "<li><span>$value</span></li>";
                                }
                            ?>
                            </ol>
                        </p>
                    </div>
				</li>
			</ul>
        </article>
        <footer>
            <p>&#169 2020 All Right Reserved</p>
        </footer>
    </body>
</html>