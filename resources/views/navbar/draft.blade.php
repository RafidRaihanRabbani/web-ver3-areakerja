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
  <li><a href="{{ route('berandape') }}">Beranda</a></li>
  <li><a href="{{ route('artikel') }}">Tips Kerja</a></li>
  <li><a href="{{ route('rekomendasi') }}">Lowongan</a></li>
  <li><a href="{{ route('daftar') }}">Daftar sebagai Kandidat</a></li>
  <li><a href="{{ route('login') }}" style="background-color: #fe7b54">Log in</a></li>
</ul>

</body>
</html>


