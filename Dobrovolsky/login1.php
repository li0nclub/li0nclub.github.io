 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win-1251">
    <title> LION Club</title>
    <link rel="stylesheet" href="Cabinet1.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="Login3.css">
    <script src="wow.min.js"></script>
    <script>
       new WOW().init();
    </script>
    <body>  
 <div class="container">
     <header >  
        
         <div class="heading">
                 <img src="leo.svg" height="100" width="80" class="logo">  
              <nav> 
                 <ul class="menu">
                  <li class="nav-item "> <a class="nav-link" href="AboutClub.html"><span> � ����� </span> </a> </li>
                  <li class="nav-item"> <a class="nav-link"  href="Index.php"> <span>��������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Rent.html"> <span>������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Contacts.html"> <span>��������</span> </a> </li>
                  <li class="active"> <a class="nav-link" href="Cabinet.html"> <span>������ �������</span> </a> </li>
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