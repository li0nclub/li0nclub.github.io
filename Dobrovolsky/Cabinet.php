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
                  <li class="nav-item "> <a class="nav-link" href="AboutClub.html"><span> � ����� </span> </a> </li>
                  <li class="nav-item"> <a class="nav-link"  href="Index.php"> <span>��������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Rent.html"> <span>������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Contacts.php"> <span>��������</span> </a> </li>
                  <li class="active"> <a class="nav-link" href="Cabinet.php"> <span>������ �������</span> </a> </li>
                </ul>
              </nav>
             </div>  

     </header> 


<?php if( isset($_SESSION['logged_user']) ):?>
        <div class="text2">
        ������������, <?php echo $_SESSION['logged_user'] ->login; ?>! <br>
        �� ������������ �� ����� Lion Club. ������ �� ������ ������ ��������� ������� ������� �� �������� ������� �����! ��������� ������ ����� ������������� ������� � ����� �����, � ����� �� ������� ��� �� �����! <br> �������� �� ���������!  
        </div>
        <div class="logout">
        <a href="logout.php">�����</a> 
        </div>

<?php else : ?>

     <a href="login.php" class="button8" >�����</a><br>
     <a href="signup.php" class="button8">�����������</a>


<?php endif; ?>
     </div>
</body>
</html>
    