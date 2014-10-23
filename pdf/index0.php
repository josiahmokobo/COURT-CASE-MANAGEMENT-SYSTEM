
<?php
//require('fpdf.php');
//$case_id=$_REQUEST["case_id"];
//mysql_connect("localhost","root","");
//mysql_select_db("court");
$sqla=mysql_query("select * from case_details where case_id='$case_id'");
$rowa=mysql_fetch_array($sqla);
$sqlb=mysql_query("select * from accusor where accusor_id='$rowa[accusor]'");
$rowb=mysql_fetch_array($sqlb);
$sqlc=mysql_query("select * from court where court_id='$rowa[court_id]'");
$rowc=mysql_fetch_array($sqlc);
$sqld=mysql_query("select * from prosecutor where prosecutor_id='$rowa[prosecutor]'");
$rowd=mysql_fetch_array($sqld);
/**class PDF extends FPDF
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
$pdf->Cell(0,10,"$row1[Accusor_name] You have beeen summoned to attend court on $row[caseDate] for the case number $row[case_id] at $row2[court_name]  where ",0,1);
$pdf->Cell(0,10,"you  reported charges of $row[charges] .faillure to do so you will be fined according to the law for false accusations",0,1);
$pdf->Ln(50);
$pdf->Cell(0,10,"prosecutor of court of kenya, $row3[prosecutor_name] ",0,1);
$pdf->Ln(1);
$pdf->Image("sig.jpg");
$pdf->Ln(1);
$pdf->Cell(0,10, date(' F D jS Y '),0,1);
$pdf->Output("$row1[Accusor_name].pdf");
?>**/