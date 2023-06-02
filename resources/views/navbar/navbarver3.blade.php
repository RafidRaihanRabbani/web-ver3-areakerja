<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
  margin: 0;
}

.vertical ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #FF9637;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.vertical li a {
  display: block;
  color: #ffffff;
  padding: 8px 16px;
  text-decoration: none;
}

.vertical li a.active {
  color: white;
}

.vertical li a:hover:not(.active) {
  color: #FF9637;
  background-color: #000000;
}

.horizontal ul {
  list-style-type: none;
  margin: 0;
  padding: 10px;
  overflow: hidden;
  background: #ffffff
}

.horizontal li {
  float: right;
  
}

.horizontal li a {
  display: transparent;
  padding: 18px;
  color: rgb(255, 255, 255);
  
}

.horizontal li a.active {
  color: rgb(0, 0, 0);
}

.horizontal li a:hover:not(.active) {
  color: rgb(0, 0, 0);
}
</style>
</head>
<body>

<div class= "vertical">
  <ul>
    <li><a href="{{ route('home') }}"><img src="{{ asset('img/AREAKERJA.png') }}" alt="IMG" width="250px"/></li>
    <li><a href="#home"><i class="fa fa-gauge-high"></i> Dashboard </a></li>
    <hr class= "hrareakerja">
    <li><a href="#news"><i class="fa-solid fa-wallet"></i> Paket harga</a></li>
    <li><a href="#contact"><i class="fa-solid fa-sack-dollar"></i> Omset perusahaan</a></li>
    <li><a href="#about"><i class="fa fa-users" aria-hidden="true"></i> Bayar gaji admin</a></li>
    <li><a href="#contact"><i class="fa fa-money-bills"></i> Catatan transaksi</a></li>
    <hr class= "hrareakerja">
    <li><a href="#admin"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> Laporan transaksi</a></li>
    <li><a href="#user"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out </a></li>
  </ul>
</div>


<div class= "horizontal">
  <ul>
    <li style= "font-size: 40px">Finance</li>
  </ul>
</div>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Fixed Full-height Side Nav</h2>
  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
  <p>Some text..</p>
</div>

</body>
</html>


