<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="icon" type="image/png" href="images/qa1.jpg" >
	<meta  name="theme-color" content="#0b7199"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=0">
</head>
<body>
  <div class="col-2 side-bar xs-10 xs-closed md-8 md-closed" id="side-bar">
      <div class="side-bar-top">
          <div class="container">
              <div class="profile-img-container">
                  <img src="images/qa2.jpg" alt="">
              </div>
              <span class="white fl-right">Q-agent Admin</span>
          </div>
      </div>
      <div class="container down-20 xs-down-5 md-down-10 bottom-50 ">
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-user"></i>
                  <span>My Profile</span>
              </div>
          </a>
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-user"></i>
                  <span>My Profile</span>
              </div>
          </a>
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-user"></i>
                  <span>My Profile</span>
              </div>
          </a>
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-user"></i>
                  <span>My Profile</span>
              </div>
          </a>
          <a href="">
              <div class="side-bar-item">
                  <i class="fa fa-user"></i>
                  <span>My Profile</span>
              </div>
          </a>
      </div>
  </div>
  <div class="hidden-ls">
  	<div class="tap-to-close fade-in" id="tap" onclick="sideMenuController()"></div>
  </div>
  <div class="col-10 off-2 xs-12 md-12" id="main-window">
      <div class="top-bar">
          <a href="javascript:void(0)" onclick="sideMenuController()" class="color-code-1 px20 fl-left"><i class="fa fa-bars"></i></a>
      </div>
  </div>
  <div class="profile-footer hidden" id="footer">
      <div class="col-11 md-11 xs-11 right">
          <div>
              <span>Qagent 2021</span>
          </div>
      </div>
  </div>
</body>
</html>
<script type="text/javascript">
    function sideMenuController() {
        var x = document.getElementById('side-bar');
        var y = document.getElementById('main-window');
        var z = document.getElementById('main-window-2');
        if (x.className == 'col-2 side-bar xs-10 xs-closed md-8 md-closed') {
           document.getElementById('tap').style.display = 'block';
           x.className += ' slide-out-lg xs-opened md-opened';
           y.className = 'col-12 xs-12 md-12';
           z.className = 'col-12 xs-12 md-12 down-5 xs-down-15 md-down-10';
        }
        else {
        	document.getElementById('tap').style.display = 'none';
        	x.className = 'col-2 side-bar xs-10 xs-closed md-8 md-closed';
        	y.className = 'col-10 off-2 xs-12 md-12';
        	z.className = 'col-10 off-2 xs-12 md-12 down-5 xs-down-15 md-down-10';
        }
    }
</script>
