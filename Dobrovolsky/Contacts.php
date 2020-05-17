<?php
$db_host = 'localhost';
    $db_name = 'lion_club';
    $db_username = 'mysql';
    $db_password = 'mysql';
    $db_table_to_show = 'contacts';
    
 $connect_to_db = mysql_connect($db_host, $db_username, $db_password);
 
 mysql_select_db($db_name, $connect_to_db);
 ?>

 
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win1251">
 <title>Contacts</title>
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
 <link rel="stylesheet" href="Contacts6.css">
 <link rel="stylesheet" href="animate.css"> 
  <script src="wow.min.js"></script>
    <script>
       new WOW().init();
    </script>
  </head>
 <body>
   <header>
      <div class="container">
     <a href="Index.php"> <img src="LEVLOGOcolor.svg" height="180" width="290" class="logo"> </a>
      <nav>
               <ul class="menu">
                  <li class="nav-item "> <a class="nav-link" href="AboutClub.html"><span> О Клубе </span> </a> </li>
                  <li class="nav-item "> <a class="nav-link"  href="Index.php"> <span>Концерты</span> </a> </li>
                  <li class="nav-item "> <a class="nav-link" href="Rent.html"> <span>Аренда</span> </a> </li>
                  <li class="active"> <a class="nav-link" href="Contacts.php"> <span>Контакты</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Cabinet.php"> <span>Личный кабинет</span> </a> </li>
                </ul>
              </nav>
      </header>
   <!--<div class="map">
   <center><img class="map" src="Map.png" width="1300" height="750"></center>
   </div> -->
    <center><div class="map wow fadeInRight">
   <iframe class="map1" src="https://yandex.ru/map-widget/v1/?um=constructor%3A8d23de16a9f5b5d6b5f85ca0cf19139b8c4e00ff5d1cff5f222550f7a6f0b52b&amp;source=constructor" width="800" height="450" frameborder="0"></iframe>
   <div class="text">
   <h3>Адрес клуба</h3>
   <p>Санкт-Петербург,<br> Московский проспект, д.220<br>  Касса клуба<br> (ежедневно с 12:00 до 21:00,<br> перерыв с 15:00 до 16:00) <br> +7(812)923-56-75</p> 
   </div>
   </div></center>
 
   
  <div class="contacts wow fadeInLeft">
  
                <div class="block1">
           <?php mysql_query("SET NAMES 'cp1251';");
            $row = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='1'")); ?>
           <p class="cont"><?php echo $row['dolzhnost']; ?> <br>
           <?php echo $row['FIO']; ?><br>
           <a  href="admin@lion_club.com"><?php echo $row['email']; ?></a><br> </p>
         
           <?php $row2 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='3'")); ?>
               <p class="cont"><?php echo $row2['dolzhnost'] ?><br>
               <?php echo $row2['FIO'] ?><br>
               <a  href="market@lion_club.com"><?php echo $row2['email'] ?></a><br></p>
               
            <?php $row4 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='5'")); ?>   
               <p class="cont"><?php echo $row4['dolzhnost'] ?><br>
                 <?php echo $row4['FIO'] ?><br>
                  <a  href="bilet@lion_club.com"><?php echo $row4['email'] ?></a><br></p>
          
          <?php $row6 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='7'")); ?>
                <p class="cont"><?php echo $row6['dolzhnost'] ?><br> 
                 <?php echo $row6['FIO'] ?><br>
                <a  href="pr@lion_club.com"><?php echo $row6['email'] ?></a><br></p>
                
           <?php $row8 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='9'")); ?>
               <p class="cont"><?php echo $row8['dolzhnost'] ?><br>
                  <?php echo $row8['FIO'] ?> <br>
                  <a  href="book@lion_club.com"><?php echo $row8['email'] ?></a> <br></p>
                  
                  </div>
                  
                  <div class="block2">
                <?php $row1 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='2'")); ?>
               <p class="cont1"><?php echo $row1['dolzhnost'] ?> <br>
                  <?php echo $row1['FIO'] ?> <br>
                  <a  href="design@lion_club.com"><?php echo $row1['email'] ?> </a><br></p>
                  
                  
               <?php $row3 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='4'")); ?>
               <p class="cont1"><?php echo $row3['dolzhnost'] ?> <br>
                <?php echo $row3['FIO'] ?> <br>
                <a  href="tm@lion_club.com"><?php echo $row3['email'] ?> </a> <br></p>
          
               <?php $row5 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='6'")); ?>
               <p class="cont1"><?php echo $row5['dolzhnost'] ?><br> 
                  <?php echo $row5['FIO'] ?><br>
                  <a  href="production@lion_club.com"><?php echo $row5['email'] ?></a> <br></p>
                  
              <?php $row7 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='8'")); ?>
               <p class="cont1"><?php echo $row7['dolzhnost'] ?><br>
                  <?php echo $row7['FIO'] ?> <br>
                  <a  href="bar@lion_club.com"><?php echo $row7['email'] ?></a><br></p>
  
              <?php $row9 = mysql_fetch_array(mysql_query("SELECT * FROM `contacts` WHERE id='10'")); ?>
               <p class="cont1"><?php echo $row9['dolzhnost'] ?><br>
                  <?php echo $row9['FIO'] ?><br>
                  <a  href="content@lion_club.su"><?php echo $row9['email'] ?></a><br></p>
                  
                            </div>
               
               </div>
          
         
          
          
     </div>
   