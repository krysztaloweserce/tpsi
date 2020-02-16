<?php
session_start();

if( !isset( $_POST['imie'])
	|| 
	!isset($_POST['nazwisko'])
	|| 
	!isset($_POST['plec'])
	|| 
	!isset($_POST['nazwisko-panienskie']) 
	|| 
	!isset($_POST['email'])
	|| 
	!isset($_POST['kod-pocztowy']) ){
	echo("Nie wypełniono wszystkich pól formularza!");
	die();
}

$array = [
	"Imię" => $imie,
	"Nazwisko" =>	$nazwisko,
	"Płeć" => $plec, 
	"Nazwisko panieńskie" => $nazwisko_panienskie, 
	"E-mail" => $email, 
	"Kod pocztowy" => $kod_pocztowy
	];

function show()
{
	foreach($array as $key => $value)
	{
		echo ($array[$key][$value]."<br/>");
	}
}

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$plec = $_POST["plec"];
$nazwisko_panienskie = $_POST["nazwisko-panienskie"];
$email = $_POST["email"];
$kod_pocztowy = $_POST["kod-pocztowy"];




?>

<!DOCTYPE HTML>
<html>
	<head>
	<title>Strona główna - Karol Grzybowski</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link rel="Stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
	<div id="container"> <!-- glowny kontener -->
	
		<div id="header" class="gray-bar"> <!-- naglowek -->
			<p class="p-center"><a href="./index.html">LOGO</a></p>
		</div>
		
		<div id="mid"> <!-- cialo -->
			
			<div id="left" class="yellow-bar"> <!-- lewa kolumna -->
				<div style="margin-top:10px;">
					<a href="./index.html">
					<button class="yellow-button">Strona główna</button>
					</a>
				</div>
				<div>
					<a href="./form.html">
					<button class="yellow-button">Formularz</button>
					</a>
				</div>
				<div>
					<a href="./session.html">
					<button class="yellow-button">Zawartość sesji</button>
					</a>
				</div>
			</div>
			
			<div id="center" class="yellow-bar"> <!-- srodkowa kolumna -->
				<div style="margin-top: 30px;">

					<?php
							show();
					?>
				</div>
			</div>
			
			<div id="right" class="yellow-bar"> <!-- prawa kolumna -->
				 <!-- ul - unordered list (punktowana), ol - ordered list (numerowana) -->
				<ul class="li-circle">  <!--  -->
					<!-- li - element listy -->
					<li><a href="www.google.com" target="_blank">google.com</a></li>
					 <!-- a - odnosnik href - adres target - miejsce otwarcia -->
					<li><a href = "http://irejer.zut.edu.pl/index.php?id=6695&no_cache=1" target="_blank">irejer.zut.edu.pl</a></li>
				</ul>
			</div>
		</div>
		
		<div class="clear"></div>
		<div id="footer" class="gray-bar"> <!-- stopka -->
			<p class="p-center">STOPKA</p>
		</div>
		
	</div>
	</body>
</html>

