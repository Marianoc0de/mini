<?php
$pizza = $_POST["Pselect"];
$groote = $_POST["optradio"];
$Aantalpizza = $_POST["AantalP"];
$Postcode = $_POST["Pcode"];
$Huisnummer = $_POST["Hnummer"];
$Naam = $_POST["naam"];
$bestelBtn = $_POST["bestel"];
$TotaalKostenBesteling=0;
$TotaalKostenBesteling2 = $Aantalpizza * $groote;

//Zonder toppings cheesy Steak
if ($TotaalKostenBesteling2 >= 15)
{
    $TotaalKostenBesteling = $Aantalpizza * $groote;
    echo "$Aantalpizza $pizza <br>Totaal kosten: &#8364 $TotaalKostenBesteling";
}

elseif ($TotaalKostenBesteling2 >= 15)
{

}

else
{
    echo "niet genoeg";
}
?>