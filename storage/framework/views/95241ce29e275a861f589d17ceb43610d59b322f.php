<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #2A3042;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #838CA9;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  color: white;
}

li a:hover:not(.active) {
  color: white;
}
</style>
</head>
<body>

<ul>
  <li><a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/img-01(2).png')); ?>" alt="IMG" width="120px" style= "margin-left: 60px" /></li>
  <li><a href="#home"><i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard</a></li>
  <li><a href="#news"><i class="fa fa-database" aria-hidden="true"></i>  Data Pelamar</a></li>
  <li><a href="#news"><i class="fa fa-building" aria-hidden="true"></i>  Data Perusahaan</a></li>
  <li><a href="#contact"><i class="fa fa-eur" aria-hidden="true"></i>  Finance</a></li>
  <li><a href="#contact"><i class="fa fa-cog" aria-hidden="true"></i>  Pengaturan</a></li>
  <li><a href="#about"><i class="fa fa-user-o" aria-hidden="true"> </i> User</a></li>
</ul>

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


<?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/navbar/navbarver2.blade.php ENDPATH**/ ?>