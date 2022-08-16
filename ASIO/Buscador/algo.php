<?php
require('C:\xampp\htdocs\SuperBuscador\fpdf184\fpdf.php');
class PDF extends FPDF
{

function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',35);
    // Move to the right
    $this->Cell(70);
    // Title
    $this->Cell(30,10,'A.S.I.O.');
    
    // Line break
}

function Body(){
    $pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
}
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Body();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>

<style>
    .favorite{
        cursor: pointer;
    }

    .starInactive{
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
    }
    .starActive{
        font-variation-settings:
        'FILL' 1,
        'wght' 400,  
        'GRAD' 0,
        'opsz' 48
    }

</style>
<i onclick="myFunction(this)" id="star" class="fa fa-thumbs-up favorite"><span class="material-symbols-outlined">grade</span></i>
<span class="material-symbols-outlined">star</span>

<script>
    
    let star = document.getElementById("star");
    star.addEventListener( "click",()=>{
        star.classList.toggle("starActive");
    } )

</script>