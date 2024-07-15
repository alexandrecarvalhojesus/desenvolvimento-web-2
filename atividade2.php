separados por barras
// 01
<?php
    $nota1 = 69;
    $nota2 = 6;
    $nota3 = 9;
    $nota4 = 69;

    $total = $nota1 + $nota2 + $nota3 + $nota4;
    echo "Pontuação total: $total\n";
?>


// 02
<?php
$nota1 = 69;
$nota2 = 6;
$nota3 = 9;
$nota4 = 69;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "Média: $media\n";
?>


// 03
<?php
$largura = 69;
$altura = 69;

$area = $largura * $altura;
echo "Área do retângulo: $area metros quadrados\n";
?>


// 04
<?php
$valor1 = 6969;
$valor2 = 69;

$diferenca = $valor1 - $valor2;
echo "Diferença: $diferenca\n";
?>


// 05
<?php
$valor1 = 6969;
$valor2 = 69;

if ($valor2 != 0) {
    $divisao = $valor1 / $valor2;
    echo "Divisão: $divisao\n";
} else {
    echo "Erro: Divisão por zero\n";
}
?>


// 06
<?php
$pesoQuilos = 69;

$pesoGramas = $pesoQuilos * 1000;
echo "Peso em gramas: $pesoGramas\n";
?>


// 07
<?php
$pesoPrato = 0.69; // em quilos
$precoPorQuilo = 45;

$valorPagar = $pesoPrato * $precoPorQuilo;
echo "Valor a pagar: R$$valorPagar\n";
?>


// 08
<?php
$fahrenheit = 69;

$celsius = ($fahrenheit - 32) / 1.8;
echo "Temperatura: $fahrenheit°F = $celsius°C\n";
?>


// 09
<?php
$raio = 69;

$diametro = 2 * $raio;
$circunferencia = 2 * pi() * $raio;
$area = pi() * pow($raio, 2);

echo "Diâmetro: $diametro\n";
echo "Comprimento: $circunferencia\n";
echo "Área: $area\n";
?>


// 10
<?php
$a = 6969;
$b = 69;

echo "Antes da troca: A = $a, B = $b\n";

$temp = $a;
$a = $b;
$b = $temp;

echo "Depois da troca: A = $a, B = $b\n";
?>