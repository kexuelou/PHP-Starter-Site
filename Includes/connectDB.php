<?php
    require_once ("/Includes/simplecms-config.php");
    require_once ("/Functions/database.php");
   
    $i = 1;
    while ($i <= 10) 
    {
        // Create database connection
        $databaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
        if ($databaseConnection->connect_error)
        {
            if ($i == 10)
            {
                die("Database selection failed: " . $databaseConnection->connect_error);
             }
             usleep(500);
        } else
        {
             break;
        }
   }
    // Create tables if needed.
    prep_DB_content();
?>