<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recherche </title>

        <!-- Fonts -->
        <link href="" rel="stylesheet" type="text/css" >

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1 align="center" >Rechercher une voiture à louer</h1>
        <div align="center" border="1" >

            <h3>Veuillez remplire tout les shamps</h3><br><br>
                <form action="" method="POST" >
                @csrf
                    <input type="text" name="ville" placeholder="Ville"><br><br>

                    <input type="date" name="date" placeholder="Date"><br><br>

                    <input type="text" name="type" placeholder="Type"><br><br>

                    <input type="button" value="Rechercher" name="submit" ><br><br>

                </form>
            
        </div>
        

    </body>



</html>