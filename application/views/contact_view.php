<!DOCTYPE html>
<html>
<head>
	<title>EDUCATION</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style type="text/css">
  	body {
  font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
  color: #404040;
  background: #e4ecef;
}

.contact {
  position: relative;
  margin: 50px auto;
  padding: 5px;
  width: 320px;
  background: #eef5f7;
  border: 1px solid #cfd5da;
  border-bottom-color: #ccd1d6;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

.contact-inner {
  padding: 25px;
  background: white;
  border-radius: 2px;
}

.contact:before, .contact:after, .contact-inner:before, .contact-inner:after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -6px;
  width: 1px;
  height: 1px;
  border: outset transparent;
  border-width: 12px 14px 0;
  border-top-style: solid;
  -webkit-transform: rotate(360deg);
}

.contact:before {
  margin-top: 1px;
  border-top-color: #d8e1e6;
}

.contact-inner:before {
  border-top-color: #ccd1d6;
}

.contact-inner:after {
  margin-top: -1px;
  border-top-color: #eef5f7;
}

.contact:after {
  margin-top: -8px;
  border-top-color: white;
}

.contact-input {
  overflow: hidden;
  margin-bottom: 20px;
  padding: 5px;
  background: #eef7f9;
  border-radius: 2px;
}
.contact-input > input, .contact-input > textarea {
  display: block;
  width: 100%;
  height: 29px;
  padding: 0 9px;
  color: #4d5a5e;
  background: white;
  border: 1px solid #cfdfe3;
  border-bottom-color: #d2e2e7;
  border-radius: 2px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05), 0 1px rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05), 0 1px rgba(255, 255, 255, 0.2);
}
.contact-input > input:focus, .contact-input > textarea:focus {
  border-color: #93c2ec;
  outline: 0;
  -webkit-box-shadow: 0 0 0 8px #e1ecf5;
  box-shadow: 0 0 0 8px #e1ecf5;
}
.lt-ie9 .contact-input > input, .lt-ie9 .contact-input > textarea {
  line-height: 27px;
}
.contact-input > textarea {
  padding: 4px 8px;
  height: 90px;
  line-height: 20px;
  resize: none;
}

.select {
  display: block;
  position: relative;
  overflow: hidden;
  background: white;
  border: 1px solid #d2e2e7;
  border-bottom-color: #c5d4d9;
  border-radius: 2px;
  background-image: -webkit-linear-gradient(top, #fcfdff, #f2f7f7);
  background-image: -moz-linear-gradient(top, #fcfdff, #f2f7f7);
  background-image: -o-linear-gradient(top, #fcfdff, #f2f7f7);
  background-image: linear-gradient(to bottom, #fcfdff, #f2f7f7);
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.06);
}
.select:before, .select:after {
  content: '';
  position: absolute;
  right: 11px;
  width: 0;
  height: 0;
  border-left: 3px outset transparent;
  border-right: 3px outset transparent;
}
.select:before {
  top: 10px;
  border-bottom: 3px solid #7f9298;
}
.select:after {
  top: 16px;
  border-top: 3px solid #7f9298;
}
.select > select {
  position: relative;
  z-index: 2;
  width: 112%;
  height: 29px;
  line-height: 17px;
  padding: 5px 9px;
  padding-right: 0;
  color: #80989f;
  background: transparent;
  background: rgba(0, 0, 0, 0);
  border: 0;
  -webkit-appearance: none;
}
.select > select:focus {
  color: #4d5a5e;
  outline: 0;
}

.contact-submit {
  text-align: right;
}
.contact-submit > input {
  display: inline-block;
  vertical-align: top;
  padding: 0 14px;
  height: 29px;
  font-weight: bold;
  color: #729fb2;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: #deeef4;
  border: 1px solid #bed6e3;
  border-bottom-color: #accbd9;
  border-radius: 15px;
  cursor: pointer;
  background-image: -webkit-linear-gradient(top, #e6f2f7, #d0e6ee);
  background-image: -moz-linear-gradient(top, #e6f2f7, #d0e6ee);
  background-image: -o-linear-gradient(top, #e6f2f7, #d0e6ee);
  background-image: linear-gradient(to bottom, #e6f2f7, #d0e6ee);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 1px rgba(0, 0, 0, 0.06), 0 0 0 4px #eef7f9;
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 1px rgba(0, 0, 0, 0.06), 0 0 0 4px #eef7f9;
}
.contact-submit > input:active {
  color: #6a95a9;
  text-shadow: 0 1px rgba(255, 255, 255, 0.3);
  background: #c9dfe9;
  border-color: #a3bed0 #b5ccda #b5ccda;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.2), 0 0 0 4px #eef7f9;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.2), 0 0 0 4px #eef7f9;
}




  </style>

</head>
<body>
<form action="" class="contact">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Your Name…" autofocus>
      </p>

      <p class="contact-input">
        <label for="select" class="select">
          <select name="select" id="select">
            <option value="" selected>Choose Subject…</option>
            <option value="1">I have a suggestion</option>
            <option value="2">I found a bug</option>
            <option value="3">Other</option>
          </select>
        </label>
      </p>

      <p class="contact-input">
        <textarea name="message" placeholder="Your Message…"></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Send Message">
      </p>

      <?php
                                  if(isset($_POST['select'])){
                                  $_SESSION['select'] = $_POST['select'];
                                  $var = $_SESSION['select'];
                                  
                                  echo $_SESSION['select'];
                                }
                                  ?>
    </fieldset>
  </form>
</body>
</html>