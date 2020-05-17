<?php
require_once 'config.php';
require_once 'functions.php';
$concerts= get_concerts();
$concerts = get_json($concerts);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="win-1251">
    <title> LION Club</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="eventCalendar.css">
    <link rel="stylesheet" href="eventCalendar_theme_responsive1.css">
    <link rel="stylesheet" href="main9.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="footer.css">
 <script src="wow.min.js"></script>
 <script>
       new WOW().init();
 </script>
 
  </head>
 <body>
 <script src="http://code.jquery.com/jquery.min.js"></script>
  <script src="moment.js"></script>
  <script src="jquery.eventCalendar.js"></script>
  <script>
  $(function(){
  var data =<?php echo $concerts ?>;
    /*var data = [
     { "date": "2019-04-25 20:00:","title": "������� 1", "description": "The Killers", "url": "http://www.event3.com/"},
     { "date": "2019-05-06 20:00:","title": "������� 1", "description": "Metallica", "url": "http://www.event3.com/"},
     { "date": "2019-05-01 20:00:","title": "������� 1", "description": "Radiohead", "url": "http://www.event3.com/"},
     { "date": "2019-04-23 20:00:","title": "������� 1", "description": "Tame Impala", "url": "http://www.event3.com/"},
    
    
    ];*/
     $('#eventCalendar').eventCalendar({
          //eventsjson:'data.json',
          jsonData: data,
          jsonDateFormat: 'human',
          openEventInNewWindow:true,
          locales: {
    locale: "ru",
	txt_noEvents: "��� ��������������� ���������",
	txt_SpecificEvents_prev: "",
	txt_SpecificEvents_after: "��������:",
	txt_NextEvents: "��������� ��������:",
	txt_GoToEventUrl: "��������",
	moment: {
        "months" : [ "������", "�������", "����", "������", "���", "����",
                "����", "������", "��������", "�������", "������", "�������" ],
        "monthsShort" : [ "���", "���", "���", "���", "���", "���",
                "���", "���", "���", "���", "���", "���" ],
        "weekdays" : [ "�����������","�����������","�������","�����",
                "�������","�������","�������" ],
        "weekdaysShort" : [ "��","��","��","��",
                "��","��","��" ],
        "weekdaysMin" : [ "��","��","��","��",
                "��","��","��" ],
        
          }
        }
     
     });
  
  });
  </script>  
  
  <script type="text/javascript">
         var lastResFind=""; 
         var copy_page=""; 
         function TrimStr(s) {
         s = s.replace( /^\s+/g, '');
         return s.replace( /\s+$/g, '');
         }
         function FindOnPage(inputId) {
         var obj = window.document.getElementById(inputId);
         var textToFind;

         if (obj) {
         textToFind = TrimStr(obj.value);
} else {
alert("��������� ����� �� �������");
return;
}
if (textToFind == "") {
alert("�� ������ �� �����");
return;
}

if(document.body.innerHTML.indexOf(textToFind)=="-1")
alert("������ �� �������, ��������� ������������ �����!");

if(copy_page.length>0)
document.body.innerHTML=copy_page;
else copy_page=document.body.innerHTML;


document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");
document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:red'>"+textToFind+"</a>");
lastResFind=textToFind; 
window.location = '#'+textToFind;
} 
</script>
         
 <div class="container">
     <header >  
        
         <div class="heading">
                <a href="Index.php" > <img src="LEVLOGOcolor.svg" height="180" width="290" class="logo"> </a> 
              <nav> 
                 <ul class="menu">
                  <li class="nav-item "> <a class="nav-link" href="AboutClub.html"><span> � ����� </span> </a> </li>
                  <li class="active"> <a class="nav-link"  href="Index.php"> <span>��������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Rent.html"> <span>������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Contacts.php"> <span>��������</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="Cabinet.php"> <span>������ �������</span> </a> </li>
                </ul>
              </nav>
             </div>  

     </header> 
    <div> 
     <div class="container1">
             <div id="eventCalendar" class="supereventcalendar wow fadeInLeft"></div>
             <a href="Splin.html"> <div class="Advert wow fadeInLeft">
           <h3> ����� ������� �� ���������� �����ӻ</h3>
           <p>5 ��� 2019 ������ ����� ������� �� ����� "Lion Club" ������� ���, ����������� ������ ���������� ���������� ������� ���������� ������.
            �������� ���� ����� ���������� ����������� ������, ����� ������������ ���� � ��������� �������� ���.
            ����� ���������� ������� ��������� 25 ��� 2018 ����. ��� 15-� �������� ��������� �������, ��������� � ������� ��� ��� ��� ������������ ����� ���������������� �����������.
             ������ ��������� � 2017 � 2018 ��. �� ������ ���������. ����� ���������� ������, � ��� ������� ������� ������������ ����������� - �������� �������, ������� ������ � ��������������. ������ ������� ����, ������� ���������� ����� ���������� ��������� �������� �������� ����������� ����������� �������, ����� ������ �������, �������������� ������� 15 ������� 2017. ������ � ������������� ����� - ������� �������� ����������� 1 ������ 2018 � ������� ������������� �����.</p>
              </div> </a>
     </div>
       
     <form class = "searchform wow rotateInDownRight">
        <input id="text-to-find" type="text" placeholder="������� ��� �����������" required>
        <button type="submit" onClick="javascript: FindOnPage('text-to-find') ; return false;">������</button>
     </form>
            
      <!--<div class="concerts">
         <ul >
              <li><img class="The_Killers" src="The_Killers.jpg" width="600px" height="400px" align="left" > <div class="c"> The Killers � ������������ �������������� ���-������, 
              ������������ � 2002 ���� ��������� ��������� � ������ ��������. �������� ���� ����� �� ���������� New Order �Crystal� (2001), 
              ��� ��� ����� ������ ��������� ��������� ������. � ������ The Killers �������� ����� �������������� ������� ������ New Order <p>
              </li>
              
              <li><img class="Metallica" src="Metallica.jpg" width="600px" height="400px" align="left" > Metallica - ������������ �����-������, ������������ � 1981 ����.
              Metallica ������� ������� ������� �� �������� ������ � ������ (������ � ������ �������� ��� Slayer, Megadeth � Anthrax) � �������� ������� ����-������[2]. 
              ������� Metallica ���� ���������� � ���������� �����, ��� 110 ��������� ���������. </li>
               
              <li><img class= "Radiohead" src="Radiohead.jpg" width="600px" height="400px" align="left">Radiohead � ���������� ���-������ �� �����������. 
              ������ ���� �������� � 1985 ����, � � ������ � ���� ������� �� �������. ����� Radiohead ����������� ���������� ��� �������������� ���, 
              ���� �� ������ ������ �������� ������������� �� ����-���� �� ���-���� � ����������� ������. </li>
           </ul>
       </div>  -->
      
      <div class="The_Killers wow fadeInRight" data-wow-offset="90" >
      <a class="NameOfBand"  href="The_Killers.html">  <p>30 �����. The Killers  � ������������ �������������� ���-������, 
              ������������ � 2002 ���� ��������� ��������� � ������ ��������. �������� ���� ����� �� ���������� New Order �Crystal� (2001), 
              ��� ��� ����� ������ ��������� ��������� ������. � ������ The Killers �������� ����� �������������� ������� ������ New Order.</p> </a>
              
      </div>
      <div class = "Metallica wow fadeInRight" data-wow-offset="90" >
          <a class="NameOfBand"  href="Metallica.html"> <p>14 ������.Metallica - ������������ �����-������, ������������ � 1981 ����.
              Metallica ������� ������� ������� �� �������� ������ � ������ (������ � ������ �������� ��� Slayer, Megadeth � Anthrax) � �������� ������� ����-������[2]. 
              ������� Metallica ���� ���������� � ���������� �����, ��� 110 ��������� ���������. </p></a>
      </div> 
        
      <div class="Radiohead wow fadeInRight" data-wow-offset="90" >
          <a class="NameOfBand"  href="Radiohead.html">  <p> 25 ������. Radiohead � ���������� ���-������ �� �����������. 
              ������ ���� �������� � 1985 ����, � � ������ � ���� ������� �� �������. ����� Radiohead ����������� ���������� ��� �������������� ���, 
              ���� �� ������ ������ �������� ������������� �� ����-���� �� ���-���� � ����������� ������.</p></a>
        </div> 
        
        <div class="Tame_Impala wow fadeInRight" data-wow-offset="90"  >
            <a class="NameOfBand"  href="Tame_Impala.html"><p> 12 ����. Tame Impala (������. ���� ����?��; � ����. ����������� ������) � ������������� ����������� ���������, �������������� 
            ������� �������� (����� � �������� ������) � 2007 ���� � ���������� � ����� ���������������� ����. 
            � ���������� ������ ������ ������ ����� ������ (������, �����), ���� ������ (����������, �����, ������), ������� ������ (������, ����������) </p></a>
        </div>
        
       <div class="Splin wow fadeInRight" data-wow-offset="90"  >
            <a class="NameOfBand"  href="Splin.html"><p> 5 ���. ����� - ���������� ���-������ �� �����-����������. ���������� ����� � ��������� ��������.
             ����� �������� ������ ��������� 27 ��� 1994 ����.  5 ��� 2019 ������ ����� ������� �� ����� "Lion Club" ������� ���, ����������� ������ ���������� ���������� ������� ���������� ������.
            �������� ���� ����� ���������� ����������� ������, ����� ������������ ���� � ��������� �������� ���.
            ����� ���������� ������� ��������� 25 ��� 2018 ����. ��� 15-� �������� ��������� �������, ��������� � ������� ��� ��� ��� ������������ ����� ���������������� �����������.
             ������ ��������� � 2017 � 2018 ��. �� ������ ���������. ����� ���������� ������, � ��� ������� ������� ������������ ����������� - �������� �������, ������� ������ � ��������������.</p></a>
        </div>
        
      
 </body>
</html>
  