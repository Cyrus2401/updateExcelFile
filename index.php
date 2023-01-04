<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (($open = fopen("file_example.csv", "r")) !== FALSE) 
    {
        $fixed = fopen("file_example_fixed.csv", 'w');

        $count = 0;
        
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
        {        
            //$data[7] = ($count != 0) ? date('d.m.Y',strtotime($data[7])) : $data[7];

            $data[7] = "Write by Cyrus";

            fputcsv ($fixed, $data, ",");

            $count++;

            /*Pour Cyrus*/
            //$array[] = $data;
        }

        fclose($fixed);

        fclose($open);

        echo "Fichier modifié et crée avec succès !";
    }

?>
