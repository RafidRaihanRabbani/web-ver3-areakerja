<html>
<body>
    <div class="vercontainer">
        <div class="inputfield">
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
            <input type="number" maxlength="1" class="input" active />
        </div>
    
        <button class="hide" id="submit" onclick="validateOTP()">Submit</button>
    
    </div>
</body>
<style>
.vercontainer {
  width: 28em;
  background-color: #ffffff;
  padding: 4em 2em;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 0.8em;
  box-shadow: 0 45px 60px rgba(30, 22, 1, 0.3);
}

.inputfield {
  width: 100%;
  display: flex;
  justify-content: space-around;
}
.input {
  height: 3em;
  width: 3em;
  border: 2px solid #dad9df;
  outline: none;
  text-align: center;
  font-size: 1.5em;
  border-radius: 0.3em;
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

#submit {
    background-color: #044ecf;
    border: none;
    outline: none;
    font-size: 1.2em;
    padding: 0.8em 2em;
    color: #ffffff;
    border-radius: 0.1em;
    margin: 1em auto 0 auto;
    cursor: pointer;
}
</style>
</html>
<?php /**PATH D:\XAMPP\htdocs\web-ver2 areakerja\resources\views/draft/ver.blade.php ENDPATH**/ ?>