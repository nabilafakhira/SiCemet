<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="shortcut icon" href="img/logo_sicemet.png" type="image/x-icon" />-->
        <title>SiCemet</title>
       <script>
           function reset(){
                document.querySelectorAll('input:checked').checked = false;
                document.location="index.php#form";
            }
       </script>
    </head>
    <body>
    <header>
            <div class="header-left">
                <img src="img/logo_sicemet.png">
        </div>
    </header>
    <article class="banner" id="beranda" style="padding:50px;">
    
			<div class="banner-img"></div>
			<ul class="banner-content">
				<li class="banner-left">
                <h1>SiCemet Kini Hadir Untuk Anda!</h1>
                <h3>Aplikasi simulasi untuk cek metodologi agar sesuai 
                    dengan karakteristik proyek dalam pengembangan sistem</h3>
					<a href="#form" class="btn-mulai">Mulai</a>
				</li>
				<li class="banner-right">
					<img src="img/ilustrasi1.png" class="ilustrasi-banner">
				</li>
			</ul>
        </article>
        <article class="detail">
			<ul class="detail-content" id="form">
				<li class="detail-left">
                <h1 class="judul" >PILIH KRITERIA</h1>
                <form class="form" method="post" name="form">
                    <table>
                    <tr><td colspan="2" class="kriteria-title">Kebutuhan Awal</td></tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="kebutuhan" id="jelas" value="jelas" onclick="reset_msg_kebutuhan();">
                            <label class="dua" id="kebutuhan1" for="jelas">Dapat Dijelaskan</label>

                            <input type="radio" name="kebutuhan" id="belum" value="belum" onclick="reset_msg_kebutuhan();">
                            <label class="dua" id="kebutuhan2" for="belum">Belum Jelas</label>
                            <div id="msg"></div>
                        </td>
                    </tr>
                    <tr><td colspan="2" class="kriteria-title">Kompleksitas</td></tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="komplek"  id="sederhana" value="sederhana" onclick="reset_msg_komplek();">
                            <label class="tiga" id="komplek1" for="sederhana">Sederhana</label>

                            <input type="radio" name="komplek" id="kompleks" value="kompleks" onclick="reset_msg_komplek();">
                            <label class="tiga" id="komplek2" for="kompleks">Kompleks</label>

                            <input type="radio" name="komplek"  id="sangat" value="sangat" onclick="reset_msg_komplek();">
                            <label class="tiga" id="komplek3" for="sangat">Sangat Kompleks</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="kriteria-title">Waktu Delivery</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="waktu" id="1" value="1" onclick="reset_msg_waktu();">
                            <label class="empat" id="waktu1" for="1">< 1 Bulan</label>

                            <input type="radio" name="waktu" id="3" value="3" onclick="reset_msg_waktu();">
                            <label class="empat" id="waktu2" for="3">1 - 3 Bulan</label>
                            
                            <input type="radio" name="waktu" id="6" value="6" onclick="reset_msg_waktu();">
                            <label class="empat" id="waktu3" for="6">4 - 6 Bulan</label>
                            
                            <input type="radio" name="waktu" id="12" value="12" onclick="reset_msg_waktu();">
                            <label class="empat" id="waktu4" for="12">6 - 12 Bulan</label>
                        </td>
                    </tr>
                    <tr><td colspan="2" class="kriteria-title">Jumlah Tim (SDM)</td></tr>
                    <tr>
                        
                        <td colspan="2">
                            <input type="radio" name="orang" id="kurang12" value="kurang12" onclick="reset_msg_orang();">
                            <label class="dua" id="orang1" for="kurang12">< 12 Orang</label>

                            <input type="radio" name="orang" id="lebih12" value="lebih12" onclick="reset_msg_orang();">
                            <label class="dua" id="orang2" for="lebih12">> 12 Orang</label>
                        </td>
                    </tr>
                    <tr><td colspan="2" class="kriteria-title">Keterampilan Tim</td></tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="kemampuan" id="pengalaman" value="pengalaman" onclick="reset_msg_kemampuan();">
                            <label class="tiga" id="kemampuan1" for="pengalaman">Berpengalaman</label>

                            <input type="radio" name="kemampuan" id="campuran" value="campuran" onclick="reset_msg_kemampuan();">
                            <label class="tiga" id="kemampuan2" for="campuran">Campuran</label>

                            <input type="radio" name="kemampuan" id="tidakAda" value="tidakAda" onclick="reset_msg_kemampuan();">
                            <label class="tiga" id="kemampuan3" for="tidakAda">Tidak Berpengalaman</label>
                        </td>
                    </tr>
                    <tr><td colspan="2" class="kriteria-title">Klien Terlibat Langsung</td></tr>
                    <tr>
                        <td colspan="2">
                            <input type="radio" name="klien" id="terlibat" value="terlibat" onclick="reset_msg_klien();">
                            <label class="dua" id="klien1" for="terlibat">Terlibat</label>

                            <input type="radio" name="klien" id="tidak" value="tidak" onclick="reset_msg_klien();">
                            <label class="dua" id="klien2" for="tidak">Tidak Terlibat</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="center"><input class="submit" type="submit" name="submit" value="Submit" onclick="return send();"></td>
                        <td class="center"><input class="submit" type="submit" onclick="reset();" value="Reset"></td>
                    </tr>
                </table><br>
                </form>
				</li>
				<li class="detail-right" id="hasil">
                    <h1 class="judul">HASIL</h1>
                    <table style="width: 100%;">
                    <?php
                        if(isset($_POST['submit'])){
                            if(empty($_POST['kebutuhan']) || empty($_POST['komplek']) || empty($_POST['waktu']) || empty($_POST['orang']) || empty($_POST['kemampuan']) || empty($_POST['klien'])){
                                echo '<script>alert("Lengkapi Kriteria!");</script>';
                    
                            }
                            else{
                                $kebutuhan = $_POST['kebutuhan'];
                            $komplek = $_POST['komplek'];
                            $wak = $_POST['waktu'];
                            $orang = $_POST['orang'];
                            $kemampuan = $_POST['kemampuan'];
                            $klien = $_POST['klien'];

                            include('fungsi.php');
                            $hasil= Analisis($kebutuhan,$komplek,$wak,$orang,$kemampuan,$klien);
                            foreach($hasil as $key => $value){
                                $hasil = ceil($value / 0.06);
                            echo '
                            <tr>
                            <td class="nilai">Skor '.$hasil.'%</td>
                            <td class="hasil-title hasil">'.$key.'</td>
                            <td class="btn-detail"><a href="detail.php?nama='.$key.'">Detail</a></td>
                            </tr>';}
                            echo '<script>document.location="index.php#hasil";</script>';
                            }
                        }
                        ?>
                        
                    </table>
				</li>
			</ul>
        </article>
        <footer>
            <p>&#169 2020 All Right Reserved</p>
        </footer>
        <script src="js/validasi.js"></script>
    </body>
</html>