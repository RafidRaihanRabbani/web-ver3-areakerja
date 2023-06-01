<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
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
  background-color: #f4a700;
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
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
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

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Isi Koin</button>
<button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Top Up</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Isi Koin Pay</h1>
        <hr class= "hrareakerja" style="width: 80%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>

      <div class="perusahaan">
        <label for="uname"><b>Nama Perusahaan</b></label>
        <input type="text" style="width: 50%; margin-left: 100px" placeholder="Masukan nama perusahaan anda" name="Nama Perusahaan" required>
      </div>
      
      <div class="email">
        <label for="uname"><b>Email</b></label>
        <input type="text" style="width: 50%; margin-left: 195px" placeholder="Masukan alamat email perusahaan anda" name="Email" required>
        <button class= "button" onclick="document.getElementById('id03').style.display='block'" style="width: 5%;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
      </div>

      <div class="password">
        <label for="psw"><b>Password</b></label>
        <input type="password" style="width: 50%; margin-left: 163px" placeholder="Masukan kata sandi anda" name="psw" required>
        <button class= "button" onclick="document.getElementById('id05').style.display='block'" style="width: 5%;"><i class="fa fa-pencil" aria-hidden="true"></i></button>
      </div>

      <div class="legalitas">
        <label for="uname"><b>Legalitas</b></label>
        <input type="text" style="width: 50%; margin-left: 170px" placeholder="Masukan legalitas perusahaan anda" name="Legalitas" required>
      </div>

      <div class="bidang">
        <label for="uname"><b>Bidang</b></label>
        <input type="text" style="width: 50%; margin-left: 185px" placeholder="Masukan bidang perusahaan anda" name="Bidang" required>
      </div>

      <div class="deskripsi">
        <label for="message-text" style="vertical-align: top"><strong>Deskripsi*</strong></label>
        <label for="message-text" style="margin-left: -83px; margin-bottom: 150px"><strong>Perusahaan</strong></label>
        <textarea class="form-control" style="margin-left: 149px; width: 680px; height: 50px" id="message-text"></textarea>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Next</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Isi Koin Pay</h1>
        <hr class= "hrareakerja" style="width: 80%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>

      <div class= "visi">
        <label for="Visi"><b>Visi</b></label>
        <input type="text" style="width: 35%; margin-left: 207px" name="Visi" required>
        <button class= "button" style="width: 5%;"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
      
      <div class= "Misi">
        <label for="Misi"><b>Misi</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Misi" required>
        <button class="button" style="width: 5%;"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Kembali</button>
      <button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Simpan</button>
    </div>
  </form>
</div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Ubah alamat email</h1>
        <hr class= "hrareakerja" style="width: 9%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>

      <div class="content">
        <h1 style= "font-size: 20px; margin-left: 350px">Masukan email baru anda.</h1>
        <h1 style= "font-size: 20px; margin-left: 250px">(email baru harus berbeda dari email sebelumnya)</h1>
      </div>

      <div class= "Email">
        <label for="Mail"><b>Email</b></label>
        <input type="text" style="width: 50%" name="Email" required>
      </div>
       
    </div>

    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Ubah Email</button>
    </div>
  </form>
</div>

<div id="id04" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 76px">
        <i class="fa fa-envelope" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 250px">Silahkan cek email baru anda</h1>
        <h1 style= "margin-left: 350px">untuk verifikasi.</h1>
      </div>

    </div>
  </form>
</div>

<div id="id05" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Ubah kata sandi</h1>
        <hr class= "hrareakerja" style="width: 10%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>
      
      <label for="Sandi"><b>Sandi Lama</b></label>
      <input type="text" name="Sandi" required>

      <hr class= "hrareakerja" style="width: 100%; height: 2px; color:#FF9837; background-color:#FF9837;">

      <label for="Sandi"><b>Sandi Baru</b></label>
      <input type="text" name="Sandi" required>

      <label for="Sandi"><b>Ulangi Kata Sandi</b></label>
      <input type="text" name="Sandi" required>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Ubah Kata Sandi</button>
    </div>
  </form>
</div>

<div id="id06" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id06').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 76px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 210px; font-size: 25px">Selamat! Kata Sandi anda berhasil diubah.</h1>
      </div>

    </div>
  </form>
</div>

<div id="id07" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id07').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 290px">Data berhasil disimpan.</h1>
      </div>

    </div>
  </form>
</div>

<div id="id08" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Edit Lowongan</h1>
        <hr class= "hrareakerja" style="width: 80%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>
      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Info Lowongan</h1>
      </div>
      <div class="Perkerjaan">
        <label for="pekerjaan"><b>Nama Perkerjaan</b></label>
        <input type="text" style="width: 50%; margin-left: 100px" placeholder="Masukan nama perusahaan anda" name="Nama Perusahaan" required>
      </div>
      
      <div class="posisi">
        <label for="posisi"><b>Posisi</b></label>
        <input type="text" style="width: 50%; margin-left: 183px" placeholder="Masukan alamat email perusahaan anda" name="Email" required>
      </div>

      <div class="gaji">
        <div class="row">
          <div class="min">
            <label for="gaji"><b>Kisaran Gaji</b></label>
            <input type="text" style="width: 20%; margin-left: 135px;" placeholder="Rp.-" name="min" required>
          </div>
          <div class="max" style= "margin-left: 440px; margin-top: -60px;">
            <label for="gaji"><b>Sampai</b></label>
            <input type="text" style="width: 35%; margin-left: 28px;" placeholder="Rp.-" name="min" required>
          </div>
        </div>
        <div class="jenis" style= "margin-top: 30px; margin-left: 230px">
          <div class="per-bulan">
            <input type="radio" id="per-bulan" name="jenis_pembayaran" value="per-bulan">
            <label for="per-bulan">per-bulan</label><br>
          </div>
          <div class="per-minggu" style= "margin-left: 300px; margin-top: -20px">
            <input type="radio" id="per-minggu" name="jenis_pembayaran" value="per-minggu">
            <label for="per-minggu">per-minggu</label><br>
          </div>
          <div class="per-hari" style= "margin-top: 40px">
            <input type="radio" id="per-hari" name="jenis_pembayaran" value="per-hari">
            <label for="per-hari">per-hari</label><br>
          </div>
          <div class="per-jam" style= "margin-left: 300px; ; margin-top: -20px">
            <input type="radio" id="per-jam" name="jenis_pembayaran" value="per-jam">
            <label for="per-jam">per-jam</label><br>
          </div>
          
        </div>
      </div>

      <div class="Lowongan" style= "margin-top: 20px">
        <label for="Lowongan"><b>Jenis Lowongan</b></label>
        <input type="text" style="width: 50%; margin-left: 100px" placeholder="Masukan legalitas perusahaan anda" name="Legalitas" required>
      </div>

      <div class="deskripsi">
        <label for="message-text" style="vertical-align: top"><strong>Deskripsi</strong></label>
        <label for="message-text" style="margin-left: -83px; margin-bottom: 150px"><strong>Perkerjaan</strong></label>
        <textarea class="form-control" style="margin-left: 149px; width: 680px; height: 50px" id="message-text"></textarea>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Selanjutnya > </button>
    </div>
  </form>
</div>

<div id="id09" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Edit Lowongan</h1>
        <hr class= "hrareakerja" style="width: 80%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>

      <div class= "title">
        <h1 style= "font-size: 20px; text-align: center">Syarat Pekerjaan</h1>
      </div>

      <div class="pendidikan">
        <label for="pendidikan"><b>Pendidikan</b></label>
        <div class= "jenis1" style="margin-left: 240px; margin-top: -20px">
          <div class="SD" >
            <input type="radio" id="SD" name="tingkat_pendidikan" value="SD">
            <label for="SD">SD</label><br>
          </div>
          <div class="SMP" style= "margin-left: 150px; margin-top: -20px">
            <input type="radio" id="SMP" name="tingkat_pendidikan" value="SMP">
            <label for="SMP">SMP</label><br>
          </div>
          <div class="SMA" style= "margin-left: 300px; margin-top: -20px">
            <input type="radio" id="SMA" name="tingkat_pendidikan" value="SMA">
            <label for="SMA">SMA</label><br>
          </div>
          <div class="SMK" style= "margin-left: 450px; margin-top: -20px">
            <input type="radio" id="SMK" name="tingkat_pendidikan" value="SMK">
            <label for="SMK">SMK</label><br>
          </div>
        </div>

        <div class= "jenis2" style="margin-left: 240px; margin-top: 20px">
          <div class="S1">
            <input type="radio" id="S1" name="tingkat_pendidikan" value="S1">
            <label for="S1">S1</label><br>
          </div>
          <div class="S2" style= "margin-left: 150px; margin-top: -20px">
            <input type="radio" id="S2" name="tingkat_pendidikan" value="S2">
            <label for="S2">S2</label><br>
          </div>
          <div class="S3" style= "margin-left: 300px; margin-top: -20px">
            <input type="radio" id="S3" name="tingkat_pendidikan" value="S3">
            <label for="S3">S3</label><br>
          </div>
        </div>
      </div>
      
      <div class="jurusan">
        <label for="jurusan"><b>Jurusan</b></label>
        <input type="text" style="width: 50%; margin-left: 175px" placeholder="Masukan alamat email perusahaan anda" name="Email" required>
      </div>

      <div class="gender" style="margin-bottom: 30px; margin-top: 30px;">
        <label for="gender"><b>Gender</b></label>
        <div class="row">
          <div class="laki" style="margin-top: -20px; margin-left: 21px">
            <input type="checkbox" style="width: 20%; margin-left: 135px;" placeholder=" " name="laki-laki" required>
            <label for="gaji"><b>Laki-Laki</b></label>
          </div>
          <div class="max" style= "margin-left: 440px; margin-top: -20px">
            <input type="checkbox" style="width: 35%; margin-left: 28px;" placeholder=" " name="perempuan" required>
            <label for="gaji"><b>Perempuan</b></label>
          </div>
        </div>
      </div>

      <div class="Umur" style="margin-bottom: 30px; margin-top: 30px;">
        <label for="gender"><b>Umur</b></label>
        <div class="row">
          <div class="min" style="margin-left: 240px; margin-right: -60px">
            <input type="text" style="width: 20%;" placeholder="Rp.-" name="min" required>
          </div>
          <div class="max" style= "margin-left: 440px; margin-top: -60px;">
            <label for="gaji"><b>Sampai</b></label>
            <input type="text" style="width: 35%; margin-left: 28px;" placeholder="Rp.-" name="min" required>
          </div>
        </div>
      </div>


      <div class="lamaran" style="margin-top: 20px; margin-bottom: 20px;">
        <label for="uname"><b>Batas lamaran</b></label>
        <input type="date" style="width: 50%; margin-left: 128px" placeholder="Masukan legalitas perusahaan anda" name="Legalitas" required>
      </div>

      <div class="lowongan">
        <label for="uname"><b>Batas Lowongan</b></label>
        <input type="date" style="width: 50%; margin-left: 110px" placeholder="Masukan bidang perusahaan anda" name="Bidang" required>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">< Kembali</button>
      <button onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Simpan</button>
    </div>
  </form>
</div>

<div id="id10" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id10').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 290px; margin-top: 20px">Lowongan berhasil disimpan.</h1>
      </div>

    </div>
  </form>
</div>

<div id="id11" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="get">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id10').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-trash" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 250px; margin-top: 20px">Yakin ingin menutup lowongan?</h1>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id11').style.display='none'" class="cancelbtn">Batal</button>
        <button onclick="document.getElementById('id12').style.display='block'" style="width:auto;">Tutup</button>
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

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id06');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id07');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id08');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id09');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>

</body>
</html>
