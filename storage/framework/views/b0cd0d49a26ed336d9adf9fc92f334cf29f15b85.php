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

  <li><a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/img-01(2).png')); ?>" style="width:60px;" alt="" title="" /></li>
  <li><a href="<?php echo e(route('berandape')); ?>">Dashboard</a></li>
  <li><a href="<?php echo e(route('artikel')); ?>">Pasang Lowongan</a></li>
  <li><a href="<?php echo e(route('rekomendasi')); ?>">Recruitment</a></li>
  <li><a href="<?php echo e(route('daftar')); ?>">Talent Hunter</a></li>
  <div class="dropdown">
    <button class="dropbtn">
      Perusahaan
    </button>
    <div class="dropdown-content">
      <a href="#">Notifikasi</a>
      <a href="#">Kandidat</a>
      <a href="#">Coin</a>
      <a href="<?php echo e(route('pengaturan')); ?>">Pengaturan</a>
      <a href="<?php echo e(route('berandape')); ?>">Log out</a>
    </div>
  </div>
  <li><a href="<?php echo e(route('login')); ?>" style="background-color: #fe7b54">Perusahaan A</a></li>
</ul>

</body>
</html>


<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/navbar/navbar2.blade.php ENDPATH**/ ?>