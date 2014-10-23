
<?php
require('fpdf.php');
$case_id=$_REQUEST["case_id"];
mysql_connect("localhost","root","");
mysql_select_db("court");
$sql=mysql_query("select * from case_details where case_id='$case_id'");
$row=mysql_fetch_array($sql);
$sql1=mysql_query("select * from accused where accused_id='$row[accused]'");
$row1=mysql_fetch_array($sql1);
$sql2=mysql_query("select * from court where court_id='$row[court_id]'");
$row2=mysql_fetch_array($sql2);
$sql3=mysql_query("select * from prosecutor where prosecutor_id='$row[prosecutor]'");
$row3=mysql_fetch_array($sql3);
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.jpg',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','U',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->SetTextColor(0,0,255);
    $this->Cell(30,10,'GOVERNMENT OF KENYA',0,1,'C');
    $this->Ln(2);
     $this->Cell(80);
    $this->SetFont('Arial','i',13);
    $this->Cell(30,10,'(ministry of justice and constitution)',0,1,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class_id
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,"$row1[Accused_name] You have been summoned to attend court on $row[caseDate] for the case number $row[case_id] at $row2[court_name]  where ",0,1);
$pdf->Cell(0,10,"you have been accused of $row[charges] .faillure to do so you will be issued with a warrant of arrest ",0,1);

$pdf->Ln(50);
$pdf->Cell(0,10,"prosecutor of court of kenya, $row3[prosecutor_name] ",0,1);
$pdf->Ln(1);
$pdf->Image("sig.jpg");
$pdf->Ln(1);
$pdf->Cell(0,10, date(' F D jS Y '),0,1);

include("index0.php");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,"$rowb[Accusor_name] You have been summoned to attend court on $rowa[caseDate] for the case number $rowa[case_id] at $rowc[court_name]  where ",0,1);
$pdf->Cell(0,10,"you  reported charges of $rowa[charges] .faillure to do so you will be fined according to the law for false accusations",0,1);
$pdf->Ln(50);
$pdf->Cell(0,10,"prosecutor of court of kenya, $rowd[prosecutor_name] ",0,1);
$pdf->Ln(1);
$pdf->Image("sig.jpg");
$pdf->Ln(1);
$pdf->Cell(0,10, date(' F D jS Y '),0,1);
$pdf->Output();
?>