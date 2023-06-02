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

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Card Settings */

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
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
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Lowongan</button>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Pelamar</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
  
    <div class="container" style= "border-style: solid; border-color: #C5C5C5">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">Isi Koin Pay</h1>
        <hr class= "hrareakerja" style="width: 80%; margin-left: 0; height: 2px; color:#FF9837; background-color:#FF9837;">
      </div>
    
      <div class= "Transfer">
        <label for="Transfer" style= "margin-left: 20px"><b>Transfer Bank</b></label>
          <select name="Transfer" id="Transfer">
            <option value="metode"></option>
            <option value="BCA">Bank BCA</option>
            <option value="BNI">Bank BNI</option>
            <option value="BRI">BRI</option>
          </select>
      </div>
            
      <div class= "Transaksi">
        <label for="Transaksi" ><b>No Transaksi</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Transaksi" required>
      </div>

      <div class= "Dari">
        <label for="Dari"><b>Dari</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Dari" required>
      </div>

      <div class= "Ke">
        <label for="Ke"><b>ke</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Ke" required>
      </div>

      <div class= "Jumlah">
        <label for="Jumlah"><b>Jumlah Topup</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Jumlah" required>
      </div>

      <div class= "Total">
        <label for="Total"><b>Total Pembayaran</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Total" required>
      </div>
    </div>
  
    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Konfirmasi</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
  
    <div class="container" style= "border-style: solid; border-color: #C5C5C5">
      <div class="header" style="margin-bottom: 20px">
        <h1 style= "font-size: 20px">TOP UP BERHASIL <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-top: 50px" aria-hidden="true"></i></h1>
      </div>
        
      <div class= "Transaksi">
        <label for="Transaksi"><b>NO Transaksi</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Ke" required>
      </div>
            
      <div class= "Dari">
        <label for="Dari"><b>Dari</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Dari" required>
      </div>

      <div class= "Ke">
        <label for="Ke"><b>Ke</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Ke" required>
      </div>

      <div class= "Metode">
        <label for="Metode"><b>Metode Pembayaran</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Metode" required>
      </div>

      <div class= "Bank">
        <label for="Bank"><b>Nama Bank</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Bank" required>
      </div>

      <div class= "Topup">
        <label for="Topup"><b>Jumlah top up</b></label>
        <input type="text" style="width: 35%; margin-left: 205px" name="Topup" required>
      </div>

      <div class= "Total">
        <label for="Total"><b>Total pembayaran</b></label>
        <input type="text" style="width: 35%; margin-left: 155px" name="Misi" required>
      </div>

      <div class="footer">
        <img src="{{ asset('img/img-01(2).png') }}" alt="IMG" width="120px" style= "margin-left: 120px; margin-top: 30px; margin-bottom: 30px" />
      </div>
    </div>
  </form>
</div>


<div id="id03" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>
  
    <div class="container">
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "font-size: 25px; margin-left: 250px">Selamat! Lowongan anda sudah terpasang.</h1>
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
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "font-size: 20px; margin-left: 290px">Yakin ingin menolak <strong>[User]</strong>  ?</h1>
        <h1 style= "font-size: 20px; margin-left: 240px"><strong>[User]</strong> akan terhapus dari etalase anda.</h1>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
      <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Tolak</button>
    </div>
  </form>
</div>

<div id="id05" class="modal">
  
  <form class="modal-content animate" action="action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" style="margin-bottom: 20px" class="close" title="Close Modal">&times;</span>
    </div>
  
    <div class="container">
      <div class="header" style="margin-bottom: 126px">
        <i class="fa fa-check-circle" style="font-size: 50px; color:#FF9837; margin-left: 450px; margin-top: 50px" aria-hidden="true"></i>
        <h1 style= "margin-left: 290px">Yakin ingin menolak <strong>[User]</strong>  ?</h1>
        <h1 style= "margin-left: 240px"><strong>[User]</strong> terhapus dari etalase anda.</h1>
      </div>

      <div class="container" style="background-color:#f1f1f1; margin-bottom: -50px">
        <button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Konfirmasi</button>
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


</script>

</body>
</html>
