<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #ff9837;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
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
  <li><a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('img/Mask group.png')); ?>"/></li>
  <li><a href="#home">DASHBOARD</a></li>
  <li><a href="#news">PROFILE</a></li>
  <li><a href="#contact">PELAMAR</a></li>
  <li><a href="#about">PERUSAHAAN</a></li>
  <li><a href="#contact">FINANCE</a></li>
  <li><a href="#about">PENGATURAN</a></li>   
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


<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/navbar/navbarver.blade.php ENDPATH**/ ?>