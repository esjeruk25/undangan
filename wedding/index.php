<?php
    include 'things.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>section-layout-24</title>
    <link rel="stylesheet" href="assets/css/wedding.css">
    <style>table, th, td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <div id="section-1">
        <img class="pos-tl" src="assets/img/ornamen.png">
        <img class="pos-tr" src="assets/img/ornamen.png">
        <img class="pos-bl" src="assets/img/ornamen.png">
        <img class="pos-br" src="assets/img/ornamen.png">
        <div class="content">
            <h1 class="judul">The Wedding</h1>
            <h2 class="subjudul"><?php echo $nama ?></h2>
            <button class="button" type="button" onclick="bukaUndangan()">Buka Undangan</button>
        </div>
    </div>
    <div id="section-2">
        <img class="kia" alt="" src="assets/img/ornamen.png">
        <img class="kaa" alt="" src="assets/img/ornamen.png">
        <img class="kib" alt="" src="assets/img/ornamen.png">
        <img class="kab" alt="" src="assets/img/ornamen.png">
        <div class="gambar-container">
            <img src="assets/img/<?php echo $cincin ?>">
        </div>
        <p class="quotes"><?php echo $quotes ?></p>
    </div>
    <div id="section-3">
        <img class="kia1" alt="" src="assets/img/ornamen.png">
        <img class="kaa1" alt="" src="assets/img/ornamen.png">
        <img class="kib1" alt="" src="assets/img/ornamen.png">
        <img class="kab1" alt="" src="assets/img/ornamen.png">
        <div class="profile">
        <h2 class="profileh2"></h2>
        <div class="gambar-container-2">
            <img src="assets/img/<?php echo $foto_profil ?>">
        </div>
        <p class="profil_pria"><strong>Nama:</strong><?php echo $nama_pria ?><br>
            <strong>Putra dari :</strong><?php echo $ortu_pria ?><br>
            <strong>Tempat, Tanggal Lahir:</strong><?php echo $ttl_pria ?><br>
            <strong>Motto Hidup:</strong><?php echo $motto_pria?></p>
        </div>
        <div>
         <p class="profil_wanita"><strong>Nama:</strong><?php echo $nama_wanita ?><br>
            <strong>Putri dari :</strong><?php echo $ortu_wanita ?><br>
            <strong>Tempat, Tanggal Lahir:</strong><?php echo $ttl_wanita ?><br>
            <strong>Motto Hidup:</strong><?php echo $motto_wanita ?></p>
        </div>
    </div>
    <div id="section-4">
        <img class="kia2" alt="" src="assets/img/ornamen.png">
        <img class="kaa2" alt="" src="assets/img/ornamen.png">
        <img class="kib2" alt="" src="assets/img/ornamen.png">
        <img class="kab2" alt="" src="assets/img/ornamen.png">

        <h1 class="storyhead">Our Story</h1>
        <div class="story"><?php echo $story  ?></div>
    </div>
    <div id="section-5">
        <img class="kia2" alt="" src="assets/img/ornamen.png">
        <img class="kaa2" alt="" src="assets/img/ornamen.png">
        <img class="kib2" alt="" src="assets/img/ornamen.png">
        <img class="kab2" alt="" src="assets/img/ornamen.png">
        <h1 class="acarah1"> Acara </h1>
        <br>
        <div class="lokasi">
            <h3>Aula Madya</h3>
            <h4><?php echo $alamat ?></h4>
        </div>
        <div class="rundown">
            <h3>Akad Nikah</h3>
            <h4><?php echo $akad ?></h4>
            <br>
            <h3>Resepsi</h3>
            <h4><?php echo $resepsi ?></h4>
        </div>
    </div>
    <div id="section-6">
        <img class="kia2" alt="" src="assets/img/ornamen.png">
        <img class="kaa2" alt="" src="assets/img/ornamen.png">
        <img class="kib2" alt="" src="assets/img/ornamen.png">
        <img class="kab2" alt="" src="assets/img/ornamen.png">
        <div class="label"><form method="get" action="#"></form>
            <label for="txtnama">nama lengkap : </label>
            <input type="text" name="txtnama" id="txtnama">
            <br>
            <br>
            <label>tanggal lahir : </label>
            <input type="date" name="txttgl" id="txttgl">
            <br>
            <br>
                <label for="taalamat">Alamat lengkap :</label>
                <textarea name="talamat" id="taalamat">isi alamat</textarea>
                <br>
                <br>
                <label for="sb">datang sebagai :</label>
                   <select name="sb" id="sb">
                   <option disabled selected>Keluarga atau tamu?</option>
                    <option>keluarga</option>
                     <option>tamu</option>
                    </select>
            <br>
            <br>
            <label>Gender :</label>
            <br>
            <input type="radio" value="pria" name="rbgender" id="rbpria">
            <label for="rbgender">Pria</label>
            <br>
            <input type="radio" value="wanita" name="rbgender" id="rbwanita">
            <label for="rbgender">Wanita</label>
            <br>
            <input type="radio" value="mekanik" name="rbgender" id="rbmekanik">
            <label for="rbgender">Mekanik</label>
            </form>
        </div>
    </div>
    
    <div id="audio-box">
        <audio id="lagu" loop>
            <source src="assets/audio/C418 - Aria Math (Minecraft Volume Beta).mp3">
        </audio>
        <div id="music-button" onclick="putarLagu()">
            <img id="kontrol" src="assets/img/mute-removebg-preview.png">
        </div>
    </div>
    <div id="section-7">
        <img class="kia2" alt="" src="assets/img/ornamen.png">
        <img class="kaa2" alt="" src="assets/img/ornamen.png">
        <img class="kib2" alt="" src="assets/img/ornamen.png">
        <img class="kab2" alt="" src="assets/img/ornamen.png">
        <h3 class="judul7">Turut mengundang</h3>
        <table style="width:40%" class="table">
            <tr>
              <th>Nama</th>
            </tr>
            <tr>
              <td><?php echo $tamu1 ?></td>
            </tr>
            <tr>
              <td><?php echo $tamu2 ?></td>
            </tr>
            <tr>
              <td><?php echo $tamu3 ?></td>
            </tr>
            <tr>
              <td><?php echo $tamu4 ?></td>
            </tr>
          </table>          
    </div>
    <div id="section-8">
        <img class="kia2" alt="" src="assets/img/ornamen.png">
        <img class="kaa2" alt="" src="assets/img/ornamen.png">
        <img class="kib2" alt="" src="assets/img/ornamen.png">
        <img class="kab2" alt="" src="assets/img/ornamen.png">
        <h1 class="trims">TERIMA KASIH</h1>
    </div>
</body>
</html>    
<script src="assets/js/wedding.js"></script>