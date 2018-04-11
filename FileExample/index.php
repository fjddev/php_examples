<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $filename = 'myfile.txt';

            // Open a file for reading
            $myfile = fopen( $filename, 'r' ) or die( 'unable to open the file' );

            // Read the entire file
//            echo fread( $myfile, filesize( $filename ) ) . "<br>";

            // Read a single line from the file
            echo fgets( $myfile ) . "<br>";

            // Check if end of the file
            //echo feof( $myfile ) . "<br>";

            // Read a single character from the file
            //echo fgetc( $myfile );

            // Close the file
            fclose( $myfile );


            // Write to a file
            // $myfile = fopen( $filename, 'w' ) or die( 'unable to open the file' );
            // $mytext = "Well, this is happy news!\n";
            // fwrite( $myfile, $mytext );
            // $mytext = "It sure is.\n";
            // fwrite( $myfile, $mytext );
            // fclose( $myfile );

            // Append a file
            // $myfile = fopen( $filename, 'a' ) or die( 'unable to open the file' );
            // $mytext = "Hey can I come to the party?\n";
            // fwrite ($myfile, $mytext );
            // fclose( $myfile );

            // Create if not exists
            //$myfile = fopen( $filename, 'x' ) or die( 'unable to open the file' );

            // Read changes
/* Frank           
            $myfile = fopen( $filename, 'r' ) or die( 'unable to open the file' );
            echo fread( $myfile, filesize( $filename ) ) . "<br>";
            fclose( $myfile );
*/
            // r+ Open a file for read/write. File pointer starts at the beginning of the file
            // w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
            // a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
            // x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
        ?>
    </body>
</html>
