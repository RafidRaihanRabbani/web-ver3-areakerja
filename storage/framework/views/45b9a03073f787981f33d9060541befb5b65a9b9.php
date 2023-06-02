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
  <li><a href="<?php echo e(route('berandape')); ?>">Beranda</a></li>
  <li><a href="<?php echo e(route('artikel')); ?>">Tips Kerja</a></li>
  <li><a href="<?php echo e(route('rekomendasi')); ?>">Lowongan</a></li>
  <li><a href="<?php echo e(route('daftar')); ?>">Daftar sebagai Kandidat</a></li>
  <li><a href="<?php echo e(route('login')); ?>" style="background-color: #fe7b54">Log in</a></li>
</ul>

</body>
</html>


<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/navbar/navbar.blade.php ENDPATH**/ ?>