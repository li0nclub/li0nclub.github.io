<?php
require "db.php" ;?>

 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win-1251">
    <title>Sign Up</title>
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
              <a href="Index.php">  <img src="LEVLOGOcolor.svg" height="180" width="290" class="logo">  </a>
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
<?php endif; ?>
     
    
<div class="forma2 wow fadeInRight">
<?php $data = $_POST;
 if( isset($data['do_signup']) )
 {
  $errors= array();
  if ( trim($data['login']) == '') 
  { $errors[] = '������� �����!';} 
  
  if ( trim($data['email']) == '') 
  { $errors[] = '������� Email!';}
    
    
   if ($data['password'] == '') 
  { $errors[] = '������� ������!';} 
    
    
  if ( $data['password2'] != $data['password']) 
  { $errors[] = '��������� ������ ������ �������!';}
  
  if ( R::count('users',"login= ?", array($data['login']))>0 ) 
  { $errors[] = '������������ � ����� ������� ��� ����������';}
  
  if ( R::count('users',"email = ?",
  array($data['email']))>0 ) 
  { $errors[] = '������������ � ����� email ��� ����������';}
  
  if (empty($errors) )
  { 
  //������ ���, �������������� �����������
   $user = R::dispense ('users');
   $user ->login = $data['login'];
   $user ->email = $data['email'];
   $user ->password = password_hash($data['password'],PASSWORD_DEFAULT);//���������� ������
   R::store($user);
   echo '<div style ="color:green;">�� ������� ����������������!<br>������ ��������� �� ��������<a href="Cabinet.php"> ������ ������� </a></div><hr>'; 
  } else
  {
   echo '<div style ="color:red;">'.array_shift($errors).'</div><hr>';
  }
    
 }
?>
<form action="signup.php" method="POST">

     <p> 
      <p><strong> ��� ����� </strong>: </p>
      <input type="text" name="login" value="<?php echo @$data['login']; ?>">
      </p>
      
      <p><strong> ��� Email </strong>: </p>
      <input type="email" name="email"  value="<?php echo @$data['email']; ?>">
      </p> 
      
      <p><strong> ��� ������ </strong>: </p>
      <input type="password" name="password"  value="<?php echo @$data['password']; ?>">
      </p>
      
      <p><strong>������� ��� ������ ��� ��� </strong>: </p>
      <input type="password" name="password2"  value="<?php echo @$data['password2']; ?>">
      </p>
      
      
      
      <p>
      <button class="button2" style="vertical-align:middle" type="submit" name="do_signup"><span> ������������������ </span> </button>
      </p>
   
      
             </form>
          </div>
</div>

</body>
</html>