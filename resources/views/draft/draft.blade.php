<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
  background-color: #FF9837;
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

/* Set a style for admin/superadmin buttons */
.container-super100-form-btn {
    width: 50%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}

.super100-form-btn {
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #ffffff;
    text-transform: uppercase;

    width: 50%;
    height: 50px;
    border-radius: 25px;
    background: linear-gradient(180deg, #F26419 0%, #FE9B01 100%);
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.super100-form-btn:hover {
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #FE9B01;
    text-transform: uppercase;

    width: 50%;
    height: 50px;
    border-radius: 25px;
    background: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
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

/* Button Group */

.btn-group button {
  background-color: #ffffff; /* Green background */
  border: 1px solid grey; /* Green border */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 100%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}


.hapus button {


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

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login Pelamar</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login Perusahaan</button>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Login Super Admin</button>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Login Admin</button>
<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Data Perusahaan</button>
<button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Ganti Kata Sandi</button>
<button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Ganti Email</button>
<button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Foto Profil Admin</button>
<button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Foto Profil Super Admin</button>
<button onclick="document.getElementById('id10').style.display='block'" style="width:auto;">Profil Berhasil di simpan</button>

<div id="id01" class="modal" style= "border-radius: 50px">
    <form class="modal-content animate" style= "border-radius: 50px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">

            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Selamat! Kata Sandi anda berhasil diubah.</h1>
                <h1 style= "margin-left: 320px; font-size: 20px">Silahkan masuk terlebih dahulu.</h1>
            </div>

            <div class="container" style="border-radius: 50px">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Beli</button>
            </div>

        </div>
        
    </form>
  
</div>

<div id="id02" class="modal">
    <form class="modal-content animate" style= "border-radius: 50px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Selamat! Kata Sandi anda berhasil diubah.</h1>
                <h1 style= "margin-left: 320px; font-size: 20px">Silahkan masuk terlebih dahulu.</h1>
            </div>

            <div class="container" style="border-radius: 50px">
                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Masuk</button>
            </div>
        </div>
    </form>
</div>

<div id="id03" class="modal">
    <form class="modal-content animate" style= "border-radius: 50px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Selamat! Kata Sandi anda berhasil diubah.</h1>
                <h1 style= "margin-left: 320px; font-size: 20px">Silahkan masuk terlebih dahulu.</h1>
            </div>
            <div class="container-super100-form-btn">
                <button class="super100-form-btn" onclick="document.getElementById('id03').style.display='block'">
                    Masuk
                </button>
            </div>
        </div>
    </form>
</div>

<div id="id04" class="modal">
    <form class="modal-content animate" style= "border-radius: 50px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Selamat! Kata Sandi anda berhasil diubah.</h1>
                <h1 style= "margin-left: 320px; font-size: 20px">Silahkan masuk terlebih dahulu.</h1>
            </div>
            <div class="container-super100-form-btn">
                <button class="super100-form-btn" onclick="document.getElementById('id03').style.display='block'">
                    Masuk
                </button>
            </div>
        </div>
    </form>
</div>

<div id="id05" class="modal">
    <form class="modal-content animate" style= "border-radius: 20px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id05').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "font-size: 20px">Data Perusahaan</h1>
                <h1 style= "font-size: 20px">Masukan nama Kandidat / username</h1>
                <div class="search">
                    <input type= "text" style= "width: 50%; border-radius: 15px">
                </div>
            </div>
            <div class="container" style="background-color:#ffffff; border-radius: 50px">
                <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Cari</button>
            </div>
        </div>
    </form>
</div>

<div id="id06" class="modal">
    <form class="modal-content animate" style= "border-radius: 20px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id06').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Kata sandi anda telah di ganti</h1>
            </div>
        </div>
    </form>
    
</div>

<div id="id07" class="modal">
    <form class="modal-content animate" style= "border-radius: 20px" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id07').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class= "title">
                <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
            </div>
            
            <div class="header" style="margin-bottom: 76px">
                <h1 style= "margin-left: 280px; font-size: 20px">Alamat email anda telah di ganti</h1>
            </div>
        </div>
    </form>
</div>

<div id="id08" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id08').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class="container">
                <div class="foto" style="margin-bottom: 76px">
                    <div class="btn-group">
                        <button class= "ubah" style= "color: #000000">Ubah Foto Profil</button>
                        <button class= "unggah" style= "color: #0610FF">Unggah Foto Profil</button>
                        <button class= "hapus1" style= "color: #FEB692">Hapus Foto Profil</button>
                        <button class= "batal" style= "color: #000000">Batal</button>
                    </div>      
                </div>
            </div>
        </div>
  
        <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
            <div class="container" style="background-color:#ffffff; border-radius: 50px">
                <button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Beli</button>
            </div>
        </div>
    </form>
</div>

<div id="id09" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id09').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
        </div>
  
        <div class="container">
            <div class="foto" style="margin-bottom: 76px">
                <div class="btn-group">
                    <button class= "ubah" style= "color: #000000">Ubah Foto Profil</button>
                    <button class= "unggah" style= "color: #0610FF">Unggah Foto Profil</button>
                    <button class= "hapus" style= "color: #FF0606">Hapus Foto Profil</button>
                    <button onclick="document.getElementById('id09').style.display='none'" class="cancelbtn" style= "color: #000000">Batal</button>
                </div>      
            </div>
        </div>
  
        <div class="container" style="background-color:#ffffff; margin-bottom: -50px">
            <div class="container" style="background-color:#ffffff; border-radius: 50px">
                <button onclick="document.getElementById('id09').style.display='block'" style="width:auto;">Beli</button>
            </div>
        </div>
    </form>
</div>

<div id="id10" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="header">
            <h1 style= "font-size: 30px"><i class="fa fa-check-circle" style="font-size: 50px; color:#09E712; margin-top: 50px; margin-right: 40px; margin-left: 20px" aria-hidden="true"></i>Profil berhasil disimpan </h1>
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
