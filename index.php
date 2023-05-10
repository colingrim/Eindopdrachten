<?php
    require_once('functions.php');

    $dbSetup = array(
        "CREATE TABLE IF NOT EXISTS content_table(
        id INT(6) AUTO_INCREMENT NOT NULL,
        titel varchar(10) NOT NULL,
        content TEXT NOT NULL,
        PRIMARY KEY (`id`)
        );",
        "CREATE TABLE IF NOT EXISTS form_table(
        id INT(6) AUTO_INCREMENT NOT NULL,
        voornaam varchar(10) NOT NULL,
        achternaam varchar(20) NOT NULL,
        geboortedatum DATE  NOT NULL,
        geslacht varchar(1) NOT NULL,
        gebruikersnaam varchar(20) NOT NULL,
        wachtwoord varchar(15) NOT NULL,
        PRIMARY KEY (`id`)
        );"
    );

    foreach($dbSetup as $table)
    {
        executeDatabase($table);
    }
    
	
	$sHtml = '';
    if (isset($_GET['module']) && !empty($_GET['module'])) 
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
        $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'Register' . DIRECTORY_SEPARATOR . 'index.php';
        if(file_exists($sPath))
        {
            // $sHtml .= 'module file exists!';
            $sHtml .= include($sPath);
        }
        else
        {
            $sHtml .= 'error, no  home module files found!';
        }
    }


	

?>
<!-- <!DOCTYPE html>
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
                <a href="?module=Homepagina">Home</a>
                <a href="?module=teamoverzicht&page=">Teamoverzicht</a>
                <a href="?module=Contactformulier">Contact</a>
            </nav>
            <div class="image"><img src="raket.png" class="Logo"></div>
        </header>
        <div class="main"> 


        </div>
        <footer>
            <p class="copyright">© Rode Raketten meer dan alleen voetbal!</footer>
</p>
        </footer>
    </body>
</html> -->