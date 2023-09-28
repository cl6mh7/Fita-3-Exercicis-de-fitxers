<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');
            
            body {
                margin: 0;
                padding: 0;
                background-image: url("https://routerjockey.com/wp-content/uploads/2017/02/Matrix-code-gif.gif");
                background-attachment: fixed;
                background-size: cover;
                color: white;
                font-family: 'Pixelify Sans', cursive;
                font-size: 20px;
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;   
            }

        h1 {
            color: green;
        }

        .prueba {
            background-color: black;
            border: 1px solid black;
            border-radius: 4%;
            text-align: center;
            line-height: 50px;
            padding: 20px;
        }
    </style>
        <title>FITA 3</title>
        <link rel="shortcut icon" href="https://routerjockey.com/wp-content/uploads/2017/02/Matrix-code-gif.gif" />
    </head>
    <body>
        <h1>CONTACTES</h1>
        <div class = "prueba">

            <!-- AQUÍ COMENCEM L'ARXIU PHP. :) El codi anterior
            és només per decorar la pàgina.-->
            <?php
                // Obrim l'arxiu principal i el llegim amb "r".
                $rutatxt = "contactes31.txt";
                $abrirtxt = fopen($rutatxt, 'r');

                // Aquí configurem amb un condicional "if" que si
                // "$abrirtxt" s'obre sense problemes, realitzi el
                // segon arxiu.
                if ($abrirtxt) {
                    $segonArxiu = fopen("contactes31b.txt", 'w');

                    // Aquí llegim el contingut de cada línia i el
                    // passem al segón arxiu creat ("contactes31b.txt").
                    while (($line = fgets($abrirtxt)) !== false) {
                        
                        // Aquí substituirem les comes amb el símbol "#".
                        $line = str_replace(',', '#', $line);
                        // Escribe la línea en el segundo archivo
                        fwrite($segonArxiu, $line);
                    }

                    // Finalment, tanquem
                    // els dos arxius amb
                    // els qual hem treballat.
                    fclose($abrirtxt);
                    fclose($segonArxiu);
                } else {
                    
                    // Només per si de casualitat no pot
                    // obrir l'arxiu (encara que l'obri).
                    echo "No se pudo abrir el archivo.";
                }

                // Finalment, mostrem el contingut modificat al
                // navegador. El que fa "echo nl2br" és insertar
                // els salts de línia dels "Strings", car
                // s'imprimien sense elles i m'estava donant
                // problemes. :(
                echo nl2br(file_get_contents("contactes31b.txt"));
            ?>
        </div>
    </body>
</html>
