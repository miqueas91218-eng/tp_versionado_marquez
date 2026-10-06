<?php
require_once 'calculo.php';

echo '=== SISTEMA CANTINA PÁDEL ===\n';

$totalTurno = calcularPrecioTurnoPadel(2, true);
echo 'Reserva de cancha (2hs nocturno): $' . $totalTurno . '\n';

$totalCantina = calcularTotalCantina(1500, 3);
$totalFinal = calcularDescuentoSocio($totalCantina, true);
echo 'Total Cantina (con descuento socio): $' . $totalFinal . '\n';
