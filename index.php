<?php

    /* Code for show error*/
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    /* if file is opened*/
    if (($open = fopen("file_example.csv", "r")) !== FALSE) 
    {
        /* created the new file who will contain updates*/
        $fixed = fopen("file_example_fixed.csv", 'w');

        $count = 0;
           
        /* browse the old file and update */
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
        {        
            //$data[7] = ($count != 0) ? date('d.m.Y',strtotime($data[7])) : $data[7];

            $data[7] = "Write by Cyrus"; //data[7] correspond to 7th column of excel file

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
