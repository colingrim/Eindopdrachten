<?php
	
	$sHtml2 = '';

	if(empty($_GET['page']))
	{
		$_GET['page'] = 'Contact';
	}

	if(!empty($_GET['page']))
	{
		$sPath = __DIR__ . DIRECTORY_SEPARATOR . $_GET['page'] . '.php';

		// print_r($sPath);
        
		if(file_exists($sPath))
		{
			 // $sHtml2 .= 'file exists!';
			$sHtml2 .= include($sPath);
		}
		else
		{
			$sHtml2 .= 'error, no page found!';
		}
	}
	else 
	{
		$sHtml2 .= 'error, no page found!';
	}

	return $sHtml2;

	

?>