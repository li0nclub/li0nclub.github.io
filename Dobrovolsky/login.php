<?php
require "db.php" ; ?>
  
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win-1251">
    <title>Login</title>
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
                <a href="Index.php"> <img src="LEVLOGOcolor.svg" height="180" width="290" class="logo">  </a>
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
     
      <div class="forma wow fadeInRight">
      <?php $data = $_POST;
 if( isset($data['do_login']) )
  {
    $errors  = array();
    $user = R::findOne('users','login = ?',array($data['login']));
    
    if($user)
    {
       // ����� ����������
    if( password_verify($data['password'],$user->password) )
     { //��� ������, ������� ������������
     $_SESSION['logged_user']= $user;
     echo '<div style ="color:green;">�� ������������!<br>������ ������� � <a href="Cabinet.php"> ������ �������</a></div><hr>';
     } else 
     {  
       $errors[]='������� ������ ������!';
     }
  } else
  {
     $errors[] = '������������ � ����� ������� �� ������!';
  }
     if (! empty($errors) )
  {
   echo '<div style ="color:red;">'.array_shift($errors).'</div><hr>';
  } }  ?>
 
 <form  action ="login.php" method="POST">
 
 <p> 
      <p><strong>����� </strong>: </p>
      <input type="text" name="login" value="<?php echo @$data['login']; ?>">
      </p>
      
      <p><strong>������ </strong>: </p>
      <input type="password" name="password"  value="<?php echo @$data['password']; ?>">
      </p>
      
      <p>
      <button class="button" style="vertical-align:middle" href="login1.php" type="submit" name="do_login"><span>�����</span></button>
      </p>
      
      </form>
 </div>
      
      </body>
</html>