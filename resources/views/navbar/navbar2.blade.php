<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ffffff;
}

li {
  float: left;
}

li a {
  display: block;
  color: #5b5b5b;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


</style>
</head>
<body>


<ul>

  <li><a href="{{ route('home') }}"><img src="{{ asset('img/img-01(2).png') }}" style="width:60px;" alt="" title="" /></li>
  <li><a href="{{ route('berandape') }}">Dashboard</a></li>
  <li><a href="{{ route('artikel') }}">Pasang Lowongan</a></li>
  <li><a href="{{ route('rekomendasi') }}">Recruitment</a></li>
  <li><a href="{{ route('daftar') }}">Talent Hunter</a></li>
  <div class="dropdown">
    <button class="dropbtn">
      Perusahaan
    </button>
    <div class="dropdown-content">
      <a href="#">Notifikasi</a>
      <a href="#">Kandidat</a>
      <a href="#">Coin</a>
      <a href="{{ route('pengaturan') }}">Pengaturan</a>
      <a href="{{ route('berandape') }}">Log out</a>
    </div>
  </div>
  <li><a href="{{ route('login') }}" style="background-color: #fe7b54">Perusahaan A</a></li>
</ul>

</body>
</html>


