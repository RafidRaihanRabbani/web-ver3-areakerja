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

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Konfirmasi</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Beli</button>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Dibuka</button>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">CV</button>
<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Unduh CV</button>
<button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Rekrut</button>
<button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Rekrutan Telah di Kirim</button>
<button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Hapus Rekrutan</button>
<button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Download CV</button>

<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class= "title">
        <h1 style= "font-size: 40px; text-align: center">Konfirmasi</h1>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 340px; font-size: 20px">Konfirmasi pembeli Kandidat</h1>
        <h1 style= "margin-left: 300px; font-size: 20px">Bambang_Kurina untuk membuka CV</h1>
      </div>

    </div>

    <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Beli</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Batal</button>
    </div>
  </form>
  
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class= "title">
        <h1 style= "font-size: 40px; text-align: center; margin-bottom: 20px">Konfirmasi</h1>
      </div>
      
      <div class="header" style="margin-bottom: 40px">
        <h1 style= "margin-left: 300px; font-size: 20px">Yakin ingin membeli Talent Hunter?</h1>
      </div>

    </div>

    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Beli</button>
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Batal</button>
    </div>
  </form>
</div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class= "title">
        <h1 style= "font-size: 40px; text-align: center">Konfirmasi</h1>
      </div>
      
      <div class="header" style="margin-bottom: 76px">
        <h1 style= "margin-left: 360px; font-size: 20px">CV Berhasil dibuka</h1>
      </div>

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
        <i class="fa fa-download" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 350px">Unduh CV <strong>[User]?</strong></h1>
      </div>

    </div>
    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Unduh</button>
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Batal</button>
    </div>

  </form>

  
</div>

<div id="id05" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <div class="header" style="margin-bottom: 76px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 350px; font-size: 20px">CV berhasil diunduh.</h1>
      </div>

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
        <h1 style= "margin-left: 350px; font-size: 40px;">Konfirmasi</h1>
        <h1 style= "margin-left: 350px; font-size: 20px;">Yakin ingin merekrut <strong>[User]</strong> ?</h1>
      </div>

    </div>
    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Rekrut</button>
      <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Batal</button>
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
        <i class="fa fa-check-circle" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 320px; font-size: 20px;">Rekrutan anda berhasil dikirim.</h1>
        <h1 style= "margin-left: 250px; font-size: 20px;">Mohon tunggu konfirmasi dari Bambang Kurnia.</h1>
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
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 290px; font-size: 20px;">Bambang Kurnia berhasil dihapus</h1>
      </div>
    </div>
  </form>
</div>

<div id="id09" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 350px; font-size: 20px;">CV Bambang Kurnia berhasil</h1>
        <h1 style= "margin-left: 420px; font-size: 20px;">didownload</h1>
      </div>
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
        <i class="fa fa-check-circle" style="font-size: 50px; color:#F26419; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
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

<div id="id12" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id12').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 290px; margin-top: 20px">Lowongan berhasil tutup.</h1>
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

var modal = document.getElementById('id10');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal = document.getElementById('id11');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal = document.getElementById('id12');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
