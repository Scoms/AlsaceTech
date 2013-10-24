<?php 
	App::import('Vendor','xtcpdf');

	$tcpdf = new XTCPDF(); 

	$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

	$tcpdf->SetAuthor("Programme"); 
	$tcpdf->SetAutoPageBreak( false ); 
	$tcpdf->setHeaderFont(array($textfont,'',40)); 
	$tcpdf->xheadercolor = array(255,255,255); 
	$tcpdf->setPrintFooter(false);

	$tcpdf->xheadertext = 'Forum Alsace Tech 2013';
	
	$tcpdf->SetTextColor(0, 0, 0); 
	$tcpdf->SetFont($textfont,'',14); 
	$tcpdf->addPage();
	//$tcpdf->Cell(0,14, "Hello World", 0,1,'L'); 
	$i=1;
	$tcpdf->Cell(0,40,"", 0,1,'L'); 
	$tcpdf->SetFont($textfont,'',28); 
	$tcpdf->Cell(0,0," Mon Programme", 0,1,'L'); 
	
	foreach ($confs as $conf) 
	{
		$txt1 = ($conf['Conf']['label'])." :";
		$txt2 = $conf['Conf']['start']."-".$conf['Conf']['end'];
		if($i==1)
		{
			$tcpdf->Cell(0,0,"Conférences et présentations", 0,1,'L'); 
			$tcpdf->Cell(50,10,"", 0,1,'L'); 

		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Cell(0,0, utf8_encode($txt1), 0,1,'L'); 
		$tcpdf->Cell(0,0, utf8_encode($txt2), 0,1,'L'); 
		$i++;
	}/*
	if($conf==null)
	{
		$tcpdf->Cell(0,40,"", 0,1,'L'); 
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Cell(0,0," Mon Programme", 0,1,'L'); 
			$tcpdf->Cell(0,0,"Conférences et présentations", 0,1,'L'); 
			$tcpdf->Cell(50,10,"", 0,1,'L'); 
		}*/
	$i=1;
	foreach ($activities as $activity) 
	{
		$txt1 = ($activity['label']);
		//$tcpdf->write(100,utf8_encode($txt));
		
		if($i==1)
		{
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Cell(50,20,"Activités", 0,1,'L'); 
		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Cell(0,0, utf8_encode($txt1), 0,1,'L'); 
		$i++;
	}

	$i=1;
	$tcpdf->addPage();
	foreach ($companies as $company) 
	{		
		if($i==1)
		{
			$tcpdf->Cell(50,70,"", 0,1,'L'); 
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Cell(0,0,"Entreprises selectionnées", 0,1,'L'); 
			$tcpdf->Cell(50,10,"", 0,1,'L'); 
		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Cell(0,0, utf8_encode($company['label']), 0,1,'L'); 
		$i++;
	}
	echo $tcpdf->Output('planning.pdf', 'D'); 
?>