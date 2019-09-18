<?php
/*$a="localhost";
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
require("library/fpdf.php ");*/
include ("fpdf.php");
 
 class mypdf extends FPDF
 {
	 function header()
	 {
		 $this->cell(276,5,'NYAKARENZO STUDENT REPORT',0,0,'C');
		 $this->Ln();
		 $this->SetFont('Times','','12');
		 $this->cell(276,10,'information on student');
		 $this->Ln(20);
	 }
	 function footer()
	 {
		 $this->SetY(-15);
		 $this->SetFont('Arial','',B); 
	     $this->cell(0,10,'Pages'.$this->PageNo().'/{nb}',0,0,'C');
	 
	 }
	 function headerTable(){
	    $this->SetFont('Times','B',12);
        $this->cell(40,10,"First Name",1,0,'C');
        $this->cell(40,10,"Last Name",1,0,'C');
        $this->cell(50,10,"DoB",1,0,'C');
	    $this->cell(40,10,"Gender",1,0,'C');
        $this->cell(20,10,"Class",1,0,'C');
        $this->cell(40,10,"Fees Payment",1,0,'C');
        $this->cell(40,10,"Trans. Date",1,0,'C');
		$this->Ln();

	}
 } 
 $pdf= new mypdf();
 $pdf->AliasNBpages();
 $pdf->AddPage('L','A4',0);
 $pdf->headerTable();
 $pdf->Output();
?>