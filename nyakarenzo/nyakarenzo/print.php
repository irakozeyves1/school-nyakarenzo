<?php
$a="localhost";
$b="root";
$c="";
$db="nyakarenzo";
$link=mysqli_connect($a,$b,$c);
if(!$link){echo "could not connect to server";} 
if (!mysqli_select_db($link,$db)){
echo "database not selected";
}
$sql="select * from student";

$record=mysqli_query($link,$sql);
require("library/fpdf.php ");
$pdf=new fpdf('L','mm','A4');
 
$pdf->AddPage();

$pdf ->SetFont('Arial','B',14);

$pdf->cell(276,5,'NYAKARENZO STUDENT REPORT',0,0,'C');
$pdf->Ln(20);
$pdf->cell(40,10,"First Name",1,0,'C');
$pdf->cell(40,10,"Last Name",1,0,'C');
$pdf->cell(50,10,"DoB",1,0,'C');
/*$pdf->cell(30,10,"MOTHERNAME",1,0,'C');
$pdf->cell(30,10,"FATHERNAME",1,0,'C');*/
$pdf->cell(30,10,"Gender",1,0,'C');
/*$pdf->cell(20,10,"District",1,0,'C');*/
/*$pdf->cell(20,10,"Sector",1,0,'C');*/
/*$pdf->cell(20,10,"CELLULE",1,0,'C');*/
/*$pdf->cell(20,10,"VILLAGE",1,0,'C');*/
$pdf->cell(40,10,"Class",1,0,'C');
$pdf->cell(40,10,"Fees Payment",1,0,'C');
$pdf->cell(40,10,"Trans. Date",1,0,'C');
/*$pdf->cell(20,10,"Comment",1,0,'C');*/
$pdf->Ln();
 
$pdf->SetFont('Arial','',14);


while ($row = mysqli_fetch_array($record))
{

$pdf->cell(40,10,$row['fname'],1,0,'C');
$pdf->cell(40,10,$row['lname'],1,0,'C');
$pdf->cell(50,10,$row['dob'],1,0,'C');
/*$pdf->cell(40,10,$row['mothername'],1,0,'C');*/
/*$pdf->cell(40,10,$row['fathername'],1,0,'C');*/
$pdf->cell(30,10,$row['gender'],1,0,'C');
/*$pdf->cell(40,10,$row['district'],1,0,'C');*/
/*$pdf->cell(40,10,$row['sector'],1,0,'C');*/
/*$pdf->cell(40,10,$row['cellule'],1,0,'C');*/
/*$pdf->cell(40,10,$row['village'],1,0,'C');*/
$pdf->cell(40,10,$row['yearofstudy'],1,0,'C');
$pdf->cell(40,10,$row['feespaid'],1,0,'C');
$pdf->cell(40,10,$row['transdate'],1,0,'C');
/*$pdf->cell(40,10,$row['comment'],1,0,'C');*/
$pdf->Ln();
}
$pdf->OutPut();
?>