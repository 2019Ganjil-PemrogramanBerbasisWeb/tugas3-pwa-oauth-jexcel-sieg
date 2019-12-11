<?php
require_once "config.php";
$loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .social-btns .btn,
.social-btns .btn:before,
.social-btns .btn .fa {
  transition: all 0.35s;
  transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
}
.social-btns .btn:before {
  top: 90%;
  left: -110%;
}
.social-btns .btn .fa {
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
}
.social-btns .btn.google:before {
  background-color: #dc4a38;
}
.social-btns .btn.google .fa {
  color: #dc4a38;
}
.social-btns .btn.pinterest .fa {
  color: #cc0000;
}
.social-btns .btn:focus:before,
.social-btns .btn:hover:before {
  top: -10%;
  left: -10%;
}
.social-btns .btn:focus .fa,
.social-btns .btn:hover .fa {
  color: #fff;
  -webkit-transform: scale(1);
  transform: scale(1);
}
.social-btns {
  height: 90px;
  margin: auto;
  font-size: 0;
  text-align: center;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.social-btns .btn {
  display: inline-block;
  background-color: #c6f1d6;
  width: 90px;
  height: 90px;
  line-height: 90px;
  margin: 0 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 28%;
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.1);
  opacity: 0.99;
}
.social-btns .btn:before {
  content: "";
  width: 120%;
  height: 120%;
  position: absolute;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.social-btns .btn .fa {
  font-size: 38px;
  vertical-align: middle;
}
    </style>
</head>
<body>
  <div class="text-center">
  <?php if(isset($_SESSION['gambar'])){
  echo $_SESSION['nama'] . "<br>" . "<img src='" . $_SESSION['gambar'] . "' alt='' srcset='' class='img-fluid' style='max-width:100px'><br>" . $_SESSION['email'];?>
  <?php }?>
  </div>
<div class="social-btns">
    <a class="btn google" onclick="window.location ='<?php echo $loginURL ?>'"><img src="google.svg" alt="" class="mx-auto my-auto img-fluid"></a>
</div>
</body>
</html>