<?php
require "db.php" ;
?> 
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win-1251">
    <title>Cabinet</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Cabinet4.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="Login4.css">
    <script src="wow.min.js"></script>
    <script>
       new WOW().init();
    </script>
    <body>  
 <div class="container">
     <header >  
        
         <div class="heading">
               <a href="Index.php">  <img src="LEVLOGOcolor.svg" height="180" width="290" class="logo"> </a> 
              <nav> 
                 <ul class="menu">
                  <li class="nav-item "> <a class="nav-link" href="AboutClub.html"><span> О Клубе </span> </a> </li>
                  <li class="nav-item"> <a class="nav-link"  href="Index.php"> <span>Концерты</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Rent.html"> <span>Аренда</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Contacts.php"> <span>Контакты</span> </a> </li>
                  <li class="active"> <a class="nav-link" href="Cabinet.php"> <span>Личный кабинет</span> </a> </li>
                </ul>
              </nav>
             </div>  

     </header> 


<?php if( isset($_SESSION['logged_user']) ):?>
        <div class="text2">
        Здравствуйте, <?php echo $_SESSION['logged_user'] ->login; ?>! <br>
        Вы авторизованы на сайте Lion Club. Теперь вы можете быстро совершать покупку билетов на концерты любимых групп! Стоимость билета будет автоматически списана с вашей карты, а билет мы пришлем вам на почту! <br> Увидимся на концертах!  
        </div>
        <div class="logout">
        <a href="logout.php">Выйти</a> 
        </div>

<?php else : ?>

     <a href="login.php" class="button8" >Войти</a><br>
     <a href="signup.php" class="button8">Регистрация</a>


<?php endif; ?>
     </div>
</body>
</html>
    