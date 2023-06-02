<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kode Verifikasi</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/img-01(2).png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="description" content="masuk dan nikmati fitur-fitur areakerja.com">
  <meta name="keywords" content="halaman masuk">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo e(url()->current()); ?>">
  <meta property="og:title" content="Login - Area Kerja">
  <meta property="og:description" content="Masuk dan daftarkan diri anda atau perusahaan anda di Platform lowongan kerja no. 1 di jogja. nikmati firut fitur menarik yang kami berikan">
  <meta property="og:image" content="<?php echo e(asset('img/img-01(2).png')); ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet">
  <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/animate/animate.css')); ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/util2.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main2.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <!--===============================================================================================-->
</head>

<body>
  <div class="limiter">
    <div class="container-login100" style= "background:#000000">
      <div class= "col-lg-8" style= "background:#F26419; padding: 50px; padding-above: 178px; padding-bottom: 178px">
        <?php if(session()->has('message')): ?>
        <p class="alert alert-info">
          <?php echo e(session()->get('message')); ?>

        </p>
        <?php endif; ?>
        <div class="login100-pic js-tilt">
          <a href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(asset('img/AREAKERJA1.png')); ?>" alt="IMG" style= "width: 120px; margin-bottom: 49px;">
          </a>
        </div>
        <div class="col-lg-8" style= "color:#ffffff">
          <h1 style= "font-size: 55px; padding-bottom: 5px"><strong>Tempatnya</strong></h1>
          <h1 style= "font-size: 55px"><strong>cari kerja</strong></h1>
        </div>
        <div class="col-lg-8" style= "color:#ffffff; margin: 10px; padding: 5px;">
          <h1 style= "font-size: 19px" >Temukan loker <strong>se-Indonesia</strong> terbaru</h1>
          <h1 style= "font-size: 19px">dengan mudah!</h1>
        </div>

      </div>

      <div class="col-lg-4" style= "background:#ffffff; padding: 50px; padding-above: 180px; padding-bottom: 181px;">
        <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo e(csrf_field()); ?>

          <span class="login100-form-title">
            Lupa Kata Sandi
          </span>

          <div class="text-right p-t-12">
            <a class="txt1" style= "color: rgb(0, 0, 0)">
              Masukan 4 digit kode yang dikirimkan ke
            </a>
          </div>

          <div class="text-center p-t-12" style= "margin-left: 15px; padding-bottom: 25px;" >
            <a class="txt2" style= "color: rgb(0, 0, 0)">
              <strong>emailpengguna@gmail.com</strong>
            </a>
          </div>

          <div class="lock">
            <img src="<?php echo e(asset('img/Lock.png')); ?>" alt="IMG" style= "width: 70px; margin-left: 120px; padding-bottom: 30px"> </a>
          </div>

          <div class="inputfield">
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Kirim
            </button>
          </div>
         
        </form>
      </div>
    </div>
  </div>

<style>
.inputfield {
  width: 100%;
  display: flex;
  justify-content: space-around;
}

.input {
  height: 2em;
  width: 2em;
  border: 1px solid #dad9df;
  outline: none;
  text-align: center;
  font-size: 1.5em;
  border-radius: 0.25em;
  background-color: #ffffff;
  outline: none;
  /*Hide number field arrows*/
  -moz-appearance: textfield;
}
        
.input:disabled {
  color: #89888b;
}

.input:focus {
  border: 3px solid #ffb800;
}
        
</style>

<script>
  //Initial references
const input = document.querySelectorAll(".input");
const inputField = document.querySelector(".inputfield");
const submitButton = document.getElementById("submit");
let inputCount = 0,
  finalInput = "";

//Update input
const updateInputConfig = (element, disabledStatus) => {
  element.disabled = disabledStatus;
  if (!disabledStatus) {
    element.focus();
  } else {
    element.blur();
  }
};

input.forEach((element) => {
  element.addEventListener("keyup", (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, "");
    let { value } = e.target;

    if (value.length == 1) {
      updateInputConfig(e.target, true);
      if (inputCount <= 3 && e.key != "Backspace") {
        finalInput += value;
        if (inputCount < 3) {
          updateInputConfig(e.target.nextElementSibling, false);
        }
      }
      inputCount += 1;
    } else if (value.length == 0 && e.key == "Backspace") {
      finalInput = finalInput.substring(0, finalInput.length - 1);
      if (inputCount == 0) {
        updateInputConfig(e.target, false);
        return false;
      }
      updateInputConfig(e.target, true);
      e.target.previousElementSibling.value = "";
      updateInputConfig(e.target.previousElementSibling, false);
      inputCount -= 1;
    } else if (value.length > 1) {
      e.target.value = value.split("")[0];
    }
    submitButton.classList.add("hide");
  });
});

window.addEventListener("keyup", (e) => {
  if (inputCount > 3) {
    submitButton.classList.remove("hide");
    submitButton.classList.add("show");
    if (e.key == "Backspace") {
      finalInput = finalInput.substring(0, finalInput.length - 1);
      updateInputConfig(inputField.lastElementChild, false);
      inputField.lastElementChild.value = "";
      inputCount -= 1;
      submitButton.classList.add("hide");
    }
  }
});

const validateOTP = () => {
  alert("Success");
};

//Start
const startInput = () => {
  inputCount = 0;
  finalInput = "";
  input.forEach((element) => {
    element.value = "";
  });
  updateInputConfig(inputField.firstElementChild, false);
};

window.onload = startInput();

</script>
</body>
</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver3 areakerja\resources\views/auth/verifikasi.blade.php ENDPATH**/ ?>