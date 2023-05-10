<?php

    require_once('config.php'); 
        
    connectDatabase(); 

    function connectDatabase()
    {
        global $oConnection;
        $oConnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        if(empty($oConnection))
        {
            var_dump(mysqli_error_list($oConnection));
        }
       
        return true; 
    }

	function executeDatabase($query)
    {
        global $oConnection;
        
        $result = mysqli_query($oConnection, $query);

        if(!empty(mysqli_error_list($oConnection)))
        {
            var_dump(mysqli_error_list($oConnection));
        }

        if(strpos($query, 'SELECT') !== false)
        {
            $result = $result->fetch_all(MYSQLI_ASSOC);
        }

        return $result;
    }

?>
