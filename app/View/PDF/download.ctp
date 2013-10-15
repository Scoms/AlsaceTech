<?php 
	App::import('Vendor','xtcpdf');

	$tcpdf = new XTCPDF(); 

	$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

	$tcpdf->SetAuthor("Programme"); 
	$tcpdf->SetAutoPageBreak( false ); 
	$tcpdf->setHeaderFont(array($textfont,'',40)); 
	$tcpdf->xheadercolor = array(255,255,255); 
	$tcpdf->xheadertext = 'Alsace Tech - Programme'; 
	$tcpdf->xfootertext = 'Programme forum AlsaceTech.'; 

	// Now you position and print your page content 
	// example:  
	$tcpdf->SetTextColor(0, 0, 0); 
	$tcpdf->SetFont($textfont,'B',20); 
	$tcpdf->addPage();
	//$tcpdf->Cell(0,14, "Hello World", 0,1,'L'); 
	$txt = "";
	foreach ($confs as $conf) 
	{
		$txt .= $conf['Conf']['label'];
	} 
 	$tcpdf->Cell(0,14, $txt, 0,1,'L');

	echo $tcpdf->Output('planning.pdf', 'D'); 
?>