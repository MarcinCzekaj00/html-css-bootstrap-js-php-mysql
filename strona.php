<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nafta-Gaz Jasło</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="css.css">
  <link rel="shortcut icon" href="zdj/logo.png" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db";
  

  $polaczenie = mysqli_connect($servername, $username, $password, $dbname);
  if(!$polaczenie)
  {
    die("#ERROR - ".mysqli_connect_error());
    exit;
  }
?>
<body style="height:1500px">


<nav class="navbar navbar-expand-sm navbar-expand-md navbar-dark fixed-top">
  <a class="navbar-brand" href="strona.php">  <img src="zdj/logo.png" alt="logo" width=40>  Nafta-Gaz Jasło </a>
  

<!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  	<span class="navbar-toggler-icon"></span>
  </button>
  
  
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav ml-auto">
     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <img src="zdj/project.png" alt="projekty" width=30> Projekty
      </a>
      <div class="dropdown-menu" style="background-color: #f7f7f7">
        <a class="dropdown-item" href="gnig.php">Górnictwo naftowe i gazownictwo</a>
        <a class="dropdown-item" href="os.php">Ochrona środowiska</a>
        <a class="dropdown-item" href="e.php">Energetyka</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="praca.php"><img class="xd" src="zdj/praca.png" alt="praca" width=30> Praca </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="strona.php#kontakt"><img src="zdj/kontakt.png" alt="kontakt" width=30> Kontakt</a>
    </li>
    <?php 
    if(empty($_SESSION['login'])==1)  
      echo '<li class="nav-item">
      <a class="nav-link" href="logowanie.php"><img src="zdj/login.png" alt="logowanie" width=30> Logowanie</a></li>';
    else echo " ";


    if(empty($_SESSION['login'])==1)  
      echo '<li class="nav-item">
      <a class="nav-link" href="rej.php"><img src="zdj/rejestracja.png" alt="rejestracja" width=30> Zarejestruj się!</a></li>';
    else 
      echo " ";
    
    
      
    if(empty($_SESSION['login'])==1)
      echo " ";
    else
      echo '<li class="nav-item">
      <a class="nav-link">Zalogowany jako: '.$_SESSION['login'] .'</a></li>';
       
    if(empty($_SESSION['login'])==1)
      echo " ";
    else
      echo '<li class="nav-item">
    <a class="nav-link" href="wylogowanie.php">Wyloguj</a></li>';?>
  </ul>
</div>
</nav>
<div class="przerwa container-fluid">
</div>

<div class="tak container-fluid">
      <b>Dlaczego my?</b>
</div>

<div class="container-fluid" style="padding:0;margin:0">
  <div class="tlo2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-4 col-md-6" style="margin-top: 25px"><img class="img-fluid" src="zdj/project2.png"  alt="projekty" ><br><b>Ponad 3000 wykonanych projektów!</b></div>
        <div class="col-sm-12 col-lg-4 col-md-6"  style="margin-top: 25px"><img class="img-fluid" src="zdj/klient.png"  alt="klienci" ><br><b>Zaufało nam już ponad 7000 klientów!</b></div>
        <div class="col-sm-12 col-lg-4 col-md-6"  style="margin-top: 25px"><img class="img-fluid" src="zdj/rynek.webp"  alt="rynek" ><br>
        <b>Od 45 lat na rynku!</b></div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="padding:0;margin:0">
  <div class="tlo">
    <div class="wykonujemy"> <br><h2>Wykonujemy kompleksową dokumentację projektową z dziedzin takich jak:</h2><br> 
      <p><img class="img-fluid" src="zdj/gaz.png"  alt="gaz" > GÓRNICTWO NAFTOWE I GAZOWNICTWO </p>
        <p ><img class="img-fluid" src="zdj/drzewo.png"  alt="drzewo" > OCHRONA ŚRODOWISKA</p>
        <p><img class="img-fluid" src="zdj/ele.png"  alt="ele" > ENERGETYKA</p>
          <br>
         I wiele więcej!
        </div>
  </div>
</div>


<div class="nasi container-fluid">
  <b>Nasi pracownicy:</b>
</div>



<div class="pracownicy container-fluid">

<div class="pierwszy card">
  <img class="card-img-top" src="zdj/worker1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Marcin Czekaj</h4>
    <p class="card-text">36 letni projektant systemów grzewczych. Na swoim koncie ma wiele projektów i ukończonych kursów</p>
  </div>
</div>
<div class="drugi card">
  <img class="card-img-top" src="zdj/pracownica.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Helena Głowacka</h4>
    <p class="card-text">Ekspert do spraw finansów i ekonomii</p>
  </div>
</div>
</div>

<div class="container-fluid" id="kontakt" style="padding:0;margin:0">
  <div class="tlo3">
    <div class="napis"> <br><h2>Nasza siedziba firmy</h2><br>  
        <img class="zdjb" src="zdj/biuroo.jpg" alt="biuro">
      <p><img class="img-fluid" src="zdj/poland.png"  alt="polska" style="width: 40px"> ul. Ducala 11,38-220 Jasło </p>
        <p ><img class="img-fluid" src="zdj/list.png"  alt="list" > biuro@bpng.jaslo.pl</p>
        <p><img class="img-fluid" src="zdj/telefon.png"  alt="telefon" > +48 13 443 86 00</p><br><br>
        </div>
  </div>
</div>


  <div class="wrapper">
    <h1> GALERIA </h1>

    <div class="img-area">
          <div class="single-img"><img class="img-fluid" src="zdj/img1.jpg"  alt="jeden" ></div>
          <div class="single-img"><img class="img-fluid" src="zdj/img2.jpg"  alt="dwa" ></div>
          <div class="single-img"><img class="img-fluid" src="zdj/img3.jpg"  alt="trzy"></div>
          <div class="single-img"><img class="img-fluid" src="zdj/img4.jpg"  alt="cztery"></div>
          <div class="single-img"><img class="img-fluid" src="zdj/biuro.jpg"  alt="piec"></div>
          <div class="single-img"><img class="img-fluid" src="zdj/img5.jpg" alt="szesc"> </div>
    </div>
  </div>

<div class="container-fluid">
<footer class="page-footer font-small blue fixed-bottom">
  <div class="footer-copyright text-center py-3">             
    2020 © BPNG Jasło - Wszelkie prawa zastrzeżone
    <div style="float:left;color:white"> 
  <?php
if(!$_COOKIE['LicznikCook']){

if(file_exists("licznik.db")){
    if(is_writeable('licznik.db')){

    $bdpobierz = file_get_contents("licznik.db") + "1";

    $bdzapisz = fopen("licznik.db", "w");

    fwrite($bdzapisz, $bdpobierz);
    fclose($bdzapisz);
    }
}

setcookie("LicznikCook", '1', time()+3600*24);
}

if(file_exists("licznik.db")){

    if(is_writeable('licznik.db')){

        $bdpokaz = file_get_contents("licznik.db");

        echo "Licznik odwiedzin: $bdpokaz".'<br/><br/>';

        }else{echo "Plik nie jest zapisywalny. Ustaw chmody na 666.";}

}else{echo "Plik nie istnieje. Utwórz plik licznik.db i wgraj go na serwer.";}

?>
  </div>
    <div id="zegarek" style="FONT-WEIGHT:bold;COLOR:white;float: right; MARGIN-RIGHT: 10PX;"></div>
    <script>
<!--//--><![CDATA[// ><!--

<!-- <![CDATA[
function zegar() {
var data = new Date();
var godzina = data.getHours();
var min = data.getMinutes();
var sek = data.getSeconds();
 var terazjest = ""+godzina+
((min<10)?":0":":")+min+
((sek<10)?":0":":")+sek;
document.getElementById("zegarek").innerHTML = terazjest;
setTimeout("zegar()", 1000); }
zegar();
// ]]]]><![CDATA[> -->

//--><!]]>
</script>

 </div>

</footer>
</div>
</body>
</html>
