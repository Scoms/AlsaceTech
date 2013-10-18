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
	$tcpdf->SetFont($textfont,'',14); 
	$tcpdf->addPage();
	//$tcpdf->Cell(0,14, "Hello World", 0,1,'L'); 
	$i=1;
	foreach ($confs as $conf) 
	{
		$txt1 = ($conf['Conf']['label'])." :";
		$txt2 = $conf['Conf']['start']."-".$conf['Conf']['end'];
		//$tcpdf->write(100,utf8_encode($txt));
		if($i==1)
		{
			$tcpdf->Cell(50,70,"", 0,1,'L'); 
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Cell(0,0,"Conférences et présentations", 0,1,'L'); 
			$tcpdf->Cell(50,10,"", 0,1,'L'); 

		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Cell(0,0, utf8_encode($txt1), 0,1,'L'); 
		$tcpdf->Cell(0,0, utf8_encode($txt2), 0,1,'L'); 
		$i++;
	}

	$i=1;
	foreach ($activities as $activity) 
	{
		$txt1 = ($activity['label']);
		//$tcpdf->write(100,utf8_encode($txt));
		
		if($i==1)
		{
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Cell(50,20,"Activités", 0,1,'L'); 
			$tcpdf->Cell(50,10,"", 0,1,'L'); 
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
	
	//var_dump($txt);
	echo $tcpdf->Output('planning.pdf', 'D'); 
?>