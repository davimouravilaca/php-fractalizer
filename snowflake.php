<?php
$largura = 1920;
$altura = 1080;
$stage = $_GET['stage'] ?? 4;

$imagem = imagecreatetruecolor($largura, $altura);
$corFundo = imagecolorallocate($imagem, 0, 0, 0); 
imagefill($imagem, 0, 0, $corFundo);

function randColor($imagem) {
    return imagecolorallocate($imagem, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
}

function drawVonKoch($imagem, $x1, $y1, $x2, $y2, $iteracoes) {
    if ($iteracoes == 0) {
        $corLinha = randColor($imagem);
        imageline($imagem, $x1, $y1, $x2, $y2, $corLinha);
        return;
    }

    // calcular pontos intermediários
    $x3 = $x1 + ($x2 - $x1) / 3;
    $y3 = $y1 + ($y2 - $y1) / 3;
    $x4 = $x1 + 2 * ($x2 - $x1) / 3;
    $y4 = $y1 + 2 * ($y2 - $y1) / 3;

    // calcular ponto de recuo
    $x5 = ($x3 + $x4) / 2 + (sqrt(3) / 2) * ($y4 - $y3);
    $y5 = ($y3 + $y4) / 2 - (sqrt(3) / 2) * ($x4 - $x3);

    // chamadas recursivas para os segmentos
    drawVonKoch($imagem, $x1, $y1, $x3, $y3, $iteracoes - 1);
    drawVonKoch($imagem, $x3, $y3, $x5, $y5, $iteracoes - 1);
    drawVonKoch($imagem, $x5, $y5, $x4, $y4, $iteracoes - 1);
    drawVonKoch($imagem, $x4, $y4, $x2, $y2, $iteracoes - 1);
}

$x1 = $largura * 0.1;
$y1 = $altura * 0.8;
$x2 = $largura * 0.9;
$y2 = $altura * 0.8;

$iteracoes = $stage - 1;

drawVonKoch($imagem, $x1, $y1, $x2, $y2, $iteracoes);

header('Content-Type: image/png');

imagepng($imagem);

imagedestroy($imagem);
?>
