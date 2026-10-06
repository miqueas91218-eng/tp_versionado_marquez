<?php
// Módulo de cálculo para Cantina y Turnos de Pádel

function calcularTotalCantina($precioProducto, $cantidad) {
    return $precioProducto * $cantidad;
}

function calcularDescuentoSocio($total, $esSocio) {
    if ($esSocio) {
        return $total * 0.85; // 15% de descuento
    }
    return $total;
}

function calcularPrecioTurnoPadel($duracionHoras, $esNocturno) {
    $precioHora = 4000;
    $total = $duracionHoras * $precioHora;
    if ($esNocturno) {
        $total += 1000; // Adicional iluminación
    }
    return $total;
}
