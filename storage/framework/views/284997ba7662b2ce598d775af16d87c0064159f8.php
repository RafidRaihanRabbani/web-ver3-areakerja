<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #0004ff;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  border-radius: 20px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes  animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media  screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2>Modal Login Form</h2>

<div class= "Baris1" style= "margin-bottom: 20px">
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Hapus Kandidat</button>
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Berhasil Hapus Kandidat</button>
  <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Hapus Non Kandidat</button>
  <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Berhasil Hapus Non Kandidat</button>
  <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Hapus Perusahaan</button>
  <button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Berhasil Perusahaan</button>
  <button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Hapus Rekrutmen</button>
  <button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Berhasil Data Rekrutmen</button>
  <button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Hapus Talent Hunter</button>
  <button onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Berhasil Talent Hunter</button>
</div>

<div class= "Baris2" style= "margin-bottom: 20px">
  <button onclick="document.getElementById('id11').style.display='block'" style="width:auto;">Kandidat berhasil ditambah</button>
  <button onclick="document.getElementById('id12').style.display='block'" style="width:auto;">Non kandidat berhasil ditambah</button>
  <button onclick="document.getElementById('id13').style.display='block'" style="width:auto;">Perusahaan berhasil ditambah</button>
  <button onclick="document.getElementById('id14').style.display='block'" style="width:auto;">Talent Hunter berhasil disimpan</button>
  <button onclick="document.getElementById('id15').style.display='block'" style="width:auto;">Lowongan berhasil disimpan</button>
  <button onclick="document.getElementById('id16').style.display='block'" style="width:auto;">Kandidat berhasil ditambah</button>
  <button onclick="document.getElementById('id17').style.display='block'" style="width:auto;">Non kandidat berhasil ditambah</button>
  <button onclick="document.getElementById('id18').style.display='block'" style="width:auto;">Hapus Lowongan</button>
  <button onclick="document.getElementById('id19').style.display='block'" style="width:auto;">Hapus data</button>
  <button onclick="document.getElementById('id20').style.display='block'" style="width:auto;">Profil berhasil disimpan</button>
</div>

<div class= "Baris3" style= "margin-bottom: 20px">
  <button onclick="document.getElementById('id21').style.display='block'" style="width:auto;">Password berhasil disimpan</button>
  <button onclick="document.getElementById('id22').style.display='block'" style="width:auto;">Tambah Paket Data Koin</button>
  <button onclick="document.getElementById('id23').style.display='block'" style="width:auto;">Tambah Paket data pembayaran</button>
  <button onclick="document.getElementById('id24').style.display='block'" style="width:auto;">Edit Paket Data Pembayaran</button>
  <button onclick="document.getElementById('id25').style.display='block'" style="width:auto;">Edit Data Paket Harga Koin</button>
  <button onclick="document.getElementById('id26').style.display='block'" style="width:auto;">Tambahkan Visi-Misi</button>
  <button onclick="document.getElementById('id27').style.display='block'" style="width:auto;">Tambahkan Alamat</button>
  <button onclick="document.getElementById('id28').style.display='block'" style="width:auto;">Konfirmasi mengirim CV</button>
  <button onclick="document.getElementById('id29').style.display='block'" style="width:auto;">Lamaran telah terkirim</button>
  <button onclick="document.getElementById('id30').style.display='block'" style="width:auto;">Unduh CV anda</button>
</div>

<div class= "Baris4" style= "margin-bottom: 20px">
  <button onclick="document.getElementById('id31').style.display='block'" style="width:auto;">CV anda berhasil di Unduh</button>
</div>


<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 270px; font-size: 35px">Yakin mau hapus Kandidat ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id02" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 70px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Kandidat berhasil dihapus</h1>
    </div>
  </form>
</div>


<div id="id03" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 240px; font-size: 35px">Yakin mau hapus Non Kandidat ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id04" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 70px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Non Kandidat berhasil dihapus</h1>
    </div>
  </form>
</div>


<div id="id05" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 250px; font-size: 35px">Yakin mau hapus Perusahaan ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id06" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id06').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Perusahaan berhasil dihapus</h1>
    </div>
  </form>
</div>


<div id="id07" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 220px; font-size: 35px">Yakin mau hapus data recruitment ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id07').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id08" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id08').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Kandidat direkrut berhasil dihapus</h1>
    </div>
  </form>
</div>


<div id="id09" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 220px; font-size:35px">Yakin mau hapus data talent hunter ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id10" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id10').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Talent Hunter berhasil dihapus</h1>
    </div>
  </form>
</div>

<div id="id11" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id11').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Kandidat berhasil disimpan</h1>
    </div>
  </form>
</div>

<div id="id12" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id12').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Non Kandidat berhasil disimpan</h1>
    </div>
  </form>
</div>

<div id="id13" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id13').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Perusahaan berhasil disimpan</h1>
    </div>
  </form>
</div>

<div id="id14" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id14').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Talent Hunter berhasil disimpan</h1>
    </div>
  </form>
</div>

<div id="id15" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id15').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Lowongan berhasil disimpan</h1>
    </div>
  </form>
</div>

<div id="id16" class="modal">
  

  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id16').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Kandidat berhasil ditambah</h1>
    </div>
  </form>
</div>

<div id="id17" class="modal">
  

  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id17').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Non Kandidat berhasil ditambah</h1>
    </div>
  </form>
</div>

<div id="id18" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 235px; font-size: 35px">Yakin mau hapus Lowongan ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id18').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>


<div id="id19" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">

      <div class= "title">
        <i class="fa fa-trash" style="font-size: 70px; color:#000000; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 235px; font-size: 35px">Yakin mau hapus Data ?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id19').style.display='none'" class="cancelbtn">Batal</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Hapus</button>
    </div>
  </form>
  
</div>

<div id="id20" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id20').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Profil berhasil disimpan </h1>
    </div>
  </form>
</div>

<div id="id21" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id21').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="header">
      <h1 style= "font-size: 35px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Password berhasil disimpan </h1>
    </div>
  </form>
</div>

<div id="id22" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id22').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Tambah Paket Data Koin</h1>
      </div>
      <div class= "baris1" style="margin-bottom: 20px">
        <div class="kategori">
          <label for="kategori"><b>Kategori</b></label>
          <input type="text" style="width: 25%; margin-left: 100px" placeholder=" " name="kategori" required>
        </div>
      </div>
      
      <div class= "baris2" style="margin-bottom: 20px">
        <div class="jenis">
          <label for="jenis"><b>Jenis</b></label>
          <input type="text" style="width: 25%; margin-left: 123px;" placeholder=" " name="jenis" required>
        </div>

        <div class="type" style= "margin-left: 440px; margin-top: -60px">
          <label for="type"><b>Type</b></label>
          <input type="text" style="width: 45%; margin-left: 28px" placeholder=" " name="type" required>
        </div>

      </div>
    </div>

    <div class="deskripsi" style= "margin-bottom: 30px; margin-top: 30px; margin-bottom: 20px">
      <label for="message-text" style="vertical-align: top; margin-left: 15px"><strong>Deskripsi</strong></label>
      <textarea class="form-control" style="margin-left: 93px; width: 680px; height: 50px" id="message-text"></textarea>
    </div>

    <div class="koin" style= "margin-left: 15px;">
      <label for="koin"><b>Koin</b></label>
      <input type="number" style="width: 25%; margin-left: 129px" placeholder=" " name="koin" required>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id22').style.display='block'" style="width:auto;">Simpan </button>
    </div>
    
  </form>
</div>


<div id="id23" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id23').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Tambah Paket data Pembayaran</h1>
      </div>
      <div class= "baris1" style="margin-bottom: 20px">
        <div class="Perkerjaan">
          <label for="pekerjaan"><b>Kategori</b></label>
          <input type="text" style="width: 25%; margin-left: 100px" placeholder=" " name="Nama Perusahaan" required>
        </div>
      
        <div class="harga" style= "margin-left: 440px; margin-top: -60px;">
          <label for="harga"><b>Harga</b></label>
          <input type="text" style="width: 45%; margin-left: 28px" placeholder=" " name="type" required>
        </div>
      </div>
      
      <div class= "baris2" style="margin-bottom: 20px">
        <div class="jenis">
          <label for="jenis"><b>Jenis</b></label>
          <input type="text" style="width: 25%; margin-left: 123px;" placeholder=" " name="min" required>
        </div>

        <div class="koin" style= "margin-left: 440px; margin-top: -40px;">
          <label for="koin"><b>Koin</b></label>
          <input type="number" style="width: 45%; margin-left: 38px;" placeholder=" " name="min" required>
        </div>

      </div>
    </div>

    <div class="deskripsi" style= "margin-top: 30px; margin-bottom: 30px">
      <label for="message-text" style="vertical-align: top; margin-left: 15px"><strong>Deskripsi</strong></label>
      <textarea class="form-control" style="margin-left: 93px; width: 680px; height: 50px" id="message-text"></textarea>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id23').style.display='block'" style="width:auto;">Simpan </button>
    </div>
  </form>
</div>


<div id="id24" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id24').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Edit Paket Data Pembayaran</h1>
      </div>
      <div class= "baris1" style="margin-bottom: 20px">
        <div class="Perkerjaan">
          <label for="pekerjaan"><b>Kategori</b></label>
          <input type="text" style="width: 25%; margin-left: 100px" placeholder=" " name="kategori" required>
        </div>
      
        <div class="harga" style= "margin-left: 440px; margin-top: -60px;">
          <label for="harga"><b>Harga</b></label>
          <input type="text" style="width: 45%; margin-left: 28px" placeholder=" " name="harga" required>
        </div>
      </div>
      
      <div class= "baris2" style="margin-bottom: 20px">
        <div class="jenis">
          <label for="jenis"><b>Jenis</b></label>
          <input type="text" style="width: 25%; margin-left: 123px;" placeholder=" " name="jenis" required>
        </div>

        <div class="koin" style= "margin-left: 440px; margin-top: -40px;">
          <label for="koin"><b>Koin</b></label>
          <input type="number" style="width: 45%; margin-left: 38px;" placeholder=" " name="koin" required>
        </div>

      </div>
    </div>

    <div class="deskripsi" style= "margin-top: 30px; margin-bottom: 30px">
      <label for="message-text" style="vertical-align: top; margin-left: 15px"><strong>Deskripsi</strong></label>
      <textarea class="form-control" style="margin-left: 93px; width: 680px; height: 50px" id="message-text"></textarea>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id24').style.display='block'" style="width:auto;">Simpan </button>
      <button type="button" onclick="document.getElementById('id24').style.display='none'" class="cancelbtn">Hapus</button>
    </div>
  </form>
</div>


<div id="id25" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id25').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Edit Data Paket Harga koin</h1>
      </div>

      <div class= "baris1" style="margin-bottom: 20px">
        <div class="kategori">
          <label for="kategori"><b>Kategori</b></label>
          <input type="text" style="width: 25%; margin-left: 100px" placeholder=" " name="kategori" required>
        </div>
      
        <div class="type" style= "margin-left: 440px; margin-top: -60px;">
          <label for="type"><b>Type</b></label>
          <input type="text" style="width: 45%; margin-left: 28px" placeholder=" " name="type" required>
        </div>
      </div>
      
      <div class= "baris2" style="margin-bottom: 20px">
        <div class="jenis">
          <label for="jenis"><b>Jenis</b></label>
          <input type="text" style="width: 25%; margin-left: 123px;" placeholder=" " name="jenis" required>
        </div>

        <div class="koin" style= "margin-left: 440px; margin-top: -40px;">
          <label for="koin"><b>Koin</b></label>
          <input type="number" style="width: 45%; margin-left: 28px;" placeholder=" " name="koin" required>
        </div>

      </div>
    </div>

    <div class="deskripsi" style= "margin-top: 30px; margin-bottom: 30px">
      <label for="message-text" style="vertical-align: top; margin-left: 15px"><strong>Deskripsi</strong></label>
      <textarea class="form-control" style="margin-left: 93px; width: 680px; height: 50px" id="message-text"></textarea>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id25').style.display='block'" style="width:auto;">Simpan </button>
      <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Hapus</button>
    </div>
  </form>
</div>


<div id="id26" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id26').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Visi-Misi</h1>
        <hr class= "hrareakerja" style="width: 5%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>

      <div class= "visi">
        <label for="Visi"><b>Visi</b></label>
        <input type="text" style="width: 35%; margin-left: 207px" name="Visi" required>
      </div>
      
      <div class= "Misi">
        <label for="Misi"><b>Misi</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Misi" required>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id26').style.display='block'" style="width:auto;">Simpan</button>
    </div>
  </form>
</div>

<div id="id27" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id27').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Alamat</h1>
      </div>

      <div class="provinsi">
        <label for="provinsi"><b>Provinsi</b></label>
        <input type="text" style="width: 50%; margin-left: 174px" placeholder="" name="Provinsi" required>
      </div>
      
      <div class="kecamatan">
        <label for="kecamatan"><b>Kecamatan</b></label>
        <input type="text" style="width: 50%; margin-left: 151px" placeholder="" name="Kecamatan" required>
      </div>

      <div class="kota">
        <label for="kota"><b>Kota</b></label>
        <input type="text" style="width: 50%; margin-left: 200px" placeholder="" name="Kota" required>
      </div>

      <div class="kode">
        <label for="kode"><b>Kode pos</b></label>
        <input type="text" style="width: 50%; margin-left: 163px" placeholder="" required>
      </div>

      <div class="detail">
        <label for="detail"><b>Detail Lainnya</b></label>
        <input type="text" style="width: 50%; margin-left: 127px" placeholder="" name="detail" required>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id27').style.display='block'" style="width:auto;">Simpan</button>
    </div>
  </form>
</div>

<div id="id28" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="get">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id28').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class= "title">
        <h1 style= "font-size: 40px; text-align: center">Konfirmasi</h1>
      </div>
      
      <div class="header" style="margin-bottom: 126px">
        <h1 style= "font-size: 25px; margin-left: 220px; margin-top: 20px">CV anda akan dikirimkan ke (Nama Perusahaan)</h1>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Batal</button>
        <button onclick="document.getElementById('id12').style.display='block'" style="width:auto;">Tutup</button>
      </div>

    </div>
  </form>
</div>

<div id="id29" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id29').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 270px; margin-top: 20px">Lamaran anda telah terkirim.</h1>
      </div>

    </div>
  </form>
</div>

<div id="id30" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id30').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 76px">
        <i class="fa fa-download" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 300px">Unduh CV anda sekarang?</strong></h1>
      </div>

    </div>
    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Unduh</button>
      <button type="button" onclick="document.getElementById('id30').style.display='none'" class="cancelbtn">Batal</button>
    </div>

  </form>

  
</div>

<div id="id31" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id31').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class="header" style="margin-bottom: 76px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 350px; font-size: 20px">CV Anda berhasil diunduh.</h1>
      </div>

    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id06');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id07');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id08');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id09');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id10');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/draft/draftadmin.blade.php ENDPATH**/ ?>