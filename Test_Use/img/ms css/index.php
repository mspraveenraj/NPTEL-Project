<html>
<head>
<link rel="icon" href="images/favicon.png" type="image/png"/>
<link rel="shortcut icon" href="images/favicon.png" type="image/png"/>
<title>CsePro</title>
<style>


@import url(css/bootstrap.min.css);
@import url(css/font-awesome.min.css);

$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;

* {
  margin: 0;
  padding: 0;
}

html { 
  background:  no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
  background: transparent;
}

body, input, button {
  font-family: 'Rockwell', sans-serif;
}

@mixin normalize-input {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;

  .heading {
    text-align: center;
    margin-top: 1%;

    h2 {
      font-size: 3em;
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7);
      display: inline-block;
      padding-bottom: 5px;
      text-shadow: 1px 1px 3px $shadow-color;
    }
  }

  form {
    .input-group {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      border-top: 1px solid rgba(255, 255, 255, 0.1);

      &:last-of-type {
        border-top: none;
      }

      span {
        background: transparent;

        min-width: 53px;
        border: none;


        i {
          font-size: 1.5em;
          color: rgba(255, 255, 255, 0.2);
        }
      }
    }

    input.form-control {
      @include normalize-input;

      padding: 10px;
      font-size: 1.6em;
      width: 100%;
      background: transparent;
      color: $input-color;

      &:focus {
        border: none;
      }
    }

    button {
      margin-top: 20px;
      background: $button-background-color;
      border: none;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 100%;

      border-radius: 3px;
      color: lighten($button-background-color, 40%);
      border-bottom: 4px solid darken($button-background-color, 10%);

      &:hover {
        background: tint($button-background-color, 4%);
        -webkit-animation: hop 1s;
        animation: hop 1s;
      }
    }
  }
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

.float:hover, .float:focus, .float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}

/* Large Devices, Wide Screens */

@media only screen and (max-width : 1500px) {
}

@media only screen and (max-width : 1200px) {
  .login {
    width: 600px;
    font-size: 2em;
  }
}

@media only screen and (max-width : 1100px) {
  .login {
    margin-top: 2%;

    width: 600px;
    font-size: 1.7em;
  }
}

/* Medium Devices, Desktops */
@media only screen and (max-width : 992px) {
  .login {
    margin-top: 1%;

    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}

/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {
  .login {

    h2 {
      margin-top: 0;
    }

    margin-top: 0;

    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}






body  {
    background-image: url("images/pp.jpg");

    background-position:50% 10%;
background-size:100% 100%;
background-repeat:no-repeat;
//margin-left:100px;


//background-color:#fffff0;
}



b{
font-size:250%;
color:#000000;
}
div{
color:#000000;
text-shadow:1px 1px 5px;
}



</style>
</head>
<body>
<br>
<div align="center" style="position:static; height: 0%; width: 100%; top:0;left 0;">
<img src="images/ic2.png" style="width: 70%">
</div>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>



<form  name="form1" method="post" action="check_login.php">
<center>
<div class="login">
  <div class="heading">
    
    <form action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div><br>

        <button type="submit" class="float" style="background-color: #D6A51E; /* Green */border: none;color: white;padding: 15px 32px;text-align: center;text-ecoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;">LOGIN</button>
       </form>
 		</div>
 </div>
</center>
</form>
</body>
