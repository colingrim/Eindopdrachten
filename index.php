<?php
    require_once('functions.php');


	
	$sHtml = '';
    if (isset($_GET['module']))
        if(!empty($_GET['module']))
        {
            $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR . 'index.php';
            
            if(file_exists($sPath))
            {
                // $sHtml .= 'module file exists!';
                $sHtml .= include($sPath);
            }
            else
            {
                $sHtml .= 'error, no module files found!';
            }
        }
        else 
        {
            $sHtml .= 'error, no module found!';
        }


	

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eindopdracht</title>
		<link rel="stylesheet" href="eindopdracht.css">
    </head>
	<body>
        <header>
            <nav class="navbar">
                <a href="<?php echo ROOT_URL; ?>?module=Homepagina">Home</a>
                <a href="<?php echo ROOT_URL; ?>?module=teamoverzicht&page=">Teamoverzicht</a>
                <a href="<?php echo ROOT_URL; ?>?module=Contactformulier">Contact</a>
            </nav>
            <div class="image"><img src="raket.jpg" class="Logo"></div>
        </header>
        <div class="main"> 

<?php
	echo $sHtml;
?>
        </div>
        <footer>
            <p class="copyright">© Rode Raketten meer dan alleen voetbal!</footer>
</p>
        </footer>
    </body>
</html>