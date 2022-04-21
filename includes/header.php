<?php
  include_once "./helper/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./img/favicon.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="style.css">
  <title>Tours in Georgia</title>
</head>

<body>
  
<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#gomi">
            <h1><span>T</span>ours in <br><span>G</span>eorgia</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="./index.php" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="project">tours</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            
            <li onclick="<?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){?>setActive()<?php }?>" >
              <a href="<?php echo isset($_SESSION["name"])?"#":"register.php"?>" data-after="login-form">
                <?php
                echo isset($_SESSION["name"])?$_SESSION["name"]:"login/register";
                echo (isset($_SESSION["admin"]) && $_SESSION["admin"]==1)?"<sup style='font-size: 9px  !important;'><code style='text-decoration:underline #ed143d;'>admin</code></sup>":"";
                ?>
              </a> 
            </li>
            <?php
              if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){
            ?>
            <li class="menu">
              <a href="./services.php" data-after="Contact">
                Add Service
              </a>
            </li>
            <?php
              }
            ?>
            <?php
              if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){
            ?>
            <li class="menu">
              <a href="./cities.php" data-after="Contact">
                Add City
              </a>
            </li>
            <?php
              }
              if(isset($_SESSION['admin'])){
            ?>
            <li id="logout">
              <form action="./helper/logout.php" method="POST">
                <button style="background:none;border:none;">
                  <a data-after="Contact">
                    logout
                  </a>
                </button>
              </form>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <script>
    let is_active = false
    let menu = document.getElementsByClassName('menu')
    if(menu){
      for(let i = 0;i<menu.length;i++){
        menu[i].style.display = 'none'
      }
      function setActive(){
        is_active = !is_active
        for(let i = 0;i < menu.length;i++){
          menu[i].style.display = is_active?'':"none"
        }
      }
    }
  </script>