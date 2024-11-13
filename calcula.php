<?php
function calcularJurosSimples($capital, $taxa, $tempo) {
    // Fórmula dos juros simples: J = C * i * t
    $juros = $capital * ($taxa / 100) * $tempo;
    return $juros;
}

// Recebe os dados do formulário
$capital = $_GET['capital'];
$taxa = $_GET['taxa'];
$tempo = $_GET['tempo'];

// Chama a função para calcular os juros
$juros = calcularJurosSimples($capital, $taxa, $tempo);

$resultado = array('juros' => $juros);

echo json_encode($resultado);
?>