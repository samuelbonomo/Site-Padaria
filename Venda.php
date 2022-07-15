<?php

$Pao = $_GET['Pao'];
$Valor1 = $_GET['Valor1'];

$PaoDoce = $_GET['PaoDoce'];
$Valor2 = $_GET['Valor2'];

$Baguete = $_GET['Baguete'];
$Valor3 = $_GET['Valor3'];

$Cafe = $_GET['Cafe'];
$Valor4 = $_GET['Valor4'];

$CafeLeite = $_GET['CafeLeite'];
$Valor5 = $_GET['Valor5'];

$Capuccino = $_GET['Capuccino'];
$Valor6 = $_GET['Valor6'];

$Chocolate = $_GET['Chocolate'];
$Valor7 = $_GET['Valor7'];

$Cha = $_GET['Cha'];
$Valor8 = $_GET['Valor8'];

$Leite = $_GET['Leite'];
$Valor9 = $_GET['Valor9'];

$Vitamina = $_GET['Vitamina'];
$Valor10 = $_GET['Valor10'];


$Iogurte = $_GET['Iogurte'];
$Valor11 = $_GET['Valor11'];


$Pingado = $_GET['Pingado'];
$Valor12 = $_GET['Valor12'];


$LeiteNescau = $_GET['LeiteNescau'];
$Valor13 = $_GET['Valor13'];


$SucoAgua = $_GET['SucoAgua'];
$Valor14 = $_GET['Valor14'];


$SucoLeite = $_GET['SucoLeite'];
$Valor15 = $_GET['Valor15'];


$Bauru = $_GET['Bauru'];
$Valor16 = $_GET['Valor16'];


$CachorroQuente = $_GET['CachorroQuente'];
$Valor17 = $_GET['Valor17'];


$Misto = $_GET['Misto'];
$Valor18 = $_GET['Valor18'];


$PaoOvo = $_GET['PaoOvo'];
$Valor19 = $_GET['Valor19'];


$PaoManteiga = $_GET['PaoManteiga'];
$Valor20 = $_GET['Valor20'];


$PaoChapa = $_GET['PaoChapa'];
$Valor21 = $_GET['Valor21'];


$XBurguer = $_GET['XBurguer'];
$Valor22 = $_GET['Valor22'];


$XSalada = $_GET['XSalada'];
$Valor23 = $_GET['Valor23'];


$XBacon = $_GET['XBacon'];
$Valor24 = $_GET['Valor24'];


$XFrango = $_GET['XFrango'];
$Valor25 = $_GET['Valor25'];


$XTudo = $_GET['XTudo'];
$Valor26 = $_GET['Valor26'];


$Pastel = $_GET['Pastel'];
$Valor27 = $_GET['Valor27'];


$Beirutes = $_GET['Beirutes'];
$Valor28 = $_GET['Valor28'];


$Panquecas = $_GET['Panquecas'];
$Valor29 = $_GET['Valor29'];


$Omelete = $_GET['Omelete'];
$Valor30 = $_GET['Valor30'];

$ValorFinal = ($Pao * $Valor1) + ($PaoDoce * $Valor2) + ($Baguete * $Valor3) + ($Cafe * $Valor4) + ($CafeLeite * $Valor5) + ($Capuccino * $Valor6) + ($Chocolate * $Valor7) + ($Cha * $Valor8) + ($Leite * $Valor9) + ($Vitamina * $Valor10) + ($Iogurte * $Valor11) + ($Pingado * $Valor12) + ($LeiteNescau * $Valor13) + ($SucoAgua * $Valor14) + ($SucoLeite * $Valor15) + ($Bauru * $Valor16) + ($CachorroQuente * $Valor17) + ($Misto * $Valor18) + ($PaoOvo * $Valor19) + ($PaoManteiga * $Valor20) + ($PaoChapa * $Valor21) + ($XBurguer * $Valor22) + ($XSalada * $Valor23) + ($XBacon * $Valor24) + ($XFrango * $Valor25) + ($XTudo * $Valor26) + ($Pastel * $Valor27) + ($Beirutes * $Valor28) + ($Panquecas * $Valor29) + ($Omelete * $Valor30);

echo $ValorFinal;

