<?php 
	App::import('Vendor','xtcpdf');

	$tcpdf = new XTCPDF(); 

	$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

	$tcpdf->SetAuthor("Programme"); 
	$tcpdf->SetAutoPageBreak(true,PDF_MARGIN_BOTTOM); 
	$tcpdf->setHeaderFont(array($textfont,'',40)); 
	$tcpdf->xheadercolor = array(255,255,255); 
	$tcpdf->setPrintFooter(false);

	$tcpdf->xheadertext = '';
	
	$tcpdf->SetTextColor(0, 0, 0); 
	$tcpdf->SetFont($textfont,'',14); 
	$tcpdf->addPage();
	//$tcpdf->Cell(0,14, "Hello World", 0,1,'L'); 
	$i=1;
	//$tcpdf->Cell(0,40,"", 0,1,'L'); 
	$str = APP .'webroot/img/'.'AlsaceTechLogo.jpg';

	$html = '<img src="'.$str.'" alt="test alt attribute" border="0" />';
	$tcpdf->writeHTML($html, true, false, true, false, '');

	//$tcpdf->SetFont($textfont,'',50); 
	//$tcpdf->Write(0,"Forum Alsace Tech 2013",'',false,'L',true); 
	$tcpdf->SetFont($textfont,'',28); 
	//$tcpdf->Write(20,"",'',false,'L',true); 
	$tcpdf->Write(0,"Mon Programme",'',false,'L',true); 
	$tcpdf->Write(5,"",'',false,'L',true); 

	foreach ($confs as $conf) 
	{
		$txt1 = ($conf['Conf']['label'])." :";
		$txt2 = $conf['Conf']['start']."-".$conf['Conf']['end'];
		if($i==1)
		{
			$tcpdf->Write(0,"Conférences et présentations",'',false,'L',true);
			$tcpdf->Write(5,"",'',false,'L',true); 
		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Write(0,utf8_encode($txt1),'',false,'L',true); 
		$tcpdf->Write(0,utf8_encode($txt2),'',false,'L',true); 
		$i++;
	}
	$i=1;

	$tcpdf->Write(5,'','',false,'L',true); 
	foreach ($activities as $activity) 
	{
		$txt1 = ($activity['label']);
		//$tcpdf->write(100,utf8_encode($txt));		
		if($i==1)
		{
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Write(0,"Activités",'',false,'L',true); 
			$tcpdf->Write(5,'','',false,'L',true); 
		}
		$tcpdf->SetFont($textfont,'',14); 
		//$tcpdf->Cell(0,0, utf8_encode($txt1), 0,1,'L'); 
		$tcpdf->Write(0,utf8_encode($txt1),'',false,'L',true); 
		$i++;
	}
	$tcpdf->Write(5,'','',false,'L',true); 

	$i=1;
	foreach ($companies as $company) 
	{		
		if($i==1)
		{
			$tcpdf->SetFont($textfont,'',28); 
			$tcpdf->Write(0,"Entreprises selectionnées",'',false,'L',true); 
			$tcpdf->Write(5,'','',false,'L',true); 
		}
		$tcpdf->SetFont($textfont,'',14); 
		$tcpdf->Cell(0,0, utf8_encode($company['label']), 0,1,'L'); 
		$i++;
	}

	echo $tcpdf->Output('planning.pdf', 'D'); 
?>