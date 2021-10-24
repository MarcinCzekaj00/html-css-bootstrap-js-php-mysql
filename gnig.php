<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
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
<body style="height:1450px;background-image: url(zdj/tlognig.jpg);background-size: 100% 100%;">


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

<div class="container-fluid">
	<div class="container-fluid" style="margin-top: 150px">
	</div>
	<div class="gnig1 container">
		<img class="img-fluid" src="zdj/gnig1.jpg" alt="gnig1">
	</div>
	<div class="cale container">
		<br><p><b>Biuro Projektów „Nafta-Gaz” Sp. z o.o. swoje know-how opiera na wieloletnim doświadczeniu projektowym w zagospodarowywaniu złóż ropy naftowej i gazu ziemnego oraz przesyle i dystrybucji gazu ziemnego. Połączenie doświadczenia i wielobranżowej wiedzy technicznej umożliwia nam realizację nawet najbardziej złożonych projektów dla górnictwa naftowego i gazownictwa. Niezależnie od wielkości inwestycji czy stopnia jej złożoności, każdego klienta traktujemy indywidualnie, opracowując rozwiązania projektowe w oparciu o wnikliwą analizę potrzeb. Stosujemy nowoczesne narzędzia projektowe oraz kompleksowe systemy zarządzania, dążąc do maksymalnego wykorzystania posiadanych zasobów wiedzy. Jesteśmy świadomi, że dobrze przygotowana dokumentacja projektowa jest podstawą skutecznej realizacji inwestycji, dlatego w naszych rozwiązaniach kładziemy nacisk na wysoką jakość, niezawodność oraz efektywność świadczonych usług jak również optymalizację kosztów realizowanych inwestycji. Wykonujemy kompleksową dokumentację projektową dla obiektów takich jak:</b></p>
		<div class="container">
      <ul>
			<li>strefy przyodwiertowe ropy naftowej i gazu ziemnego</li>
			<li>ropociągi i gazociągi kopalniane</li>
			<li>kopalnie ropy naftowej i gazu ziemnego</li>
			<li>tłocznie gazu</li>
			<li>magazyny gazu</li>
			<li>stacje pomiarowe, regulacyjne i redukcyjno-pomiarowe gazu</li>
			<li>węzły rozdzielczo-pomiarowe gazu</li>
			<li>gazociągi przesyłowe wysokiego ciśnienia</li>
			<li>gazociągi i sieci dystrybucyjne średniego i niskiego ciśnienia</li>
			<li>instalacje ochrony katodowej</li>
    </ul>
			<br>
		</div>
		<div class="gnig2 container">
			<img class="img-fluid" src="zdj/gnig2.jpg" alt="gnig1">
		</div>
	<div class="container">
		<br><p><b>Dla górnictwa naftowego i gazownictwa oferujemy kompleksowe usługi projektowe obejmujące wszystkie etapy realizacji inwestycji:</b></p>
	</div>
	<div class="container">
    <ul>
		<li>Koncepcje Programowo – Przestrzenne</li>
		<li>Programy Funkcjonalno – Użytkowe </li>
		<li>Studia Wykonalności i analizy przedprojektowe</li>
		<li>Projekty Technologiczne i Bazowe</li>
		<li>Ekspertyzy w zakresie ochrony środowiska</li>
		<li>Uzyskanie wszystkich wymaganych prawem uzgodnień i decyzji w procesie inwestycyjnym</li>
		<li>Operaty wodno-prawne, zanieczyszczeń powietrza, emisji hałasu i inne</li>
		<li>Dokumentacje Techniczne dla dopuszczeń UDT, TDT i Jednostek Notyfikowanych</li>
  </ul>
		<br><br><br>
	</div>
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