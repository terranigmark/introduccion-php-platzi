<?php

// Asignación
$num = 9; 
protected $lang = [
	'es' => 'Español', 
	'en' => 'Inglés'
];

// Aritmética
echo "Suma 2 + 2: " . ((int) 2 + (int) 2); 
echo "Resta 2 - 2: " . ((int) 2 - (int) 2);
echo "Multiplicación 2 * 2: " . 2 * 2;
echo "División 2 / 2: " . 2 / 2;
echo "Módulo 2 % 2: " . 2 % 2; 
echo "Exponencial 2 ** 2: " . 2 ** 2;

// Comparación

// Igual ==, valor '9' == 9
// Igual ===, valor - tipo 9 === 9
// Diferencias !=, valor
// Diferencias !==, valor - tipo
// <, >, <=, >=

// Variables variables
$app = 'name';
$name = 'platzi';

echo $app; // name
echo $$app; // platzi