<?php
	
	$sHtml2 = '
			<nav class="navbar">
                <a href="' . ROOT_URL . '?module=teamoverzicht&page=1e">1e</a>
				<a href="' . ROOT_URL . '?module=teamoverzicht&page=2e">2e</a>
				<a href="' . ROOT_URL . '?module=teamoverzicht&page=3e">3e</a>
				<a href="' . ROOT_URL . '?module=teamoverzicht&page=Dames1">Dames1</a>
				<a href="' . ROOT_URL . '?module=teamoverzicht&page=jo19">Jo19</a>
            </nav>
	';


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