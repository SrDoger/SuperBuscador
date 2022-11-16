<?php

require_once('../fpdf184/fpdf.php');
require_once('classes/Buscadores.php');
require_once('classes/conexion.php');



class PDF extends FPDF
{

    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 35);
        // Move to the right
        $this->Cell(70);
        // Title
        $this->Cell(30, 10, 'A.S.I.O.');
        $this->Ln();
        $this->Ln();
        // Line break
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function LoadData($file)
    {
        // Leer las líneas del fichero

        //$data = $file;
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode(';', trim($line));
        return $data;
    }

    function FancyTable($header, $data, $footer)
    {
        // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        // Cabecera
        $w = array(40, 41, 90, 25);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $this->Ln();
        // Restauración de colores y fuentes
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Datos
        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row[2], 'LR', 0, 'R', $fill);
            $this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        for ($i = 0; $i < count($footer); $i++)
            $this->Cell($w[$i], 7, $footer[$i], 1, 0, 'C', true);
        $this->Ln();
        // Línea de cierre
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$carrito = new Carrito();
$pdf = new PDF();
$lector = new SQL();
$session = new session();
$conexion = new BDD();

if (isset($_GET["id"]))
    if (!$conexion->ifExist("id", "usuarios", $_GET["id"]))
        $idproducto = $carrito->findCarrito($_GET["id"]);
    else header("Location:error.php?error=No existe el usuario pedido");
else if (isset($_SESSION["id"])) $idproducto = $carrito->findCarrito($_SESSION["id"]);

//$idproducto = $carrito->findCarrito(12);
$pdf->Ln();
$pdf->SetFont('Arial', '', 14);

/*
    Se setean los valores de la tabla
    Del titulo y los Valores
*/

$header = array('ID', 'Empresa', 'Producto', 'Precio');
$data = $lector->assemblerFile($lector->boolList($idproducto), $idproducto);

$total = 0;
foreach ($data as $productos) {
    $total += $productos[3];
}
$footer = array('Costo Total', '', '', $total);


$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->FancyTable($header, $data, $footer);
//$pdf->
$pdf->Output();
?>

<!--
    <style>
        .favorite {
            cursor: pointer;
        }

        .starInactive {
            font-variation-settings:
                'FILL'0,
                'wght'400,
                'GRAD'0,
                'opsz'48
        }

        .starActive {
            font-variation-settings:
                'FILL'1,
                'wght'400,
                'GRAD'0,
                'opsz'48
        }
    </style>
    <i onclick="myFunction(this)" id="star" class="fa fa-thumbs-up favorite"><span class="material-symbols-outlined">grade</span></i>
    <span class="material-symbols-outlined">star</span>

    <script>
        let star = document.getElementById("star");
        star.addEventListener("click", () => {
            star.classList.toggle("starActive");
        })
    </script>
-->