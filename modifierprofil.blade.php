<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Modifier votre profil </title>

        <!-- Fonts -->
        <link href="" rel="stylesheet" type="text/css" >

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1 align="center" >Vos informations personnelles</h1>
        <div align="center" border="1" >
            <form action="" method="post">
            @csrf
                <input type="text" name="nometprenom" value="<?php ?>"><br><br>

                <input type="text" name="ville" value="<?php ?>"><br><br>

                <input type="tel" name="tel" value="<?php ?>"><br><br>

                <input type="password" name="mdp" value="<?php ?>"><br><br>

                <input type="button" name="submit" value="Enregistrer les modifications"><br><br>

            
            </form>
            
        </div>
        

    </body>



</html>