<?php  declare(strict_types=1); 

/*Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/

function calcularCostTrucada(float $minuts) : float {
    $costBase = 10; 
    $costExtra = 5; 

    if ($minuts <= 3) {
        return $costBase;
    } else {
        $minutsExtra = $minuts - 3;
        return $costBase + ($minutsExtra * $costExtra);
    }
}

echo "Cost trucada de 5 minuts: " . calcularCostTrucada(8) . " cèntims\n";


/*Exercici 2
Imagina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.*/



function afegirCompra(int $xocolates, int $xiclets, int $caramels) {
    $preuXocolata = 1.00;
    $preuXiclet = 0.50;
    $preuCaramel = 1.50;

    return ($xocolates * $preuXocolata) + ($xiclets * $preuXiclet) + ($caramels * $preuCaramel);
}

$totalCompra = afegirCompra(2, 1, 1);
echo "Total de la compra: float $totalCompra euros\n";


?>